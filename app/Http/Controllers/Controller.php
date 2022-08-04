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
        View::share ( 'nombanque', 'CRÉDIT LYONNAISE' );
        View::share ( 'customer', 'CROGIEZ Martine' );
        View::share ( 'gestionnaire', 'HRABOWJ Martin Jean' );
        View::share ( 'amount', 28800 );
    }
}
