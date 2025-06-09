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

 <style>
   
        .contact-container {
            max-width: 800px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .contact-header {
            background: transparent;
            padding: 3rem 2rem;
            text-align: center;
            color: white;
            position: relative;
        }

        .contact-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="1" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .contact-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 1;
        }

        .contact-header p {
            font-size: 1.1rem;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }

        .contact-form {
            padding: 3rem 2rem;
            margin: 5px !important;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            position: relative;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-input, .form-textarea {
            width: 100%;
            padding: 1rem 1.25rem;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 1rem;
            font-family: inherit;
            background: #ffffff;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            outline: none;
        }

        .form-input:focus, .form-textarea:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
            transform: translateY(-2px);
        }

        .form-textarea {
            min-height: 120px;
            resize: vertical;
        }

        .form-input::placeholder, .form-textarea::placeholder {
            color: #9ca3af;
            transition: opacity 0.3s ease;
        }

        .form-input:focus::placeholder, .form-textarea:focus::placeholder {
            opacity: 0.5;
        }

        .submit-btn {
            width: 100%;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(79, 70, 229, 0.3);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .submit-btn:hover::before {
            left: 100%;
        }

        .form-message {
            margin-top: 1.5rem;
            padding: 1rem;
            border-radius: 12px;
            text-align: center;
            font-weight: 500;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }

        .form-message.success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
            opacity: 1;
            transform: translateY(0);
        }

        .form-message.error {
            background: #fef2f2;
            color: #991b1b;
            border: 1px solid #fecaca;
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .contact-header {
                padding: 2rem 1.5rem;
            }

            .contact-header h1 {
                font-size: 2rem;
            }

            .contact-form {
                padding: 2rem 1.5rem;
            }
        }

        /* Animation keyframes */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .contact-container {
            animation: fadeInUp 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .form-group {
            animation: fadeInUp 0.6s cubic-bezier(0.4, 0, 0.2, 1) forwards;
            opacity: 0;
        }

        .form-group:nth-child(1) { animation-delay: 0.1s; }
        .form-group:nth-child(2) { animation-delay: 0.2s; }
        .form-group:nth-child(3) { animation-delay: 0.3s; }
        .form-group:nth-child(4) { animation-delay: 0.4s; }
        .submit-btn { animation-delay: 0.5s; }
    </style>

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

    <div class="contact-container">
        <div class="contact-header">
            <h1>Get In Touch</h1>
            <p>We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
        </div>
        
        <div class="contact-form">
            <form id="contact-form">
                <div class="form-grid">
                    <div class="form-group">
                        <input type="text" name="name" class="form-input" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-input" placeholder="Email Address" required>
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <input type="text" name="subject" class="form-input" placeholder="Subject" required>
                </div>
                
                <div class="form-group full-width">
                    <textarea name="message" class="form-textarea" placeholder="Your Message" required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">
                    Send Message
                </button>
                
                <div id="form-message" class="form-message"></div>
            </form>
        </div>
    </div>



<?php include_once ('components/footer.php'); ?>