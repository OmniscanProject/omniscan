<?php

namespace App\Http\Controllers\Customer;

use Stripe\Stripe;
use App\Models\Customer;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CheckoutController
{
    public function checkout(Request $request)
    {
        try {
            $priceId = $request->input('price_id');
            $user = Auth::user();
            $customerStripeId = $user->stripe_id;
            Stripe::setApiKey(config('services.stripe.secret'));
            $session = Session::create([
                'success_url' => route('checkout.success') . "?session.id={CHECKOUT_SESSION_ID}",
                'cancel_url' => route('homepage'),
                'mode' => 'subscription',
                'customer' => $customerStripeId,
                'line_items' => [[
                    'price' => $priceId,
                    'quantity' => 1,
                ]]
            ]);

            return Redirect::to($session->url);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    public function checkoutSuccess(Request $request)
    {
        try {
            $checkout_session_id = $request->query('session_id');
            Stripe::setApiKey(config('services.stripe.secret'));
            $checkout_session = \Stripe\Checkout\Session::retrieve($checkout_session_id);
            $user = Auth::user();
            $customerStripeId = $user->stripe_id;
            if ($customerStripeId == null) {
                $customerStripeId = Customer::find($user->id);
                $customerStripeId->stripe_id = $checkout_session->customer;
                $customerStripeId->save();
            }
            $session = \Stripe\BillingPortal\Session::create([
                'customer' => $customerStripeId,
                
                'return_url' => route('checkout.success'),
            ]);
            return view('pages.checkout.success');
            // return Redirect::to($session->url);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
