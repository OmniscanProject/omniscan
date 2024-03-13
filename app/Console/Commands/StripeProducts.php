<?php

namespace App\Console\Commands;

use App\Models\Product;
use Laravel\Cashier\Cashier;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Helpers\Helper;

class StripeProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:stripe-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';


    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::channel('stripe-products')->info('---'.'start handle cron function from : '.__CLASS__.'---');
        try {

            $stripe = Cashier::stripe();

            $items = []; // init empty array 

            $products = $stripe->products->all(); 
            if(empty($products)) {
                Log::channel('stripe-products')->info('No product(s) found from stripe api');
                return;
            }
            // Loop though each product and create your own schema
            foreach($products->data as $product):
                $key = $product->id;
                $tier = strtolower($product->name);
                $items[$key] = [];
                $items[$key]['id']   = $product->id;
                $items[$key]['tier'] = $tier;
                $items[$key]['name'] = $product->name;
                $items[$key]['description'] = $product->description;
                $items[$key]['image'] = !empty($product->images) ? $product->images[0] : null; // Check if images array is empty
                $items[$key]['active'] = $product->active ?? 0;
                $items[$key]['sku'] = $product->metadata->sku;
                $items[$key]['metakey'] = $product->metadata;
            endforeach;
            
            $prices = $stripe->prices->all();
            if(empty($prices)) {
                Log::channel('stripe-products')->info('No price(s) found from stripe api');
                return;
            }
            // now we need to add the existing prices for the products
            foreach($prices->data as $price):
                if($price->active == false) { continue; // skip all archived prices 
                }
    
                $key = $price->product;
                $items[$key]['subscription']['id'] = $price->id;
                $items[$key]['subscription']['price'] = $price->unit_amount;
                $items[$key]['subscription']['interval'] = $price->recurring->interval;
            endforeach;

            Log::channel('stripe-products')->info(count($items) . " active product(s) found");
            
            foreach($items as $item) {
                

                $product = Product::firstOrNew(
                    [
                    'stripe_product' => $item['id']
                    ]
                );

                $product->name = $item['name'] ?? null;
                $product->price = $item['subscription']['price'] ?? null;
                $product->sku = $item['sku'] ?? null;
                $product->image = $item['image'] ?? null;
                $product->active = $item['active'] ?? null;
                $product->description = $item['description'] ?? null;
                $product->slug = Helper::transformToSlug($item['name']) ?? null;
                $product->stripe_product = $item['id'] ?? null;

                $product->save();
            }

            Log::channel('stripe-products')->info('--Getting and saving stripe product(s) cron, executed successfully!--');
        } catch(\Exception $e) {
            Log::channel('stripe-products')->info('Cannot executed cron : '.$e);
        }
        Log::channel('stripe-products')->info('---'.'end handle cron function from : '.__CLASS__.'---');
    }
}
