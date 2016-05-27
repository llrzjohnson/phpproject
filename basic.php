﻿
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iDesign - Canvas</title>
    <!-- myProject references -->
    <link href="css/formvalidate.css" rel="stylesheet" type="text/css">
    <link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="dist/animate.css">
    <link rel="stylesheet" href="dist/morphext.css">
    <script src="//https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/form-builder.min.css">
    <script src="Scripts/jquery.validate.js"></script>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
</head>
<body>

    <div id="page">
        <header>
            <a class="logo" title="That Net" href="default.php" target="_blank"><span>That Net Design</span></a>
            <div class="hero">
                <h1>Add <span id="js-rotating">fun, art, style, life</span> with coding and design</h1>
                <a class="btn" title="Let's start creating websites" href="#">Let's start<span> creating websites</span></a>
                <script>window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><\/script>')</script>
        <script src="dist/morphext.js"></script>
        <script>
         $("#js-rotating").Morphext({
    // The [in] animation type. Refer to Animate.css for a list of available animations.
    animation: "bounceIn",
    // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
    separator: ",",
    // The delay between the changing of each phrase in milliseconds.
    speed: 2000,
    complete: function () {
        // Called after the entrance animation is executed.
    }
});
        </script>
            </div>
        </header>

        <section class="main"></section>

        <section class="canvas">

<!-- INSERT HERE -->		
		
  
<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="" autocomplete="off">
				<h2>Please Sign Up</h2>
				<p>Already a member? <a href='login.php'>Login</a></p>
				<hr>

				<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}

				//if action is joined show sucess
				if(isset($_GET['action']) && $_GET['action'] == 'joined'){
					echo "<h2 class='bg-success'>Registration successful, please check your email to activate your account.</h2>";
				}
				?>

				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" value="<?php if(isset($error)){ echo $_POST['email']; } ?>" tabindex="2">
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control input-lg" placeholder="Confirm Password" tabindex="4">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
				
				</div>
			</form>
			
		</div>
	</div>

</div>

 
 <!-- INSERT HERE -->
 
        </section>
		
<div style="padding-bottom: 1em;"> 
</div>
        <section class="how-to">
            <aside>

                <div class="content">
                    <img alt="Planning your website design" src="images/photo_planning.jpg">
                    <h4>How-To: Planning</h4>
                    <p>Planning your website ahead of time will give it clear direction as well as prevent missed deadlines and backtracking.</p>
                    <a title="What website design do you need." href="#">Learn more</a>
                </div>
            </aside>
            <aside>
                <div class="content">
                    <img alt="Choosing the right design" src="images/photo_mouse.jpg">

                    <h4>How-To: Design</h4>
                    <p>One of the most important things to remember during the process of website development is to create a clean, appealing design.</p>
                    <a title="Allow us to help you choose the right design." href="#">Learn more</a>
                </div>
            </aside>
            <blockquote>
                <p class="quote">I Design websites that my clients can manage and update on their own without any knowledge of HTML.</p>
                <p class="credit"><strong>L. Lester Johnson</strong><br><em>Web Designer</em><br>5nDesign</p>
            </blockquote>

        </section>

        <nav>
            <ul>
                <li>
                    <a title="Home" href="default.php" aria-haspopup="true">Home</a>
                </li>
                <li>
                    <a title="About Me" href="about.php" aria-haspopup="true">About Me</a>

                </li>

                <li>
                    <a title="Portfolio" href="portfolio.php" aria-haspopup="true">Portfolio</a>

                </li>
                <li>
                    <a title="Canvas" href="#">Canvas</a>
                </li>
                <li>
                    <a title="Contact Us" href="contact.php">Contact Me</a>
                </li>
                
            </ul>

        </nav>

        <footer>

<!----------imported ------>
		
		<div class="container">
	<div class="alert alert-info">
	<p>Member only page - Welcome <?php echo $_SESSION['username']; ?></p>
    
	</div>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="lib/jquery-1.7.2.js"></script>
<script src="dist/jquery.masked-input.js"></script>
		
		<!-- imported ------->
		
            &copy; L. Lester Johnson 2016
            <div class="content">
                <a title="Privacy Policy" href="#">Privacy Policy</a>
                <a title="Terms of Service" href="#">Terms of Service</a>
            </div>
        </footer>

    </div>
	
</body>
</html>
