<?php include_once('components/header.php'); ?>
<?php include_once('components/navbar.php'); ?>

<style>
    .single-team-member {
        background: #fff;
        border-radius: 10px;
        padding: 15px;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: start;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .single-team-member:hover {
        transform: translateY(-5px);
    }

    .single-team-member img {
        max-width: 100%;
        height: 150px;
        object-fit: contain;
        margin-bottom: 15px;
    }

    .team-content {
        text-align: center;
    }

    .team-title a {
        font-weight: bold;
        color: #0f4c6e;
        text-decoration: none;
    }

    .team-title a:hover {
        color: #007bff;
    }

    .gray-bg {
        background-color: #f9f9f9;
    }
</style>

<div class="breadcroumb-area bread-bg" style="background-image: url(assets/bg_images/partners.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title">
                    <h1>Global Reach</h1>
                    <h6><a href="index.php">Home</a> <i class="far fa-dot-circle"></i> Global Reach</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="team-area section-padding gray-bg text-center pb-150">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h6>Global Reach</h6>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <div class="col d-flex">
                <div class="single-team-member w-100 wow fadeInRight" data-wow-delay=".6s">
                    <img src="assets/img/image/partners/gets.png" alt="GOTS">
                    <div class="team-content">
                        <div class="team-title">
                            <a href="https://www.greenfield.energy/" target="_blank">GOTS</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col d-flex">
                <div class="single-team-member w-100 wow fadeInLeft" data-wow-delay=".4s">
                    <img src="assets/img/image/partners/dhanbad.jpg" alt="IIT(ISM) Dhanbad">
                    <div class="team-content">
                        <div class="team-title">
                            <a href="https://www.iitism.ac.in/" target="_blank">IIT(ISM) Dhanbad</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col d-flex">
                <div class="single-team-member w-100 wow fadeInRight" data-wow-delay=".8s">
                    <img src="assets/img/image/partners/geomodel.png" alt="GEOMODEL">
                    <div class="team-content">
                        <div class="team-title">
                            <a href="https://solutions.geomodl.com/" target="_blank">GEOMODEL</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col d-flex">
                <div class="single-team-member w-100 wow fadeInRight" data-wow-delay=".8s">
                    <img src="assets/img/image/partners/statera-logo.svg" alt="Statera Energy">
                    <div class="team-content">
                        <div class="team-title">
                            <a href="https://stateraenergy.co.uk/" target="_blank">Statera Energy</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col d-flex">
                <div class="single-team-member w-100 wow fadeInLeft" data-wow-delay=".2s">
                    <img src="https://www.braktt.com/_next/image?url=%2Fassets%2FBraktt-Cropped.png&w=640&q=75" alt="Braktt">
                    <div class="team-content">
                        <div class="team-title">
                            <a href="https://www.braktt.com/" target="_blank">Braktt</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col d-flex">
                <div class="single-team-member w-100 wow fadeInRight" data-wow-delay=".8s">
                    <img src="assets/img/image/partners/Türkiye Petrolleri.svg" alt="Türkiye Petrolleri">
                    <div class="team-content">
                        <div class="team-title">
                            <a href="https://www.tppd.com.tr/" target="_blank">Türkiye Petrolleri</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col d-flex">
                <div class="single-team-member w-100 p-2 wow fadeInLeft" data-wow-delay=".2s" style="background-color: rgb(15, 76, 110);">
                    <img src="assets/img/image/partners/goelogo.png" alt="Global Offshore Engineering">
                    <div class="team-content">
                        <div class="team-title">
                            <a href="http://goe-group.com/" target="_blank">Global Offshore Engineering</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col d-flex">
                <div class="single-team-member w-100 p-2 wow fadeInLeft" data-wow-delay=".2s">
                    <img src="assets/img/image/partners/dataroom2.jpeg" alt="The Dubai Dataroom">
                    <div class="team-content">
                        <div class="team-title">
                            <a href="http://goe-group.com/" target="_blank">The Dubai Dataroom</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('components/footer.php'); ?>
