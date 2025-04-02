<?php include_once('components/header.php'); ?>
<?php include_once('components/navbar.php'); ?>


<div class="breadcroumb-area bread-bg" style="background-image: url(assets/bg_images/team.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title">
                    <h1>Our Team</h1>
                    <h6><a href="index.php">Home</a> <i class="far fa-dot-circle"></i>Our Team</h6>
                </div>
            </div>
        </div>
</div>
</div>

<div class="team-area section-padding gray-bg text-center pb-150">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 ">
                <div class="section-title text-center">
                    <h6>Team</h6>
                    <h2>Our Team Members</h2>
                </div>
            </div>
        </div>
        
        <div class="row team-box d-flex justify-content-center">
            <?php include_once('components/teams.php'); ?>
        </div>
    </div>
</div>




<?php include_once('components/footer.php'); ?>