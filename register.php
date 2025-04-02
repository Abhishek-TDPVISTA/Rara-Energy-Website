<?php include_once ('components/header.php'); ?>
<?php include_once ('components/navbar.php'); ?>

<div class="breadcroumb-area bread-bg" style="background-image: url(assets/img/bread-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title">
                    <h1>Register</h1>
                    <h6><a href="index.html">Home</a> <i class="far fa-dot-circle"></i> Register</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="auth-area section-padding">
    <div class="container">
        <div class="col-lg-6 mx-auto">
            <div class="auth-form">
                <div class="auth-header">
                    <h4>Register</h4>
                    <p>Create Your Account</p>
                </div>
                <form action="#">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="agree">
                        <label class="custom-control-label" for="agree">I agree with the <a href="#">Terrms &
                                Conditions</a></label>
                    </div>
                    <button type="submit" class="auth-btn">Create Account</button>
                </form>
                <div class="auth-footer">
                    <p class="mb-0">Already have an account? <a href="login.html">Login</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once ('components/footer.php'); ?>