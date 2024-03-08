<?php 
include 'header.php';
?>

  <!-- ------carosel------ -->


  <div class="container p-0 mb-4 mt-3 overflow-hidden" style="border-radius: 25px;">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="images/inner-banner-fun-decor.jpeg" alt="Image">
        </div>

        <div class="carousel-item">
          <img class="w-100" src="images/banner1-fun-decor.jpg" alt="Image">
        </div>

        <div class="carousel-item">
          <img class="w-100" src="images/banner4-fun-decor.jpg" alt="Image">
        </div>

        <!-- <div class="carousel-item">
              <img class="w-100" src="img/banner6.png" alt="Image">
          </div> -->



      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- -----------carousel end------- -->

  <?php 
include 'footer.php';
?>
