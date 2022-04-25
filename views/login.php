<!DOCTYPE HTML>
<html>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="public/style/login.css" >
</head>

<body>

<?php if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true){
        Redirect::to("home");
    }
    
        $loginUser= new UsersController();
        $loginUser->auth();
    
    ?>
<div class="container" ><!-- container Starts -->

<form class="form-login" action="" method="post" ><!-- form-login Starts -->

<h2 class="form-login-heading" >Log In to Your Account!</h2>

<input type="text" class="form-control" name="username" placeholder="Email Address" required >

<input type="password" class="form-control" name="password" placeholder="Password" required >

<button class="btn btn-lg btn-primary btn-block" name="submit" >

Log in

</button>

<a href="<?php echo BASE_URL;?>register">Already have an account?</a>
<a href="<?php echo BASE_URL;?>home">Home</a>
</form><!-- form-login Ends -->


</div><!-- container Ends -->



</body>

</html>