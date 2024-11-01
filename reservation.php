<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservation - Virtual Resort</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    <h1 class="display-6 text-center">Virtual Resort</h1>
    <nav class="navbar navbar-expand-lg bg-success">
  <div class="container">
    <a class="navbar-brand" href="/">
      <i class="bi bi-buildings"></i>
      Virtual Resort
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
<div class="container form-container">
        <h1>Reservation at Virtual Resort</h1>
        <form>
            <div class="form-group row">
                <label for="firstName" class="col-12 col-sm-4 col-form-label">First Name:</label>
                <div class="col-12 col-sm-8">
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="lastName" class="col-12 col-sm-4 col-form-label">Last Name:</label>
                <div class="col-12 col-sm-8">
                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="addressNumber" class="col-12 col-sm-4 col-form-label">Number & Street:</label>
                <div class="col-12 col-sm-8">
                    <input type="text" class="form-control" id="numberStreet" name="numberStreet" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="city" class="col-12 col-sm-4 col-form-label">City:</label>
                <div class="col-12 col-sm-8">
                    <input type="text" class="form-control" id="city" name="city" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="state" class="col-12 col-sm-4 col-form-label">State:</label>
                <div class="col-12 col-sm-8">
                    <input type="text" class="form-control" id="state" name="state" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="state" class="col-12 col-sm-4 col-form-label">Zip Code:</label>
                <div class="col-12 col-sm-8">
                    <input type="zip" class="form-control" id="zip" name="zip" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="reservationDate" class="col-12 col-sm-4 col-form-label">Reservation Date:</label>
                <div class="col-12 col-sm-8">
                    <input type="date" class="form-control" id="reservationDate" name="reservationDate" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="comments" class="col-12 col-sm-4 col-form-label">Comments:</label>
                <div class="col-12 col-sm-8">
                    <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12 col-sm-8 offset-sm-4">
                    <button type="submit" class="btn btn-primary">Reserve Now</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>