<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-3 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> House No. 109 ,Sector 48-A , Chandigarh -160047</p>
                   <p> <a class="mb-2" href="tel:+918054201097" style="color:#fff;"><i class="fa fa-phone-alt me-3"></i>+91 +918054201097</a></p>
                    <p><a class="mb-2" href="mailto:ranjeetballonwala123@gmail.com" style="color:#fff;"><i class="fa fa-envelope me-3"></i>ranjeetballonwala123@gmail.com</a></p>
                    <div class="d-flex pt-2">
                         <a class="btn btn-outline-light btn-social" href="https://api.whatsapp.com/send/?phone= +918054201097&amp;text=Hi,&amp;type=phone_number&amp;app_absent=0"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">Saturday - Sunday:</h6>
                    <p class="mb-0">09.00 AM - 12.00 PM</p>
                </div> -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="birthday-decor.php">Birthday Decoration</a>
                    <a class="btn btn-link" href="anniversary.php">Anniversary Decoration</a>
                    <a class="btn btn-link" href="baby-shower.php">Baby Shower & Welcome</a>
                    <a class="btn btn-link" href="gallery2.php">Gallery</a>
                    <a class="btn btn-link" href="index.php#about">Contact Us</a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <h4 class="text-light mb-4">Get in Touch</h4>
                    <div class="mapro">
                    <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13724.299329848307!2d76.74764530378113!3d30.688170543688894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fec6cba69fe4d%3A0x58f2a458582a2f12!2sSector%2048%2C%20Chandigarh%2C%20160047!5e0!3m2!1sen!2sin!4v1709982839332!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">First Choice | Balloon Decoration</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="tel://+918054201097">First Choice | Balloon Decoration</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

















<!-- footer whatsapp and call -->

<!-- <div class="bottom-fix  active">
        <div class="bottom-contact-info">
            <a class="em scroll-trigger" href="contact.php#form"> <i class="fa fa-envelope-o"></i> Enquiry Now </a>
            <a href="whatsapp://send?phone=+919540803392&amp;text=Hi," class="wa scroll-trigger"><img src="./images/whatsapp-icon.png" width="40px" height="40px" alt=""> </i> <br>Whatsapp </a>
            <a href="tel:+919818357478" class="ph"> <i class="fa fa-phone"></i> Call Us</a>
        </div>
    </div> -->

<!-- end -->

<script>
    function sendWhatsAppMessage(phoneNumber, message, imageBase64) {
        var sanitizedPhoneNumber = phoneNumber.replace(/\D/g, '');
        var encodedMessage = `${message}\n\nProduct Image: \n${imageBase64}`;
        console.log(sanitizedPhoneNumber, encodedMessage, message, imageBase64)
        var deepLinkUrl = `https://wa.me/${sanitizedPhoneNumber}/?text=${encodedMessage}`;
        window.open(deepLinkUrl);
    }

    function handleBookNowButtonClick(productImage) {
        var phoneNumber = '+918054201097';
        var message = 'Hello, First Choice , I want to book this decoration.';
        var imageUrl = productImage;

        sendWhatsAppMessage(phoneNumber, message, `https://firstchoice.com${imageUrl}`);
    }
</script>
</body>

</html>