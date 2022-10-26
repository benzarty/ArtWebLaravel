<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        // 'AddVelo',
        "EditVelo/2",
        "AllVelo",
        "destroyVelo/2",
         // 'AddEvent',
         "EditEvent/1",
         "getAllEvents",
         "destroyEvent/1",
         "upload-image",
         "velos"
    ];

}
