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
  <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-Qn-opZodkJstvvC8"></script>
</head>

<body>
<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg" class="card-img-top"
                  alt="">
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
      var token = "c3c4ef88-fd11-4baf-847f-816e85fe2a54"

      var checkoutBtn = document.getElementById("checkout-button");
      
      checkoutBtn.onclick = function(){
        console.log('opening snap popup:');
        
        // Open Snap popup with defined callbacks.
        snap.pay(token, {
          onSuccess: function(result) {
            console.log("SUCCESS", result);
            alert("Payment accepted \r\n"+JSON.stringify(result));
          },
          onPending: function(result) {
            console.log("Payment pending", result);
            alert("Payment pending \r\n"+JSON.stringify(result));
          },
          onError: function() {
            console.log("Payment error");
          }
        });
        // For more advanced use, refer to: https://snap-docs.midtrans.com/#snap-js

      }
    </script>
</body>
</html>
