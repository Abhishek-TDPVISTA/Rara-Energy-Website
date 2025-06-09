<?php include_once('components/header.php'); ?>
<?php include_once('components/navbar.php'); ?>

<style>
    /* Modern card styling */
    .partner-card {
        background: #ffffff;
        border-radius: 16px;
        padding: 30px 20px;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        transition: all 0.4s ease;
        border: none;
        position: relative;
        overflow: hidden;
    }

    .partner-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #0f4c6e 0%, #4a90e2 100%);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.4s ease;
    }

    .partner-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
    }
    
    .partner-card:hover::after {
        transform: scaleX(1);
    }

    .partner-card .image-wrapper {
        width: 100%;
        height: 130px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 25px;
        padding: 5px;
        position: relative;
    }

    .partner-card img {
        max-width: 100%;
        max-height: 110px;
        object-fit: contain;
        transition: transform 0.3s ease;
        filter: grayscale(20%);
    }
    
    .partner-card:hover img {
        transform: scale(1.05);
        filter: grayscale(0%);
    }

    .partner-info {
        text-align: center;
        width: 100%;
        padding-top: 15px;
        position: relative;
    }
    
    .partner-info::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 40px;
        height: 1px;
        background-color: rgba(15, 76, 110, 0.3);
    }

    .partner-name {
        margin: 0;
        padding: 0;
    }
    
    .partner-name a {
        font-weight: 600;
        font-size: 17px;
        color: #0f4c6e;
        text-decoration: none;
        transition: all 0.3s ease;
        display: block;
        padding: 8px 0;
        letter-spacing: 0.3px;
    }

    .partner-name a:hover {
        color: #4a90e2;
    }
    
    /* Dark card variation */
    .dark-card {
        background: linear-gradient(145deg, #0f4c6e 0%, #1a6b98 100%);
    }
    
    .dark-card .partner-info::before {
        background-color: rgba(255, 255, 255, 0.2);
    }
    
    .dark-card .partner-name a {
        color: #ffffff;
    }
    
    .dark-card .partner-name a:hover {
        color: #e6e6e6;
    }
    
    .dark-card::after {
        background: linear-gradient(90deg, #ffffff 0%, #e6e6e6 100%);
    }
    
    /* Section styling */
    .partners-section {
        background-color: #f8fafc;
        padding: 120px 0 150px;
        position: relative;
    }
    
    .partners-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('assets/bg_patterns/dots-pattern.png');
        opacity: 0.04;
        pointer-events: none;
    }
    
    .section-header {
        margin-bottom: 70px;
    }
    
    .section-header h2 {
        font-size: 42px;
        font-weight: 700;
        color: #0f4c6e;
        margin-bottom: 20px;
        position: relative;
        display: inline-block;
    }
    
    .section-header h2::after {
        content: '';
        position: absolute;
        bottom: -12px;
        left: 0;
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #0f4c6e 0%, #4a90e2 100%);
        border-radius: 2px;
    }
    
    .section-header p {
        font-size: 18px;
        color: #555;
        max-width: 650px;
        margin: 0 auto;
        line-height: 1.7;
    }
    
    .page-banner {
        position: relative;
        background-size: cover;
        background-position: center;
        padding: 120px 0;
        z-index: 1;
    }
    
    .page-banner::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, rgba(11, 30, 40, 0.9) 0%, rgba(10, 24, 32, 0.75) 100%);
        z-index: -1;
    }
    
    .banner-content h1 {
        color: #ffffff;
        font-size: 48px;
        font-weight: 700;
        margin-bottom: 15px;
    }
    
    .banner-content .breadcrumb {
        display: inline-flex;
        padding: 10px 20px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 30px;
        backdrop-filter: blur(5px);
    }
    
    .banner-content .breadcrumb a {
        color: #ffffff;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .banner-content .breadcrumb a:hover {
        color: #e6e6e6;
    }
    
    .banner-content .breadcrumb i {
        margin: 0 10px;
        font-size: 8px;
        color: rgba(255, 255, 255, 0.7);
    }
</style>

<!-- Modern Hero Banner -->
<div class="page-banner" style="background-image: url(assets/bg_images/partners.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content">
                    <h1>Global Reach</h1>
                    <div class="breadcrumb">
                        <a href="index.php">Home</a> <i class="far fa-dot-circle"></i> Global Reach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Partners Section -->
<div class="partners-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-header text-center">
                    <h2>Our Global Partners</h2>
                    <p class="mt-4">Collaborating with industry leaders worldwide to deliver innovative solutions and drive sustainable growth through strategic partnerships.</p>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <!-- GOTS -->
            <div class="col">
                <div class="partner-card wow fadeIn" data-wow-delay=".2s">
                    <div class="image-wrapper">
                        <img src="assets/img/image/partners/gets.png" alt="GOTS">
                    </div>
                    <div class="partner-info">
                        <div class="partner-name">
                            <a href="https://www.greenfield.energy/" target="_blank">GOTS</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- IIT(ISM) Dhanbad -->
            <div class="col">
                <div class="partner-card wow fadeIn" data-wow-delay=".3s">
                    <div class="image-wrapper">
                        <img src="assets/img/image/partners/dhanbad.jpg" alt="IIT(ISM) Dhanbad">
                    </div>
                    <div class="partner-info">
                        <div class="partner-name">
                            <a href="https://www.iitism.ac.in/" target="_blank">IIT(ISM) Dhanbad</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- GEOMODEL -->
            <div class="col">
                <div class="partner-card wow fadeIn" data-wow-delay=".4s">
                    <div class="image-wrapper">
                        <img src="assets/img/image/partners/geomodel.png" alt="GEOMODEL">
                    </div>
                    <div class="partner-info">
                        <div class="partner-name">
                            <a href="https://solutions.geomodl.com/" target="_blank">GEOMODEL</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statera Energy -->
            <div class="col">
                <div class="partner-card wow fadeIn" data-wow-delay=".5s">
                    <div class="image-wrapper">
                        <img src="assets/img/image/partners/statera-logo.svg" alt="Statera Energy">
                    </div>
                    <div class="partner-info">
                        <div class="partner-name">
                            <a href="https://stateraenergy.co.uk/" target="_blank">Statera Energy</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Türkiye Petrolleri -->
            <div class="col">
                <div class="partner-card wow fadeIn" data-wow-delay=".6s">
                    <div class="image-wrapper">
                        <img src="assets/img/image/partners/Türkiye Petrolleri.svg" alt="Türkiye Petrolleri">
                    </div>
                    <div class="partner-info">
                        <div class="partner-name">
                            <a href="https://www.tppd.com.tr/" target="_blank">Türkiye Petrolleri</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global Offshore Engineering -->
            <div class="col">
                <div class="partner-card dark-card wow fadeIn" data-wow-delay=".7s">
                    <div class="image-wrapper">
                        <img src="assets/img/image/partners/goelogo.png" alt="Global Offshore Engineering">
                    </div>
                    <div class="partner-info">
                        <div class="partner-name">
                            <a href="http://goe-group.com/" target="_blank">Global Offshore Engineering</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- The Dubai Dataroom -->
            <div class="col">
                <div class="partner-card wow fadeIn" data-wow-delay=".8s">
                    <div class="image-wrapper">
                        <img src="assets/img/image/partners/dataroom2.jpeg" alt="The Dubai Dataroom">
                    </div>
                    <div class="partner-info">
                        <div class="partner-name">
                            <a href="http://goe-group.com/" target="_blank">The Dubai Dataroom</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('components/footer.php'); ?>