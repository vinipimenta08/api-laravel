<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TesteController extends Controller
{

    public function index()
    {
        //$page = 'https://viacep.com.br/ws/'.$Cep.'/json/unicode/';
        $page = 'http://viacep.com.br/ws/07174510/json/unicode/';
        return Http::get($page)->json();
        //return ['status' => false];
    }

    /**
     * METODO FEITO EM GET
     *
     * @param [type] $cep
     * @return void
     */
    public function Buscacep($cep)
    {
        $page = 'http://viacep.com.br/ws/'.$cep.'/json/unicode/';
        return Http::get($page)->json();
    }

    /**
     * METODO FEITO EM POST
     *
     * @param Request $request
     * @return void
     */
    public function buscaCepPost(Request $request)
    {
        $page = 'http://viacep.com.br/ws/'.$request->cep.'/json/unicode/';
        
        //$teste = new Http();
        //return $teste::get($page)->json();
        return Http::get($page)->json();
    }
}
