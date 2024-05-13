<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class BillingPortalController
{
    public function createSession()
    {
        try {
            $return_url = 'http://127.0.0.1:8000/';
            $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));
            $user = Auth::user();
            $session = $stripe->billingPortal->sessions->create([
                'customer' => $user->stripe_id,
                'return_url' => $return_url,
            ]);
            return redirect($session->url);
        } catch (\Stripe\Exception\ApiErrorException $e) {
        } catch (\Exception $e) {
        }
    }
}