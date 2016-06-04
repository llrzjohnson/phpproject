<?php
//include config
require_once('includes/config.php');

//check if already logged in move to home page
if( $user->is_logged_in() ){ header('Location: index.php'); } 

//process login form if submitted
if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($user->login($username,$password)){ 
		$_SESSION['username'] = $username;
		header('Location: memberpage.php');
		exit;
	
	} else {
		$error[] = 'Wrong username or password or your account has not been activated.';
	}

}//end if submit

//define page title
$title = 'Login';

//include header template
//require('includes/header.php'); 
?>
<!--HEADER-->
<?php require('layout/header.php');?>
<!--HEADER-->
<!-- INSERT START HERE -->		
		
  
<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="" autocomplete="off">
				<h2>Please Login</h2>
				<p><a href='./'>Back to home page</a></p>
				<hr>

				<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}

				if(isset($_GET['action'])){

					//check the action
					switch ($_GET['action']) {
						case 'active':
							echo "<h2 class='bg-success'>Your account is now active you may now log in.</h2>";
							break;
						case 'reset':
							echo "<h2 class='bg-success'>Please check your inbox for a reset link.</h2>";
							break;
						case 'resetAccount':
							echo "<h2 class='bg-success'>Password changed, you may now login.</h2>";
							break;
					}

				}

				
				?>

				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1">
				</div>

				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
				</div>
				
				<div class="row">
					<div class="col-xs-9 col-sm-9 col-md-9">
						 <a href='reset.php'>Forgot your Password?</a>
					</div>
				</div>
				
				<hr>
				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Login" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
				</div>
			</form>
		</div>
	</div>
</div>

 <!-- INSERT END HERE -->

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
<!-- NAVIGATION -->
 <?php require('navigation.php'); ?>
<!-- NAVIGATION -->
<!-- FOOTER -->
 <?php require('layout/footer.php'); ?>
<!-- FOOTER -->

    </div>
	
</body>
</html>
