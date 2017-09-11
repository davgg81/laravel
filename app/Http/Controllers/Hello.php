<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NexoraTefpay\NexoraClass;



class Hello extends Controller
{
    public function index()
    {

        $tefpay = new NexoraClass();

        $phrase = $tefpay->echoPhrase("hola");

        return $phrase;
    }
}
