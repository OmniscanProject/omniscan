<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class CheckoutController
{
    public function checkout(Request $request)
    {
        try {
            $priceId = $request->input('priceId');
            $user = Auth::user();
            $customerId = $user->stripe_id;
            Stripe::setApiKey(config('services.stripe.secret'));
            $session = Session::create([
                'success_url' => route('checkoutSucess') . "?session.id={CHECKOUT_SESSION_ID}",
                'cancel_url' => route('homepage'),
                'mode' => 'subscription',
                'customer' => $customerId,
                'line_items' => [[
                    'price' => $priceId,
                    'quantity' => 1,
                ]]
            ]);
            return Redirect::to($session->url);
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Page de succès du paiement.
     *
     * @return \Illuminate\View\View
     */
    public function checkoutSuccess(Request $request)
    {
        try {
            $checkout_session_id = $request->query('session_id');
            $return_url = 'http://127.0.0.1:8000/';
            Stripe::setApiKey(config('services.stripe.secret'));
            $checkout_session = \Stripe\Checkout\Session::retrieve($checkout_session_id);
            $user = Auth::user();
            $customerId = $user->stripe_id;
            if ($customerId == null) {
                $customerId = Customer::find($user->id);
                $customerId->stripe_id = $checkout_session->customer;
                $customerId->save();
            }
            $session = \Stripe\BillingPortal\Session::create([
                'customer' => $customerId,
                'return_url' => $return_url,
            ]);
            return Redirect::to($session->url);
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
