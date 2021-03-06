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
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" id="email" type="text" data-stripe="email" placeholder="Your Name">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Issue Number</label>
                        <input class="form-control" id="issueno" type="text" data-stripe="issue_no" placeholder="Issue number">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Number Plate</label>
                        <input class="form-control" id="noplate" type="text" data-stripe="number_plate" placeholder="Your Number Plate">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Select Fee</label>
                          <select class="form-control" id="fee" >
                            <option value="50.00">£50.00 <small>(Paid within 7 Days)</small></option>
                            <option value="100.00">£100.00</option>
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
                        <div class="row">
                          <select class="form-control col-sm-6" id="exp_month">
                            <?php for ($month = 1; $month <= 12; $month++) { ?>
                            	<option value="<?php echo strlen($month)==1 ? '0'.$month : $month; ?>"><?php echo strlen($month)==1 ? '0'.$month : $month; ?></option>
                            <?php } ?>
                          </select>
                          <select class="form-control col-sm-6" id="exp_year">
                            <?php
                            for( $i = 0; $i <= 20; $i++ ){
                                $year = date('Y', strtotime((0 + $i).'years'));
                                echo '<option value="'.$year.'">'.$year.'</option>';
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <label>CVC</label>
                        <input class="form-control" id="cvc" type="tel" size="4" data-stripe="cvc" placeholder="***" autocomplete="off">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <button class="btn btn-block btn-success submit" type="submit">Pay Now</button>
                    </div>
                  </div>
                </div>
                </div>

            </div>
        </form>

      <footer class="footer">
        <p>Courthouse Carpark © Company 2017</p>
      </footer>

    </div>

        <script src="assets/js/jquery-1.11.3.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
