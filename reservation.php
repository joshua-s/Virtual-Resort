<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta  content="width=device-width, initial-scale=1">
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
        <form>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">First Name:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="firstName"  required autofocus>
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Last Name:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="lastName"  required>
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Number & Street:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="numberStreet"  required>
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">City:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="city"  required>
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">State:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="state"  required>
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Zip Code:</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="zip"  required>
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Check-In Date:</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" id="checkIn"  required>
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Check-Out Date:</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" id="checkOut"  required>
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Number of People:</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="people" required>
                </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label">Room Type:</label>
              <div class="col-sm-9">
                <select class="form-control" id="roomType" required>
                  <option value="">Select Room Type:</option>
                  <option value="king">King</option>
                  <option value="queen">Queen</option>
                  <option value="suite">Suite</option>
                </select>
              </div>
              </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Phone:</label>
                <div class="col-sm-9">
                    <input type="tel" class="form-control" id="phone"  placeholder="(###) ###-####" required>
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">E-mail Address:</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="mail" placeholder="name@domain.com" required>
                </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label">Payment Method:</label>
              <div class="col-sm-9">
                <select class="form-control" id="payment" required>
                  <option value="">Select Payment Method</option>
                  <option value="visa">Visa</option>
                  <option value="mastercard">MasterCard</option>
                  <option value="amex">American Express</option>
                  <option value="discover">Discover</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Card Number: </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="cardNumber" required>
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Sepcial Requests:</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="requests" rows="3"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-9 offset-sm-3">
                    <button type="submit" class="btn btn-primary">Reserve a Room</button>
                    <button type="reset" class="btn btn-success">Clear</button>
                </div>
            </div>
        </form>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </>
</html>