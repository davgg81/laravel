<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }


    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    {!! Form::open(array('route' => 'submitpay', 'class' => 'form')) !!}

    <div class="form-group">
        {!! Form::submit('Pagar!',
          array('class'=>'btn btn-primary')) !!}
    </div>

    {!! Form::close() !!}

    <form id="back_form" name="back_form" method="POST" action='https://intepayments.tefpay.com'>
        <input type=hidden name="Ds_Merchant_Name" value="David Pérez" />
        <input type=hidden name="Ds_Merchant_MerchantCode" value="V99000254" />
        <input type=hidden name="Ds_Merchant_Amount" value="100" />
        <input type=hidden name="Ds_Merchant_TransactionType" value="1" />
        <!--input type=hidden name="Ds_Merchant_Url" value="" /-->
        <input type=hidden name="Ds_Merchant_MerchantSignature" value="59a6a84a441ef1.17948689" />
        <input type=hidden name="Ds_Merchant_UrlOK" value="www.google.es" />
        <input type=hidden name="Ds_Merchant_UrlKO" value="www.yahoo.es" />
        <input type=hidden name="Ds_Merchant_MatchingData" value="123456789012345678000" />
        <input type=hidden name="Ds_Merchant_Lang" value="es" />
        <!--input type=hidden name="Ds_Merchant_Description" value="" /-->
        <input type="submit" id="pagarImg" value="pagoform" style="cursor: pointer; margin-right: 118px;" >
    </form>


</div>
</body>
</html>
