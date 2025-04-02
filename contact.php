<?php include_once ('components/header.php'); ?>
<?php include_once ('components/navbar.php'); ?>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">

</script>
<script type="text/javascript">
    (function () {
        // https://dashboard.emailjs.com/admin/account
        emailjs.init({
            publicKey: "tiUqJHwjXCTsi2bqL",
        });
    })();
</script>
<script type="text/javascript">
    window.onload = function () {
        document.getElementById('contact-form').addEventListener('submit', function (event) {
            event.preventDefault();
            // these IDs from the previous steps
            emailjs.send('service_tb5jzw9', 'contact_service', {
                fullname: event.target.name.value,
                email: event.target.email.value,
                subject: event.target.subject.value,
                message: event.target.message.value
            })
                .then(() => {
                    window.confirm("Thanks for Contacting! \n" + event.target.email.value);
                }, (error) => {
                    window.alert("Error in Form Shared" + error);
                });
        });
    }
</script>

<div class="breadcroumb-area bread-bg" style="background-image: url(assets/bg_images/contactus.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title">
                    <h1>Contact Us</h1>
                    <h6><a href="index.html">Home</a> <i class="far fa-dot-circle"></i> Contact Us</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact-us" class="contact-us-area section-padding">
    <div class="container">
        <div class="contact-us-wrapper">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="contact-us-inner">
                        <div class="info-i"><span><i class="fal fa-map-marker-alt"></i></span></div>
                        <h5>Address</h5>
                        <p>BIZ00008 Compass Building, Al Shohada Road, AL Hamra Industrial Zone-FZ, Ras Al Khaimah,
                            United Arab Emirates</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="contact-us-inner">
                        <div class="info-i"><span><i class="fal fa-clock"></i></span></div>
                        <h5>Office Hour</h5>
                        <p>Sunday-Monday <br>10.00AM - 06.00PM GST</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="contact-us-inner">
                        <div class="info-i"><span><i class="fal fa-envelope"></i></span></div>
                        <h5>Contact Email</h5>
                        <p><a href="mailto:hr@raraenergy.com" style="text-transform: lowercase; margin:0;">hr@raraenergy.com</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="contact-us-inner">
                        <div class="info-i"><span><i class="fal fa-envelope"></i></span></div>
                        <h5>Email</h5>
                        <p><a href="mailto: support@raraenergy.com" style="text-transform: lowercase; margin:0;">support@raraenergy.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact-page" class="contact-section blue-bg section-padding">
    <div class="overlay-2"></div>
    <div class="container">
        <div class="col-lg-12 mx-auto">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 text-center wow fadeInRight">
                    <div class="contact-form-wrapper">
                        <div class="section-title">
                            <h2>Contact Us</b></h2>
                            <p> </p>
                        </div>
                        <div class="contact-form">
                            <form id="contact-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="email" name="email" placeholder="E-mail" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" name="subject" placeholder="Subject" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="message" id="message" cols="30" rows="10"
                                            placeholder="Write Message" required></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-12 text-center">
                                        <button class="main-btn">Send Your Message</button>
                                    </div>
                                </div>
                            </form>
                            <div class="col-md-12 my-2">
                                <div class="form-messege text-success text-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include_once ('components/footer.php'); ?>