
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Integrate Feda Checkout to my website</title>
  <!-- <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script> -->
</head>
<body>

<!-- <div class="row" style="display: flex; justify-content: center; align-items: center; margin-top: 20vh">
    <div id="embed" style="width: 435px; height: 420px;"></div>  
</div>


  <script type="text/javascript">
      FedaPay.init({
        public_key: 'pk_sandbox_gDK2DsPUyL_G4x-ZW2enSJKT',
        transaction: {
          amount: {{$order_total}},
          description: 'Acheter mon ticket'
        },
        container: '#embed'
     });
  </script> -->

  <style>
      button {
        height: 70px; width:150px;color:white; font-weight:bolder;border-radius: 5px;font-size: 20px; background-color:#7D17F2;border: none;
      }
    
      button:hover{
          border: solid 2px white; transistion
      }

      form {
        display: flex; justify-content: center; align-items: center; margin-top: 20vh; flex-direction: column;
      }
  </style>


<form>

<h1>Je prend mes tickets</h1>

<input style="" type="hidden" name="field" value="test">
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

</body>



</html>