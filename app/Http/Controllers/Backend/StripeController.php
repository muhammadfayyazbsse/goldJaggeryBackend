<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Stripe;

class StripeController extends Controller
{
    /**
     * success response method.
     *
     * @return Application|Factory|View|Response
     */
    public function stripe()
    {
        return view('stripe');
    }

    /**
     * success response method.
     *
     * @param Request $request
     * @return Response
     * @throws Stripe\Exception\ApiErrorException
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount" => 1380 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "I have transfer you initial 25% payment for gold jaggery project."
        ]);

        Session::flash('success', 'Payment successful!');

        return back();
    }
}
