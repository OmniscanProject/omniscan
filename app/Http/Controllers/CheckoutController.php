<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class CheckoutController
{
    public function checkout(Request $request)
    {
        try {
            $user = Auth::user();
            $priceId = $request->input('priceId');
            Stripe::setApiKey(config('services.stripe.secret'));
            $session = Session::create([
                'success_url' => route('checkoutSucess')."?session.id={CHECKOUT_SESSION_ID}",
                'cancel_url' => route('homepage'),
                'mode' => 'subscription',
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
        $return_url = '{{DOMAIN_URL}}';
        dd($request->get("session_id"));
        //$stripe_customer_id = $request->session()->id;
        Stripe::setApiKey(config('services.stripe.secret'));
        $session = \Stripe\BillingPortal\Session::create([
            //'customer' => $stripe_customer_id,
            //'return_url' => $return_url,
        ]);
        return view('homepage');
    }
}
