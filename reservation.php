<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservation - Virtual Resort</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
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
<div class="container mb-4">
        <h1 class="mb-3">Reservation at Virtual Resort</h1>
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

        if($datediff == 0) {
          $datediff = 1;
        }
        if($roomType == "King"){
          $total = (200 * $datediff) * 1.07;
        }
        else if($roomType == "Queen"){
          $total = (150 * $datediff) * 1.07;
        }
        else if($roomType == "Suite"){
          $total = (300 * $datediff) * 1.07;
        }
        ?>

        <div class="alert alert-success" role="alert">Dear <?=$firstName?> <?=$lastName?>, thank you for your reservation! Please see your requested booking details below:</div>

        <table class='table table-striped table-dark'>
          <tr>
            <td>First Name</td>
            <td><?=$firstName?></td>
          </tr>
          <tr>
            <td>Last Name</td>
            <td><?=$lastName?></td>
          </tr>
          <tr>
            <td>Number & Street</td>
            <td><?=$numberStreet?></td>
          </tr>
          <tr>
            <td>City</td>
            <td><?=$city?></td>
          </tr>
          <tr>
            <td>State</td>
            <td><?=$state?></td>
          </tr>
          <tr>
            <td>Zip Code</td>
            <td><?=$zip?></td>
          </tr>
          <tr>
            <td>Check-In Date</td>
            <td><?=$checkIn?></td>
          </tr>
          <tr>
            <td>Check-Out Date</td>
            <td><?=$checkOut?></td>
          </tr>
          <tr>
            <td>Number of People</td>
            <td><?=$people?></td>
          </tr>
          <tr>
            <td>Room Type</td>
            <td><?=strtoupper($roomType)?></td>
          </tr>
          <tr>
            <td>Phone</td>
            <td><?=$phone?></td>
          </tr>
          <tr>
            <td>E-mail Address</td>
            <td><?=$mail?></td>
          </tr>
          <tr>
            <td>Payment Method</td>
            <td><?=strtoupper($payment)?></td>
          </tr>
          <tr>
            <td>Card Number</td>
            <td><?=$cardNumber?></td>
          </tr>
          <tr>
            <td>Special Requests</td>
            <td><?=$requests?></td>
          </tr>
          <tr>
            <td>Total Charge</td>
            <td><?=number_format($total, 2)?></td>
          </tr>
        </table>
      <?php } else {
      ?>
        <form method="post" action="">
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">First Name:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="firstName" name="firstName" required autofocus>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Last Name:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="lastName" name="lastName" required>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Number & Street:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="numberStreet" name="numberStreet" required>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">City:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="city" name="city" required>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">State:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="state" name="state" required>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Zip Code:</label>
          <div class="col-sm-9">
            <input type="number" class="form-control" id="zip" name="zip" required>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Check-In Date:</label>
          <div class="col-sm-9">
            <input type="date" class="form-control" id="checkIn" name="checkIn" required>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Check-Out Date:</label>
          <div class="col-sm-9">
            <input type="date" class="form-control" id="checkOut" name="checkOut" required>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Number of People:</label>
          <div class="col-sm-9">
            <input type="number" class="form-control" id="people" name="people" required>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Room Type:</label>
          <div class="col-sm-9">
            <select class="form-control" id="roomType" name="roomType" required>
              <option value="">Select Room Type:</option>
              <option value="King">King</option>
              <option value="Queen">Queen</option>
              <option value="Suite">Suite</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Phone:</label>
          <div class="col-sm-9">
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="(###) ###-####" required>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">E-mail Address:</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="mail" name="mail" placeholder="name@domain.com" required>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Payment Method:</label>
          <div class="col-sm-9">
            <select class="form-control" id="payment" name="payment" required>
              <option value="">Select Payment Method</option>
              <option value="Visa">Visa</option>
              <option value="Mastercard">MasterCard</option>
              <option value="AMEX">American Express</option>
              <option value="Discover">Discover</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Card Number:</label>
          <div class="col-sm-9">
            <input type="tel" class="form-control" id="cardNumber" name="cardNumber" pattern="\d{16}" placeholder="xxxx xxxx xxxx xxxx" required>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Special Requests:</label>
          <div class="col-sm-9">
            <textarea class="form-control" id="requests" name="requests" rows="3"></textarea>
          </div>
        </div>
            <div class="row mb-3">
                <div class="col-sm-9 offset-sm-3">
                    <button type="submit" class="btn btn-primary">Reserve a Room</button>
                    <button type="reset" class="btn btn-success">Clear</button>
                </div>
            </div>
        </form>
        <?php } ?>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</>
</html>