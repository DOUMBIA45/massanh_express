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
        'authLogin',
        'admin/store_service',
        'admin/delete_services',
        'admin/setore_actualite',
        'admin/delete_actualites',
        'admin/store_realisation',
        'admin/delete_realisation',
    ];
}
