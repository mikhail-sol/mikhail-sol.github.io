<!doctype html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title -->
    <title>choreTracker - About Us</title>
    <!-- external stylesheets-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
  </head>
  <!-- header -->
  <body class="d-flex flex-column vh-100">
    <!-- header main nav-->
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
              <a class="nav-link" href="about-us.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="support.php">Support</a>
            </li>
            <li class="nav-item">
              <a class="nav_link btn btn-primary" href="auth/login-register.php">Login / Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- main content -->
    <main class="d-flex flex-column">

      <div class="container" aria-label="About us Section">
        <!-- main page title-->
        <div class="row mb-3">
          <div class="col text-center">
              <h1 class="text-primary">About Us</h1>
          </div>
        </div>

        <!-- about us image -->
        <div class="row">
            <div class="col">
                <img src="../assets/images/dad-kid-laundry.jpg" width="200px" alt="XXXX" class="d-block m-auto border border-secondary rounded">
            </div>
        </div>
    
        <!-- about us content -->
        <div class="row justify-content-center mt-3 mb-3">
            <div class="col-10 text-center bg-light border-bottom border-top border-2 border-primary p-1">
                <!--credit: https://www.lipsum.com/ -->
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet porta sapien. Morbi et pretium eros. Cras 
                    egestas molestie lorem, semper eleifend enim. Nulla sodales dui a diam pulvinar vehicula. 
                    Nullam malesuada a urna consectetur viverra. Aliquam dolor massa, sagittis at justo vel, 
                    tempus tempor dui. In suscipit, massa a aliquam scelerisque, quam urna cursus purus, et 
                    fermentum ligula mauris a nulla. Donec quam justo, scelerisque aliquam molestie eu, tincidunt non eros. 
                    Mauris eget luctus massa. Mauris nisi ligula, convallis vel egestas vel, interdum eu ante. Quisque eget 
                    fermentum mi. Sed lorem lacus, pretium et eleifend blandit, aliquet vitae quam. Suspendisse potenti.
                </p>
            </div>
        </div>
    </div>
    </div>
    </main>

    <!-- footer -->
    <footer class="footer py-3 border-top border-2 border-primary" aria-label="Footer">
      <!--bottom nav links-->
      <div class="container d-flex flex-column flex-sm-row justify-content-center align-items-center p-2">
        <a class="link px-3" href="privacy.php">Privacy Policy</a>
        <a class="link px-3" href="tos.php">Terms of Service</a>
        <a class="link px-3" href="support.php">Support</a>
      </div>
      <!-- (unofficial) copyright -->
      <div class="container text-center">
        <span>&copy; <?php echo date('Y'); ?>, choreTracker </span>
      </div>
    </footer>
    <!-- JS scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="..assets/js/script.js"></script>
  </body>
</html>