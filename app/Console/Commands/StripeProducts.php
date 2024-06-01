<?php

namespace App\Console\Commands;

use App\Helpers\Helper;
use App\Models\Product;
use App\Models\ProductPrice;
use Laravel\Cashier\Cashier;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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

            $products = $stripe->products->all(); 
            if(empty($products)) {
                Log::channel('stripe-products')->info('No product(s) found from stripe api');
                return;
            }

            Log::channel('stripe-products')->info(count($products) . " active product(s) found");

            // Loop though each product and create your own schema
            foreach($products as $product):
                $createdProduct = Product::firstOrNew([
                    'stripe_product' => $product->id
                ]);


                $createdProduct->name = $product->name ?? null;
                $createdProduct->sku = isset($product->metadata->sku) ? $product->metadata->sku : null;
                $createdProduct->image = !empty($product->images) ? $product->images[0] : null; // Check if images array is empty
                $createdProduct->active = $product->active ?? null;
                $createdProduct->description = $product->description ?? null;
                $createdProduct->slug = Helper::transformToSlug($product->name) ?? null;
                $createdProduct->features = !empty($product->metadata->features) ? $product->metadata->features : null;

                $createdProduct->save();
            endforeach;

            $prices = $stripe->prices->all(['limit' => 100, 'active' => true]);
            if(empty($prices)) {
                Log::channel('stripe-products')->info('No price(s) found from stripe api');
                return;
            }

            // now we need to add the existing prices for the products
            foreach($prices->data as $price):
                $interval = $price->recurring->interval;

                $createdProductPrice = ProductPrice::updateOrCreate([
                    'stripe_product' => $price->product,
                    'recurring_interval' => $interval,
                ],[
                    'stripe_product' => $price->product,
                    'stripe_price' => $price->id,
                    'price' => number_format($price->unit_amount_decimal / 100, 2, ',', ''),
                    'recurring_interval' => $interval,
                    'active' => $price->active
                ]);
                Log::channel('stripe-products')->info('--Update and saving stripe product(s) price successfully!--');
            endforeach;

            Log::channel('stripe-products')->info('--Getting and saving stripe product(s) cron, executed successfully!--');
        } catch(\Exception $e) {
            Log::channel('stripe-products')->info('Cannot executed cron : '.$e);
        }
        Log::channel('stripe-products')->info('---'.'end handle cron function from : '.__CLASS__.'---');
    }
}
