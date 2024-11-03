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
        if($roomType == "king"){
          $total = (200 * $people) * 1.07;
        }
        else if($roomType == "queen"){
          $total = (150 * $people) * 1.07;
        }
        else if($roomType == "suite"){
          $total = (300 * $people) * 1.07;
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