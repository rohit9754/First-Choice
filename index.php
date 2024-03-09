<?php 
include 'header.php';
?>


  <!-- ------carousel------ -->


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
  </div><br>
  <!-- -----------carousel end------- -->

  <!-- FORM START -->
  <section id="about" class="about">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row gx-0">
          <div class="col-lg-6 order-lg-1 order-2 d-flex align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Who We Are</h3>
              <h2>First Choice - Balloon Decoration</h2>
              <p>First Choice Balloon Decoration is a modern brand that fullfils all your need for celebrations. We provide best in class modern or classical decorations, photo-video shoot and decorations for all ocassions and celebrations, wedding, birthday, anniversary,etc.
               </p>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center" style="background-color: #205c79; text-decoration:none;">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-lg-2 order-1 d-flex align-items-center aos-init aos-animate" data-aos="zoom-out" data-aos-delay="200">
            <!-- Replace this with the form -->
            <form action="https://formspree.io/f/mqkvwypy" method="POST" class="appointment-form" style="background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px; width: 100%; ">
              <h3>Contact Us</h3>
              <h2>BOOK NOW</h2>
              <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
              </div>
              <div class="mb-3">
                <input type="tel" class="form-control" name="number" placeholder="Your Phone Number" required="">
              </div>
              <div class="mb-3">
                <textarea class="form-control" rows="3" name="message" placeholder="Your Message" required=""></textarea>
              </div><br>
              <button type="submit" class="btn btn-primary" style="font-weight: bold; background-color:#205c79">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section><br><br>
    <!-- FORM END -->

<!-- ----------- featured products start------- -->
  <?php 
include 'featured-pro.php';
?>
<!-- -----------featured products end------- -->



<!-- -----------Why choose section ------- -->
<?php 
include 'why_choose.php';
?>
<!-- -----------end------- -->

<!-- GALLERY SECTION -->
<?php 
include 'gallery.php';
?>
<!-- END -->
<!-- arrange section -->

<!-- <section class="arrange_section">
  <div class="container">
    <div class="detail_box">
      <h2>Our Spectacular Balloon Arrangements</h2>
      <p>First Choice Balloon Decorator invites you to experience the epitome of artistry in event decor. With our unparalleled skill and creativity, we redefine the ambiance of your celebrations through meticulously crafted balloon arrangements. Each creation is more than just an adornment; it's a narrative, a symphony of colors and shapes that exude joy and elegance.</p>
    </div>
  </div>
</section> -->
<!-- end arrange section -->



<!-- -----------Footer start------- -->
  <?php 
include 'footer.php';
?>
<!-- -----------end------- -->
