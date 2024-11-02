<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Activities - Virtual Resort</title>
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
          <a class="nav-link active" aria-current="page" href="/activities.php">Activities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/reservation.php">Reservation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/comments.php">Comments</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mb-4">

<h1 class="mb-3">Activities at Pacific Trails</h1>

<div class="row row-cols-1 row-cols-md-2 g-4 mb-3">
  <div class="col">
    <div class="card">
      <img src="./images/lodge.jpg" class="card-img-top" alt="The lodge." style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#lodge">
      <div class="card-body">
        <h5 class="card-title">The Lodge</h5>
        <p class="card-text">This is the lodge where we have the Overlook cafe.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./images/resort.jpg" class="card-img-top" alt="The resort." style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#resort">
      <div class="card-body">
        <h5 class="card-title">The Resort</h5>
        <p class="card-text">This is the resort where all of our yurts are located.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./images/view.jpg" class="card-img-top" alt="The view." style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#view">
      <div class="card-body">
        <h5 class="card-title">The View</h5>
        <p class="card-text">This is the view from right oustide your yurt.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./images/yurt.jpg" class="card-img-top" alt="The yurt." style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#yurt">
      <div class="card-body">
        <h5 class="card-title">The Yurt</h5>
        <p class="card-text">A picture from inside our wonderful yurt.</p>
      </div>
    </div>
  </div>
</div>


<p><em>Images are sourced from <a href="https://www.treebonesresort.com/">TreeBones Resort</a>.</em></p>
</div>


<div class="modal fade" id="lodge" tabindex="-1" aria-labelledby="lodgeLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="lodgeLabel">The Lodge</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="./images/lodge.jpg" class="img-fluid mx-auto d-block" style="height: 100%" alt="The lodge.">
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="resort" tabindex="-1" aria-labelledby="resortLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="resortLabel">The Resort</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="./images/resort.jpg" class="img-fluid mx-auto d-block" style="height: 100%" alt="The resort.">
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="view" tabindex="-1" aria-labelledby="viewLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="viewLabel">The View</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="./images/view.jpg" class="img-fluid mx-auto d-block" style="height: 100%" alt="The view.">
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="yurt" tabindex="-1" aria-labelledby="yurtLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="yurtLabel">The Yurt</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="./images/yurt.jpg" class="img-fluid mx-auto d-block" style="height: 100%" alt="The yurt.">
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php include 'footer.php'; ?>
  </body>
</html>