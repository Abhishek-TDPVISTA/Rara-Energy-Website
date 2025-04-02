<?php include_once('components/header.php'); ?>
<?php include_once('components/navbar.php'); ?>
<style>
    .custom-list {
        list-style-type: none;
        /* Remove default bullet */
        padding-left: 0;
        /* Remove default left padding */
    }

    .custom-list li {
        position: relative;
        /* Position relative for dot placement */
        padding-left: 1.5em;
        /* Space for the dot */
        margin-bottom: 0.5em;
        /* Adjust spacing between list items */
    }

    .custom-list li::before {
        content: "•";
        /* Bullet character (you can use '\2022' for the same) */
        position: absolute;
        /* Position absolute for precise placement */
        left: 0;
        /* Position at the start of the list item */
        top: 0.1em;
        /* Adjust vertical alignment if needed */
        font-size: 1.8em;
        /* Adjust size of the bullet */
        line-height: 1;
        /* Ensure line height matches font size for vertical alignment */
        color: #333;
        /* Color of the bullet */
    }

    .service_img {
        width: 100%;
        height: 350px;
    }

    .service_img1 {
        width: 100%;
        height: 300px;
    }
</style>
<div class="breadcroumb-area bread-bg" style="background-image: url(assets/bg_images/traning.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title">
                    <h1>Training</h1>
                    <h6><a href="index.php">Home</a> <i class="far fa-dot-circle"></i> Training</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="carbon" class="services-area gray-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8 text-center">
                <div class="section-title">
                    <h6>Training</h6>
                    <h2>WHAT WE OFFER?</h2>
                    <div class="d-flex justify-content-center">
                        <div style="width:40%; background: #70c150; border-radius: 20px; height: 5px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="service-page" class="service-details-section section-padding pb-0">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10">
                        <div id="101" class="single-service">
                            <p style="font-size:20px">
                                Welcome to Rara Energy's Training – your gateway to expert knowledge in the oil and gas
                                industry. Our specialized programs empower professionals with essential skills, safety
                                practices, and innovative techniques, driving success in exploration, production, and
                                energy management. Equip yourself with the expertise to lead in a dynamic energy
                                landscape.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mt-5" style="border-radius: 15px;">
            <div class="card-body">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-md-4">
                        <img src="assets\img\image\services\ccus101.png" alt="Profile Image"
                            class="profile-img service_img"
                            style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                    </div>
                    <div class="col-md-8">
                        <h3 class="profile-header mb-4  mt-4  text-center" style="color: #7FBD41;">
                            <span class="font-weight-bold ">RARA Energy CCUS 101 :</span>
                            <br>
                            Foundations in Carbon Capture & Storage
                        </h3>
                        <p style="align-content: center;" class="content-algin-center">
                            This foundational course explores the critical role of Carbon Capture, Utilization, and
                            Storage (CCUS) in addressing the carbon challenge. Participants will gain a comprehensive
                            understanding of CCUS technology, which captures CO2 emissions, utilizes them in various
                            applications, and stores them securely in geological formations. This technology mitigates
                            global warming impacts and provides economic opportunities through Enhanced Oil Recovery
                            (EOR).
                        </p>

                    </div>
                </div>
                <div class="text-center traning-btn">
                    <button class="main-btn">
                        <a href="/contact.php">Contact Us</a>
                    </button>
                    <button class="main-btn">
                        <a href="assets/pdf/RARA Energy CCUS 101.pdf" target="_blank">Brochure</a>
                    </button>
                </div>

            </div>
        </div>


        <div class="card mt-5" style="border-radius: 15px;">
            <div class="card-body">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-md-4">
                        <img src="assets\img\image\services\0.jpg" alt="Profile Image" class="profile-img service_img"
                            style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                    </div>
                    <div class="col-md-8">
                        <h3 class="profile-header fs-1 mb-1  mt-4 text-center" style="color: #7FBD41;">
                            <span class="font-weight-bold "> RARA Energy CCUS Pro :</span> <br> 4 days
                            advanced course on CCUS
                        </h3>
                        <ul class="list-group list-group-flush custom-list">
                            <li class="list-group-item">
                                <p>
                                    Day 1 — The Carbon Challenge
                                    emissions at their source.</p>
                            </li>
                            <li class="list-group-item">
                                <p>Day 2 — Reservoir </p>
                            </li>
                            <li class="list-group-item">
                                <p>Day 3 — Facilities + Wells</p>
                            </li>
                            <li class="list-group-item">
                                <p>Day 4 — Case Study </p>
                            </li>
                        </ul>

                    </div>
                </div>
                <div id="hydrogen" class="text-center traning-btn">
                    <button class="main-btn">
                        <a href="/contact.php">Contact Us</a>
                    </button>
                    <button class="main-btn">
                        <a href="assets/pdf/RARA Energy CCUS Pro.pdf" target="_blank">Brochure</a>
                    </button>
                </div>
            </div>
        </div>



        <div class="card mt-5" style="border-radius: 15px;">
            <div class="card-body">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-md-4">
                        <img src="assets\img\image\services\hy101.png" alt="Profile Image"
                            class="profile-img service_img"
                            style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                    </div>
                    <div class="col-md-8">
                        <h3 class="profile-header mb-4  mt-4 text-center" style="color: #7FBD41;">
                            <span class="font-weight-bold ">RARA Energy Hydrogen 101 </span>
                        </h3>
                        <p style="align-content: center;" class="content-algin-center">
                            welcome to the "Introduction to Hydrogen Energy" course, designed for beginners eager to
                            explore the potential of hydrogen as a key player in the green energy revolution. This
                            course will provide you with a foundational understanding of hydrogen's role in sustainable
                            energy systems.
                        </p>
                        <ul class="list-group list-group-flush custom-list">
                            <li class="list-group-item">
                                <p>
                                    Duration : 1 day
                                </p>
                            </li>
                            <li class="list-group-item">
                                <p>
                                    Suited for : Anyone
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text-center traning-btn">
                    <button class="main-btn ">
                        <a href="/contact.php">Contact Us</a>
                    </button>
                    <button class="main-btn ">
                        <a href="assets/pdf/RARA Energy Hydrogen 101.pdf" target="_blank">Brochure</a>
                    </button>
                </div>

            </div>
        </div>


        <div class="card mt-5" style="border-radius: 15px;">
            <div class="card-body">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-md-4">
                        <img src="assets\img\image\services\hydropro.jpeg" alt="hydropro"
                            class="profile-img service_img"
                            style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                    </div>
                    <div class="col-md-8">
                        <h3 class="profile-header fs-1 mb-1 mt-4 text-center" style="color: #7FBD41;">
                            <span class="font-weight-bold ">RARA Energy Hydrogen Pro </span>
                        </h3>
                        <p>
                            A 4-day advanced course tailored for energy industry professionals eager to delve into
                            hydrogen's potential as a pivotal element in the green energy revolution.
                        </p>

                        <ul class="list-group list-group-flush custom-list">
                            <li class="list-group-item">
                                <p>
                                    Day 1 — Basic of Hydrogen as a Green Energy source.</p>
                            </li>
                            <li class="list-group-item">
                                <p>Day 2 — Hydrogen Production/ Storage/ Trasport </p>
                            </li>
                            <li class="list-group-item">
                                <p>Day 3 — Uses of Hydrogen</p>
                            </li>
                            <li class="list-group-item">
                                <p>Day 4 — Oil industry and Hydrogen + Case Study </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text-center traning-btn">
                    <button class="main-btn ">
                        <a href="/contact.php">Contact Us</a>
                    </button>
                    <button class="main-btn ">
                        <a href="assets/pdf/Advanced Course on Hydrogen Energy.pdf" target="_blank">Brochure</a>
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>


<?php include_once('components/footer.php'); ?>