<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LiveloController extends Controller
{

    public function index(Request $request)
    {

        //$page = 'https://viacep.com.br/ws/'.$Cep.'/json/unicode/';
        //$page = 'http://viacep.com.br/ws/07174510/json/unicode/';
        //return Http::get($page)->json();

        $page = 'https://apis-uat.pontoslivelo.com.br/api/oauth2/v1/token';
        $retorno =  Http::withHeaders([
                'Authorization' => 'Basic VFNTSTpMaXZlbG8xNUA='
            ])
            ->asForm()
            ->withOptions([
                'verify' => false
            ])
            ->post($page, [
                'grant_type' => 'client_credentials',
                'scope' => 'loyalty.customer.accrual.write',
            ]);
        return $retorno->json();
    }
}
