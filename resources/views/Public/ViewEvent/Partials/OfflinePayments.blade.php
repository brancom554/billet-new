<?php
  // if( isset($POST['field'])){
  //   die(var_dump($POST));
  // }

?>

<h3>@lang("Public_ViewEvent.payment_information")</h3>
@lang("Public_ViewEvent.below_payment_information_header")
{{-- @if($event->enable_offline_payments) --}}
{{-- {!! Form::open(['url' => route('postCreateOrder', ['event_id' => $event->id]), 'class' => 'ajax']) !!}
<div class="offline_payment_toggle">
    <div class="custom-checkbox">
        @if($payment_gateway === false) --}}
        {{-- Force offline payment if no gateway --}}
        {{-- <input type="hidden" name="pay_offline" value="1">
        <input id="pay_offline" type="checkbox" value="1" checked disabled>
        @else
        <input data-toggle="toggle" id="pay_offline" name="pay_offline" type="checkbox" value="1">
        @endif
        <label for="pay_offline">@lang("Public_ViewEvent.pay_using_offline_methods")</label>
    </div>
</div>
<div class="offline_payment" style="display: none;">
    <h5>@lang("Public_ViewEvent.offline_payment_instructions")</h5>
    <div class="well">
        {!! md_to_html($event->offline_payment_instructions) !!}
    </div>
    <input class="btn btn-lg btn-success card-submit" style="width:100%;" type="submit" value="Complete Order">
</div>
{!! Form::close() !!}
<style>
    .offline_payment_toggle {
        padding: 20px 0;
    }
</style> --}}
{{-- @endif --}}

<!-- <kkiapay-widget
name="CHEDE"
amount="{{$order_total}}"
key="24d1d480da4211ebb78cf3a40dbc99e1"
url="{{asset('welcome/images/logo.png')}}"
position="center"
sandbox="true"
theme="#404675"
data=""
callback="{{route('kkiapayPayment', ['event_id' => $event->id])}}">
</kkiapay-widget>

{{-- <input class="btn btn-lg btn-success kkiapay-button card-submit" style="width:100%;" type="submit" value="Complete Order"> --}}

<script src="https://cdn.kkiapay.me/k.js"></script> -->

<!-- <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <title>Integrate Feda Checkout to my website</title>
  <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>
</head>
<body>
  <button id="pay-btn">Pay 1000 FCFA</button>
  <script type="text/javascript">
      FedaPay.init('#pay-btn', {
      public_key: 'pk_sandbox_ivDTMhdVLy0s8xuO5yiRZ_P1',
      transaction: {
        amount: 1000,
        description: 'Buy my product'
      },
      customer: {
        email: 'johndoe@gmail.com',
        lastname: 'Doe',
        firstname: 'John',
      }
     });
  </script>
</body>
</html> -->

<form action="{{route('kkiapayPayment', ['event_id' => $event->id])}}" method="GET">
 <input type="hidden" name="field" value="test">
 <script
   src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
   data-public-key="pk_sandbox_gDK2DsPUyL_G4x-ZW2enSJKT"
   data-button-text="Payer {{$order_total}}"
   data-button-class="button-class"
   data-transaction-amount="{{$order_total}}"
   data-transaction-description="Transaction description"
   data-currency-iso="XOF">
 </script>
</form>
  

