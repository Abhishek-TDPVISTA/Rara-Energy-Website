<footer class="footer-area wow fadeIn" data-wow-delay=".2s">
    <div class="container">
        <div class="footer-up">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="logo">
                        <img src="assets/img/image/logo/rarawhite.png" alt="fossil-logo">
                    </div>
                    <p class="mt-2">
                        where innovation meets sustainability to unlock the full potential of renewable energy.
                    </p>
                    <div class="social-area">
                        <a href="https://www.linkedin.com/company/rara-energy/" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <!-- Quick Browse Section - Collapsible on Mobile -->
                <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-12 text-center mx-auto footer-collapse-section">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="mb-0">Quick Browse</h5>
                        <button class="btn collapse-toggle d-lg-none" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#quickBrowseCollapse" aria-expanded="false" aria-controls="quickBrowseCollapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <div class="collapse d-lg-block" id="quickBrowseCollapse">
                        <ul class="list-unstyled">
                            <li>
                                <a href="about.php"> About Us</a><br>
                                <a href="services.php"> Services</a><br>
                                <a href="project.php"> Projects</a><br>
                                <a href="contact.php"> Contact</a><br>
                                <a href="career.php">Career</a><br>
                                <a href="team.php">Our Team</a><br>
                                <a href="partners.php">Our Partner</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Services Section - Collapsible on Mobile -->
                <div class="col-lg-3 col-md-6 col-sm-12 footer-collapse-section">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="mb-0">Services</h5>
                        <button class="btn collapse-toggle d-lg-none" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#servicesCollapse" aria-expanded="false" aria-controls="servicesCollapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <div class="collapse d-lg-block" id="servicesCollapse">
                        <ul class="list-unstyled">
                            <li>
                                <a href="services.php#carbon"> Carbon Capture Storage Solutions</a>
                                <a href="services.php#hydrogen"> Hydrogen Storage Modeling</a>
                                <a href="services.php#feasibility"> Feasibility Studies and Screening</a>
                                <a href="services.php#co2Storage"> CO2 Storage and Sequestration Modelling</a>
                                <a href="services.php#CO2Enhanced"> CO2 Enhanced Oil Recovery (EOR) Modelling</a>
                                <a href="services.php#Classical"> Classical Industry Standard Modelling and Studies</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="subscribe-form">
                        <h5>Connect</h5>
                        <form action="#">
                            <input type="email" placeholder="Your email">
                            <button class="main-btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="footer-bottom">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p class="copyright-line">© <span id="date"></span> Rara Energy All rights reserved.</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p class="privacy"><a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a></p>
            </div>
        </div>
    </div>
</div>

<a href="#top" class="go-top"><i class="far fa-level-up"></i></a>

<!-- Add this CSS for the footer accordions -->
<style>
    /* Footer Accordion Styles */
    .footer-collapse-section ul li a {
        display: block;
        /* margin-bottom: 8px; */
    }
    
    .collapse-toggle {
        background: transparent;
        border: none;
        color: #fff;
        font-size: 14px;
        padding: 0;
    }
    
    .collapse-toggle[aria-expanded="true"] .fas.fa-plus:before {
        content: "\f068"; /* Changes to minus icon when expanded */
    }
    
    /* Make sure links display properly on mobile */
    @media (max-width: 991.98px) {
        .footer-collapse-section h5 {
            margin-top: 15px;
        }
        
        .footer-collapse-section ul {
            padding-left: 0;
        }
        
        .footer-collapse-section .collapse:not(.show) {
            display: none;
        }
        
        .footer-collapse-section ul li a {
            /* padding: 8px 0; */
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
    }
</style>

<!-- Script to toggle the plus/minus icon -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle collapse events to toggle icon
        const collapseToggles = document.querySelectorAll('.collapse-toggle');
        
        collapseToggles.forEach(function(toggle) {
            toggle.addEventListener('click', function() {
                // Toggle the icon class
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                // The Bootstrap collapse will handle toggling aria-expanded
            });
        });
        
        // Update the current year in the footer
        document.getElementById('date').innerHTML = new Date().getFullYear();
    });
</script>

<script data-cfasync="false"
    src="https://themes.themewild.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/jquery.waypoints.min.js"></script>

<script src="assets/js/jquery.counterup.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/magnific-popup.min.js"></script>

<script src="assets/js/jquery.sticky.js"></script>

<script src="assets/js/jquery.barfiller.js"></script>

<script src="assets/js/main.js"></script>