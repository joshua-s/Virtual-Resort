<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comments - Virtual Resort</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
      footer {position: fixed;}
    </style>
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
          <a class="nav-link" href="/reservation.php">Reservation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/comments.php">Comments</a>
        </li>
      </ul>
    </div>
  </div>
</nav><div class="container mb-4">
    <?php
      if($_SERVER["REQUEST_METHOD"] == "POST") {
        $comments = htmlspecialchars($_POST['comments']);
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
      }
      if (empty($comments)) {
        echo "<h1>Dear guest, please enter your comments.</h1>";
      } else if (!empty($comments)) {
        if (!empty($name)){
          echo "<h1>Dear $name, thank you for the comments.</h1>";
        } else if (!empty($email)){
          echo "<h1>Dear $email, thank you for the comments.</h1>";
        }
      }
    ?>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>