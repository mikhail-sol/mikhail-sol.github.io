<!doctype html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- title -->
    <title>choreTracker - Home</title>

    <!-- external stylesheets-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
  </head>

  <body class="d-flex flex-column vh-100">
    <!-- header main nav-->
    <!-- credit: -->
      <!--https://www.youtube.com/watch?v=7AT1X9Z41sA-->
      <!--https://www.w3schools.com/bootstrap5/bootstrap_navbar.php-->
    <nav class="navbar navbar-expand-sm navbar-light mb-4 border-bottom border-2 border-primary" aria-label="Main navigation">
      <div class="container-xxl">
        <!-- header logo -->
        <a href="../index.php" class="navbar-brand">
          <span class="fw-bold text-primary"> choreTracker (Logo) </span>
        </a>
        <!-- mobile nav toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- top nav bar links -->
        <div class="collapse navbar-collapse justify-content-end" id="main-nav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="pages/about-us.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/support.php">Support</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-primary" href="pages/auth/login-register.php">Login / Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- main content -->
    <main class="d-flex flex-column md-3">
      <!-- website desc -->
      <div class="container" aria-label="Website text description">
        <div class="row mb-3 justify-content-around">
          <div class="col-lg-6 col-sm-12 p-3 border bg-light mb-3">
            <p class="lead fw-bold text-center">
              <span class="fst-italic">Choretracker</span> helps YOU and your family get stuff done! With features such as:
            </p>
            <ul>
              <li>Personalised task adding</li>
              <li>Help others by taking over their tasks!</li>
              <li>A discussion board that helps everyone keep on the same page</li>
            </ul>
          </div>
          <!-- website desc side image-->
          <div class="col-lg-4 col-md-12 border bg-light d-flex align-items-center justify-content-center mb-3">
            <img src="assets/images/dad-kid-laundry.jpg" width="200px" class="rounded img-thumbnail" alt="Child helping parent clean dishes">
          </div>
        </div>
      </div>
      <!-- website slogan -->
      <div class="container" aria-label="Website text slogan">
        <div class="row mb-3 justify-content-around">
          <div class="col-lg-4 col-md-12 border bg-light">
            <p class="text-center">
              <em>A cleaner home, teamwork, and more...</em>
            </p>
          </div>
        </div>
      </div>
      <!-- image carousel -->
      <div class="container" aria-label="Image carousel">
        <div class="row mb-3 justify-content-around">
          <div class="col-lg-4 col-md-12 border bg-light">
            <div id="chore-carousel" class="carousel slide" data-bs-ride="carousel" aria-live="polite">
              <!--carousel indicator nav bottom buttons-->
              <div class="carousel-indicators" role="list">
                <!-- credit: -->
                  <!--https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Roles-->
                <button type="button" data-bs-target="#chore-carousel" data-bs-slide-to="0" class="active" aria-label="Chore family slide 1/3"></button>
                <button type="button" data-bs-target="#chore-carousel" data-bs-slide-to="1" aria-label="Chore family slide 2/3"></button>
                <button type="button" data-bs-target="#chore-carousel" data-bs-slide-to="2" aria-label="Chore family slide 3/3"></button>
              </div>
              <div class="carousel-inner ">
                <div class="carousel-item active">
                  <img src="assets/images/dad-kid-laundry.jpg" width="200px" alt="XXXX" class="d-block m-auto">
                </div>
                <div class="carousel-item">
                  <img src="assets/images/dad-kid-laundry.jpg" width="200px" alt="XXXX" class="d-block m-auto">
                </div>
                <div class="carousel-item">
                  <img src="assets/images/dad-kid-laundry.jpg" width="200px" alt="XXXX" class="d-block m-auto">
                </div>
              </div>
              <!--carousel nav side buttons/arrows-->
              <button class="carousel-control-prev" type="button" data-bs-target="#chore-carousel" data-bs-slide="prev" role="listnav" aria-label="Previous slide">
                <span class="carousel-control-prev-icon bg-dark"></span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#chore-carousel" data-bs-slide="next" role="listnav" aria-label="Next slide">
                <span class="carousel-control-next-icon bg-dark"></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- footer -->
    <footer class="footer py-3 border-top border-2 border-primary" aria-label="Footer">
      <!--bottom nav links-->
      <div class="container d-flex flex-column flex-sm-row justify-content-center align-items-center p-2">
        <a class="link px-3" href="pages/privacy.php">Privacy Policy</a>
        <a class="link px-3" href="pages/tos.php">Terms of Service</a>
        <a class="link px-3" href="pages/support.php">Support</a>
      </div>
      <!-- (unofficial) copyright -->
      <div class="container text-center">
        <span>&copy; <?php echo date('Y'); ?>, choreTracker</span>
      </div>
    </footer>
    <!-- JS external scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>