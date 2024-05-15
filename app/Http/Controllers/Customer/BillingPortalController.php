<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Support\Facades\Auth;

class BillingPortalController
{
    public function createSession()
    {
        try {
            $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));
            $user = Auth::user();
            $session = $stripe->billingPortal->sessions->create([
                'customer' => $user->stripe_id,
                'return_url' => route('checkout.success'),
            ]);
            return redirect($session->url);
        } catch (\Stripe\Exception\ApiErrorException $e) {
            // dd($e->getMessage());
        } catch (\Exception $e) {
            // dd($e->getMessage());
        }
    }
}