<?php

namespace App\Http\Controllers;


use NexoraTefpay\NexoraClass;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7;
use Redirect;
use ReflectionClass;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{

    public function submitpay(){
        $tefpay = new NexoraClass();

        $client = new Client(['allow_redirects' => [
            'max'             => 10,        // allow at most 10 redirects.
            'strict'          => true,      // use "strict" RFC compliant redirects.
            'referer'         => true,      // add a Referer header
            'track_redirects' => true
        ]]);

        $response = $client->request('POST','https://intepayments.tefpay.com', [
            'form_params' => [
                'Ds_Merchant_Amount' => '100',
                'Ds_Merchant_MatchingData' => '123456789012345678000',
                'Ds_Merchant_TransactionType' => '1',
                'Ds_Merchant_MerchantCode' => 'V99000254',
                'Ds_Merchant_UrlOK' => 'http://www.google.es',
                'Ds_Merchant_UrlKO' => 'http://www.yahoo.com',
                'Ds_Merchant_MerchantSignature' => '59a6a84a441ef1.17948689',
            ]
        ]);

        $code = $response->getStatusCode();
        //$tefpay->clientTransaction($payData);

        $stringheader = "";

        if ($response->hasHeader('Content-Length')) {
            $header = $response->getHeader('Content-Length');
            $stringheader = serialize($header);
        }


        $body = $response->getBody();
        $stringBody = (string) $body;

        $redirects = $response->getHeaderLine('X-Guzzle-Redirect-Status-History');

        return $response;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
