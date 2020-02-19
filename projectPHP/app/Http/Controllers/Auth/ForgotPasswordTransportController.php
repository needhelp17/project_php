<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\TransportController;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordTransportController extends TransportController
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset TransportController
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
}
