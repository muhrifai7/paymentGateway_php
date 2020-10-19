<?php

require_once dirname(__FILE__) . '/vendor/autoload.php';

Veritrans_Config::$serverKey = "SB-Mid-server-gxOdmq1-eNsrN5ZBiu6SRYpt";
Veritrans_Config::$isSanitized = true;
Veritrans_Config::$isProduction = false;
Veritrans_Config::$is3ds = true;
// Required
$transaction_details = array(
  'order_id' => rand(),
  'gross_amount' => 10000, // no decimal allowed for creditcard
);

// Optional
$item1_details = array(
  'id' => 'a1',
  'price' => 10000,
  'quantity' => 1,
  'name' => "Pembayaran Sks"
);

// Optional
$item_details = array($item1_details);

// Optional
$billing_address = array(
  // 'first_name'    => "Andri",
  // 'last_name'     => "Litani",
  // 'address'       => "Mangga 20",
  // 'city'          => "Jakarta",
  // 'postal_code'   => "16602",
  // 'phone'         => "081122334455",
  // 'country_code'  => 'IDN'
);

// Optional
$shipping_address = array(
  // 'first_name'    => "Obet",
  // 'last_name'     => "Supriadi",
  // 'address'       => "Manggis 90",
  // 'city'          => "Jakarta",
  // 'postal_code'   => "16601",
  // 'phone'         => "08113366345",
  // 'country_code'  => 'IDN'
);

// Optional
$customer_details = array(
  'first_name'    => "Mahasiswa",
  'last_name'     => "Litani",
  'email'         => "muhrifai554@gmail.com",
  'phone'         => "081122334455",
  // 'billing_address'  => $billing_address,
  // 'shipping_address' => $shipping_address
);

// Optional, remove this to display all available payment methods
// $enable_payments = array('credit_card', 'cimb_clicks', 'mandiri_clickpay', 'echannel');

// Fill transaction details
$transaction = array(
  // 'enabled_payments' => $enable_payments,
  'transaction_details' => $transaction_details,
  'customer_details' => $customer_details,
  'item_details' => $item_details,
);

$snapToken = Veritrans_Snap::getSnapToken($transaction);
echo "snapToken = " . $snapToken;
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Siakad</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }
  </style>
  <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-Qn-opZodkJstvvC8"></script>
</head>

<body>
  <!-- Modal -->
  <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
          <button type="button" class="btn btn-primary" id="checkout-button">Bayar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="https://www.kodetr.com" target="_blank">
        <strong class="blue-text">Siakad</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link waves-effect" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>

        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect">
              <i class="fas fa-bell"></i>
              <span class="badge red z-depth-1 mr-1"> 2 </span>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

      </nav>
      <!--/.Navbar-->

      <!--Section: Products v.3-->
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">
            <pre><div id="result-json">JSON result will appear here after payment:<br></div></pre>
            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg" class="card-img-top" alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <h5>
                  <strong>
                    <a href="https://kodetr.000webhostapp.com/product.php" class="dark-grey-text">Denim shirt
                      <span class="badge badge-pill danger-color">NEW</span>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>Rp 120.000</strong>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">Checkout</button>
                </h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->

        </div>
        <!--Grid row-->



      </section>
      <!--Section: Products v.3-->



    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Copyright-->
    <div class="footer-copyright py-3">
      <a href="https://kodetr.com/" target="_blank"> Siakad </a>
      © 2019
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
  <script>
    var checkoutBtn = document.getElementById("checkout-button");

    checkoutBtn.onclick = function() {
      console.log('opening snap popup:');

      // Open Snap popup with defined callbacks.
      snap.pay('<?= $snapToken ?>', {
        // Optional
        onSuccess: function(result) {
          console.log('okekeke,process')
          /* You may add your own js here, this is just example */
          document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        },
        // Optional
        onPending: function(result) {
          console.log('okekeke,process pendiing')

          /* create or post data to database table request transaksi
              Handle HTTP Notification
          */
          document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        },
        // Optional
        onError: function(result) {
          /* show error*/
          document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        }
      });
      // For more advanced use, refer to: https://snap-docs.midtrans.com/#snap-js

    }
  </script>
</body>

</html>
<!-- 
"status_code": "201",
"status_message": "Transaksi sedang diproses",
"transaction_id": "44f7114c-7bde-4294-ac5a-5ba2a27be6b2",
"order_id": "1840162876",
"gross_amount": "10000.00",
"payment_type": "bank_transfer",
"transaction_time": "2020-10-19 20:06:02",
"transaction_status": "pending",
"va_numbers": [
{
"bank": "bca",
"va_number": "64414339697"
}
],
"fraud_status": "accept",
"bca_va_number": "64414339697",
"pdf_url": "https://app.sandbox.midtrans.com/snap/v1/transactions/dc238641-d10b-4d38-9249-7de98354b5da/pdf",
"finish_redirect_url": "http://example.com/finish?order_id=1840162876&status_code=201&transaction_status=pending"

 -->