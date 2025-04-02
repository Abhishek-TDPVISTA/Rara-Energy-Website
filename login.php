<?php include_once('components/header.php'); ?>
<?php include_once('components/navbar.php'); ?>

<div class="breadcroumb-area bread-bg" style="background-image: url(assets/img/bread-bg.jpg);">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcroumb-title">
<h1>Login</h1>
<h6><a href="index.html">Home</a> <i class="far fa-dot-circle"></i> Login</h6>
</div>
</div>
</div>
</div>
</div>
<div class="auth-area section-padding">
<div class="container">
<div class="col-lg-5 mx-auto">
<div class="auth-form">
<div class="auth-header">
<h4>Login</h4>
<p>Welcome Back!</p>
</div>
<form action="#">
<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" id="email">
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" class="form-control" id="password">
</div>
<div class="row">
<div class="col-6">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="remember">
<label class="custom-control-label" for="remember">Remember Me</label>
</div>
</div>
<div class="col-6 text-right">
<a href="forgot-password.html" class="forgot-password">Forgot Password?</a>
</div>
</div>
<button type="submit" class="auth-btn">Login</button>
</form>
<div class="auth-footer">
<p class="mb-0">Don't have an account? <a href="register.html">Register</a>.</p>
</div>
</div>
</div>
</div>
</div>

<?php include_once('components/footer.php'); ?>