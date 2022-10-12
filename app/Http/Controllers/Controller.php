<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    public function __construct()
    {
        View::share ( 'nombanque', 'BNP PARISBAS' );
        View::share ( 'customer', 'GONZALEZ Anne Maélle' );
        View::share ( 'gestionnaire', 'KASSAL Gilbert Firin' );
        View::share ( 'amount', 28800 );
    }
}
