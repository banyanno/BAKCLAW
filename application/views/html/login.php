<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administrator</title>
    <link href="public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="public/build/css/sb-admin.css" rel="stylesheet">
  </head>

  <body>
	
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
           <div style="text-align: center"> <img src="public/build/images/logo.png" /></div>
            
            <span style="color: crimson; text-align: center"><?php echo validation_errors(); ?></span>
            <form class="form-signin" method="POST" action="http://localhost:8080/BAKCLAW/verifylogin" accept-charset="utf-8">
                <input type="text" name="username" class="form-control" placeholder="username" required autofocus>
                <input type="password" name="passwd" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                      
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
     <!--        <a href="#" class="forgot-password">
                Forgot the password?
            </a> -->
            <center><p>Contact Administrator if you forgot the password</p></center>
        </div><!-- /card-container -->
    </div><!-- /container -->	
	
	
	
	</body>
</html>
