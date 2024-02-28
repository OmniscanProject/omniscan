<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Http\Controllers\Controller as CashierController;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class StripeController extends CashierController
{
    /**
     * Crée une session de paiement avec Stripe Checkout.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createCheckoutSession(Request $request)
    {
        $user = Auth::user();
        $priceId = $request->input('price_id'); // ID du prix créé dans le tableau de bord Stripe

        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::create(
            [
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price' => $priceId,
                'quantity' => 1,
            ]],
            'mode' => 'subscription',
            'success_url' => route('checkout.success'),
            'cancel_url' => route('checkout.cancel'),
            'customer' => $user->stripe_id,
            ]
        );

        return response()->json(['sessionId' => $session->id]);
    }

    /**
     * Page de succès du paiement.
     *
     * @return \Illuminate\View\View
     */
    public function checkoutSuccess()
    {
        return view('checkout.success');
    }

    /**
     * Page d'annulation du paiement.
     *
     * @return \Illuminate\View\View
     */
    public function checkoutCancel()
    {
        return view('checkout.cancel');
    }
}
