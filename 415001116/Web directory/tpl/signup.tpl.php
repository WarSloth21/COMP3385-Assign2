<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<title>Sign Up|Quwius</title>
		<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">
		<meta charset="utf-8">
	</head>
	<body>
		<nav>
			<a href="index.php?controller=Index"><img src="images/logo.png" alt="UWI online"></a>
			<ul>
				<li><a href="index.php?controller=Courses">Courses</a></li>
				<li><a href="index.php?controller=Streams">Streams</a></li>
				<li><a href="index.php?controller=AboutUs">About Us</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="signup.php">Sign Up</a></li>
			</ul>
		</nav>
		<main>
		   <div class="register-box">
			<div class="register-box-body">
			<p class="login-box-msg">Sign Up - Feed Your Curiosity</p>
        <form action="processRegisteration.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="formFullName" placeholder="Full name"/>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Email"/>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password"/>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Retype password"/>
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> I agree to the <a href="#">terms</a>
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div><!-- /.col -->
          </div>
        </form>
       </div><!-- /.login-box-body -->
	  </div>
			<footer>
				<nav>
					<ul>
						<li>&copy;2015 Quwius Inc.</li>
						<li><a href="#">Company</a></li>
						<li><a href="#">Connect</a></li>
						<li><a href="#">Terms &amp; Conditions</a></li>
					</ul>
				</nav>
			</footer>
		</main>
	</body>
</html>