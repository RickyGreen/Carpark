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

      <form action="charge.php" method="post">
      <script src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
              data-key="<?php echo $stripe['publishable_key']; ?>"
              data-amount="5000" data-description="One year's subscription"></script>
    </form>

      <footer class="footer">
        <p>Courthouse Carpark © Company 2017</p>
      </footer>

    </div>

        <script src="assets/js/jquery-1.11.3.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
