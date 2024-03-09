<?php 
include 'header.php';
?>
<style>
    .abtext
    {
         background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: cover; 
        box-shadow: 1px 2px 8px 6px #f3943124; 
        overflow: hidden; 
        padding:30px
    }

.card {
  width: 300px;
  height: 400px;
  transition: .3s;
  position: relative;
  border-radius: .5rem 2rem;
  box-shadow: 0px 15px 20px -5px rgba(0, 0, 0, 0.5);
}

.card:hover {
  transform: scale(1.03);
}

.img {
  height: 100%;
  transition: all .3s;
  background: #ff0084;
  background: -webkit-linear-gradient(to right, #3d0d19, #ae0d35);
  background: linear-gradient(to right, #3d0d19, #ae0d35);
  width: 100%;
  border-radius: .5rem 2rem;
}

.img:hover {
  transform: scale(1.05);
}

.img-container {
  display: grid;
  border-radius: .5rem 2rem;
  height: 400px;
  overflow: hidden;
}

.description {
  position: absolute;
  bottom: .5rem;
  left: .5rem;
  text-align: center;
  padding: .5rem 1em;
  width: 95%;
  height: min-content;
  transition: all 0.5s ease;
  text-overflow: ellipsis;
  /* white-space: nowrap; */
  backdrop-filter: blur(.1rem);
  background-color: rgba(0, 0, 0, 0.2);
  border-radius: .5rem 2rem;
}

.description:hover {
  transform: perspective(100px) translateX(7px) rotateX(3deg) rotateY(3deg) scale(1);
  box-shadow: none;
}

.title {
  color: aliceblue;
}

.page-header-inner {
  background: rgba(0, 0, 0, .7);
}

.gap-4 {
margin-top: 50px; /* Add a 30px gap between rows */
}
</style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header p-0 abtext"
        style="background-image: url(./images/anni_banner.jpeg); height: 300px;">
        <div class="container-fluid page-header-inner py-5" style="height: 300px;">
            <div class="container text-center">
                <h1 class="display-3 text-white mt-5 animated slideInDown">Anniversary Decorations</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4" id="Anniversary-decorations">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="card">
                        <div class="img-container">
                            <div class="img">
                                <img class="p-3" src="./images/anniversary/1.jpg" alt="image" height="300px" width="300px"
                                    style="border-radius: .5rem 2rem;">
                            </div>
                            <div class="description card">
                                <span class="title">
                                    <h5 class="fw-bold mb-0">Anniversary Decoration</h5>
                                    <button class="btn btn-primary mx-1 mt-3"
                                        style="background-color: #93004d; border: none;"
                                        onclick="handleBookNowButtonClick('./images/anniversary/1.jpg')">CALL NOW</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="card">
                        <div class="img-container">
                            <div class="img">
                                <img class="p-3" src="./images/anniversary/2.webp" alt="image" height="300px" width="300px"
                                    style="border-radius: .5rem 2rem;">
                            </div>
                            <div class="description card">
                                <span class="title">
                                    <h5 class="fw-bold mb-0">Anniversary Decoration</h5>
                                    <button class="btn btn-primary mx-1 mt-3"
                                        style="background-color: #93004d; border: none;"
                                        onclick="handleBookNowButtonClick('./images/anniversary/2.webp')">CALL NOW</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="card">
                        <div class="img-container">
                            <div class="img">
                                <img class="p-3" src="./images/anniversary/3.jpg" alt="image" height="300px" width="300px"
                                    style="border-radius: .5rem 2rem;">
                            </div>
                            <div class="description card">
                                <span class="title">
                                    <h5 class="fw-bold mb-0">Anniversary Decoration</h5>
                                    <button class="btn btn-primary mx-1 mt-3"
                                        style="background-color: #93004d; border: none;"
                                        onclick="handleBookNowButtonClick('./images/anniversary/3.jpg')">CALL NOW</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="card">
                        <div class="img-container">
                            <div class="img">
                                <img class="p-3" src="./images/anniversary/4.jpg" alt="image" height="300px" width="300px"
                                    style="border-radius: .5rem 2rem;">
                            </div>
                            <div class="description card">
                                <span class="title">
                                    <h5 class="fw-bold mb-0">Anniversary Decoration</h5>
                                    <button class="btn btn-primary mx-1 mt-3"
                                        style="background-color: #93004d; border: none;"
                                        onclick="handleBookNowButtonClick('./images/anniversary/4.jpg')">CALL NOW</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gap-4"></div>
            <div class="row g-4" id="Anniversary-decorations">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="card">
                        <div class="img-container">
                            <div class="img">
                                <img class="p-3" src="./images/anniversary/5.webp" alt="image" height="300px" width="300px"
                                    style="border-radius: .5rem 2rem;">
                            </div>
                            <div class="description card">
                                <span class="title">
                                    <h5 class="fw-bold mb-0">Anniversary Decoration</h5>
                                    <button class="btn btn-primary mx-1 mt-3"
                                        style="background-color: #93004d; border: none;"
                                        onclick="handleBookNowButtonClick('./images/anniversary/5.webp')">CALL NOW</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="card">
                        <div class="img-container">
                            <div class="img">
                                <img class="p-3" src="./images/anniversary/6.jpg" alt="image" height="300px" width="300px"
                                    style="border-radius: .5rem 2rem;">
                            </div>
                            <div class="description card">
                                <span class="title">
                                    <h5 class="fw-bold mb-0">Anniversary Decoration</h5>
                                    <button class="btn btn-primary mx-1 mt-3"
                                        style="background-color: #93004d; border: none;"
                                        onclick="handleBookNowButtonClick('./images/anniversary/6.jpg')">CALL NOW</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="card">
                        <div class="img-container">
                            <div class="img">
                                <img class="p-3" src="./images/anniversary/7.webp" alt="image" height="300px" width="300px"
                                    style="border-radius: .5rem 2rem;">
                            </div>
                            <div class="description card">
                                <span class="title">
                                    <h5 class="fw-bold mb-0">Anniversary Decoration</h5>
                                    <button class="btn btn-primary mx-1 mt-3"
                                        style="background-color: #93004d; border: none;"
                                        onclick="handleBookNowButtonClick('./images/anniversary/7.webp')">CALL NOW</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="card">
                        <div class="img-container">
                            <div class="img">
                                <img class="p-3" src="./images/anniversary/8.webp" alt="image" height="300px" width="300px"
                                    style="border-radius: .5rem 2rem;">
                            </div>
                            <div class="description card">
                                <span class="title">
                                    <h5 class="fw-bold mb-0">Anniversary Decoration</h5>
                                    <button class="btn btn-primary mx-1 mt-3"
                                        style="background-color: #93004d; border: none;"
                                        onclick="handleBookNowButtonClick('./images/anniversary/8.webp')">CALL NOW</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
include 'footer.php';
?>


