<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservation - Virtual Resort</title>
    <style>
      .table-bordered>tbody>tr:nth-child(odd)>td{
        background-color: #8080800d;
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
  <body class="d-flex flex-column min-vh-100">
  <nav class="navbar navbar-expand-lg bg-success mb-4">
  <div class="container">
    <a class="navbar-brand" href="/">
      <i class="bi bi-buildings"></i>
      Virtual Resort
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/yurts.php">Yurts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/activities.php">Activities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/reservation.php">Reservation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/comments.php">Comments</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = htmlspecialchars($_POST['firstName']);
        $lastName = htmlspecialchars($_POST['lastName']);
        $numberStreet = htmlspecialchars($_POST['numberStreet']);
        $city = htmlspecialchars($_POST['city']);
        $state = htmlspecialchars($_POST['state']);
        $zip = htmlspecialchars($_POST['zip']);
        $checkIn = htmlspecialchars($_POST['checkIn']);
        $checkOut = htmlspecialchars($_POST['checkOut']);
        $people = htmlspecialchars($_POST['people']);
        $roomType = htmlspecialchars($_POST['roomType']);
        $phone = htmlspecialchars($_POST['phone']);
        $mail = htmlspecialchars($_POST['mail']);
        $payment = htmlspecialchars($_POST['payment']);
        $cardNumber = htmlspecialchars($_POST['cardNumber']);
        $requests = htmlspecialchars($_POST['requests']);
        $datediff = (strtotime($checkOut) - strtotime($checkIn)) / 86400;
        if($roomType == "King"){
          $total = (200 * $datediff) * 1.07;
        }
        else if($roomType == "Queen"){
          $total = (150 * $datediff) * 1.07;
        }
        else if($roomType == "Suite"){
          $total = (300 * $datediff) * 1.07;
        }

        echo "<h1>Thank you " . $firstName . " " . $lastName . " for your reservation</h1>";
        echo "<p>Your reservation details are as follows:</p>";
        echo "<table class='table table-bordered'>";
        echo "<tr><td>First Name</td><td>" . $firstName . "</td></tr>";
        echo "<tr><td>Last Name</td><td>" . $lastName . "</td></tr>";
        echo "<tr><td>Number & Street</td><td>" . $numberStreet . "</td></tr>";
        echo "<tr><td>City</td><td>" . $city . "</td></tr>";
        echo "<tr><td>State</td><td>" . $state . "</td></tr>";
        echo "<tr><td>Zip Code</td><td>" . $zip . "</td></tr>";
        echo "<tr><td>Check-In Date</td><td>" . $checkIn . "</td></tr>";
        echo "<tr><td>Check-Out Date</td><td>" . $checkOut . "</td></tr>";
        echo "<tr><td>Number of People</td><td>" . $people . "</td></tr>";
        echo "<tr><td>Room Type</td><td style='text-transform:uppercase;'>" . ($roomType) . "</td></tr>";
        echo "<tr><td>Phone</td><td>" . $phone . "</td></tr>";
        echo "<tr><td>E-mail Address</td><td>" . $mail . "</td></tr>";
        echo "<tr><td>Payment Method</td><td style='text-transform:uppercase;'>" . $payment . "</td></tr>";
        echo "<tr><td>Card Number</td><td>" . $cardNumber . "</td></tr>";
        echo "<tr><td>Special Requests</td><td>" . $requests . "</td></tr>";
        echo "<tr><td>Total Charge</td><td>$" . number_format($total, 2) . "</td></tr>";
        echo "</table>";
      }
      ?>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>