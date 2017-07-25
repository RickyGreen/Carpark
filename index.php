<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once('config.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Court</title>

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/main.min.css">
    </head>
    <body>
      <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted">CourtHouse</h3>
      </div>

      <div class="col-sm-6">
        <form action="charge.php" method="post" id="payment-form">
            <div class="panel panel-default">
              <div class="panel-body">
                  <div class="payment-errors"></div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Issue Number</label>
                        <input class="form-control" id="name" type="text" data-stripe="issue_no" placeholder="Issue number">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Number Plate</label>
                        <input class="form-control" id="name" type="text" data-stripe="number_plate" placeholder="Your Number Plate">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Select Fee</label>
                          <select class="form-control" >
                            <option value="1">£50.00 <small>(Paid within 7 Days)</small></option>
                            <option value="2">£100.00</option>
                          </select>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Cardholder Name</label>
                        <input class="form-control" id="name" type="text" data-stripe="name" placeholder="Your Name">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Card Number</label>
                        <input class="form-control" id="number" type="tel" size="20" data-stripe="number" placeholder="4242 4242 4242 4242">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-7">
                      <div class="form-group">
                        <label>Expiry</label>
                        <input class="form-control" id="cc_exp" type="tel" size="2" data-stripe="exp" placeholder="MM / YY">
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <label>CVC</label>
                        <input class="form-control" id="cvc" type="tel" size="4" data-stripe="cvc" placeholder="555" autocomplete="off">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <button class="btn btn-block btn-success submit" type="submit">Pay $Fine_price</button>
                    </div>
                  </div>
                </div>
                </div>

            </div>

        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="<?php echo $stripe['publishable_key']; ?>"
                data-description="Access for a year"
                data-amount="5000"
                data-locale="auto"></script>
        </form>

      <footer class="footer">
        <p>Courthouse Carpark © Company 2017</p>
      </footer>

    </div>

        <script src="assets/js/jquery-1.11.3.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
