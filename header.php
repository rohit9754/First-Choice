<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>First Choice</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/52829efaee.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Glegoo:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container-fluid topbar">
    <div class="row gx-0 d-lg-flex pt-2">
      <!-- Icons visible on large screens -->
      <div class="col-lg-7 text-start d-none d-sm-flex align-items-center">
        <a class="btn btn-sm-square bg-white text-primary me-1"
          href="https://api.whatsapp.com/send/?phone=+916377433416&amp;text=Hi,&amp;type=phone_number&amp;app_absent=0"><i
            class="fab fa-whatsapp"></i></a>
        <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
      </div>
      <!-- Contact numbers visible on large screens -->
      <div class="col-lg-5 px-5 text-end topbar d-none d-sm-flex" style="font-size: 15px;">
        <div class="h-100 d-inline-flex align-items-center py-3 me-4">
          <a class="btn btn-sm-square bg-white text-primary me-1" href="tel:+918504962589"><i class="fa fa-phone-alt"
              style="height: 10px; width: 10px;"></i></a>
          <a href="tel:+918504962589" style="color: #ffffff;">+91 8504962589</a>
        </div>
        <div class="h-100 d-inline-flex align-items-center py-3 me-4">
          <a class="btn btn-sm-square bg-white text-primary me-1"
            href="https://api.whatsapp.com/send/?phone=+916377433416&amp;text=Hi,&amp;type=phone_number&amp;app_absent=0"><i
              class="fab fa-whatsapp" style="height: 10px; width: 10px;"></i></a>
          <a href="tel:+918504962589" style="color: #ffffff;">+91 8504962589</a>
        </div>
      </div>
      <!-- Icons and numbers visible on small screens -->
      <div class="col-12 d-sm-none">
        <div class="h-100 d-inline-flex align-items-center">
          <a class="btn btn-sm-square bg-white text-primary me-1" href="tel:+918504962589"><i class="fa fa-phone-alt"
              style="height: 10px; width: 10px;"></i></a>
          <a href="tel:+918504962589" style="color: #ffffff;">+91 8504962589</a>
        </div>
        <div class="h-100 d-inline-flex align-items-center py-1 me-3">
          <a class="btn btn-sm-square bg-white text-primary me-1"
            href="https://api.whatsapp.com/send/?phone=+916377433416&amp;text=Hi,&amp;type=phone_number&amp;app_absent=0"><i
              class="fab fa-whatsapp" style="height: 10px; width: 10px;"></i></a>
          <a href="tel:+918504962589" style="color: #ffffff;">+91 8504962589</a>
        </div>
      </div>
    </div>
  </div>



  <nav class="navbar navbar-expand-lg navbar-color" aria-label="Eleventh navbar example">
    <div class="container-fluid">
      <a class="navbar-brand " href="#"><img src="images/logo.png" height="100px" width="100px"
          style="padding: none;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09"
        aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarsExample09">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Decorations</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="birthday-decor.php">Birthday Decoration</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
        <li class="nav-item call-now">
          <button class="call-now-button">Call Now</button>
        </li>
      </div>
    </div>
  </nav>

  <a href="tel:+916377433416" class="position-fixed btn btn-lg btn-primary btn-lg-square float-btn"
    style="bottom: 45px;">
    <i class="fa-solid fa-tty" style="color: #ffffff;"></i>
  </a>

  <a href="https://api.whatsapp.com/send/?phone=+916377433416&amp;text=Hi,&amp;type=phone_number&amp;app_absent=0"
    class="position-fixed btn btn-lg btn-primary btn-lg-square float-btn" style="bottom: 100px;">
    <i class="fa-brands fa-whatsapp" style="color: #ffffff;"></i>
  </a>