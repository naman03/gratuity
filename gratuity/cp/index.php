<!DOCTYPE HTML>

<?php 

include("../includes/config.php");

if(isset($_SESSION['c_id']))
{
$session_emailid = $_SESSION['c_id'];
$queryu = query("SELECT * FROM c_users WHERE emailid='$session_emailid'");
$rowu = mysqli_fetch_array($queryu);
$queryf = query("SELECT * FROM c_userdata WHERE emailid='$session_emailid'");				

	$rowf = mysqli_fetch_array($queryf);
}
$agent=1;
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
	$agent=0;
}
?>
<html>
	<head>
		<title>Gratuity- User's control Panel</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollzer.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/bootstrap.js"></script>
		<noscript>
				
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<link rel="stylesheet" href="css/boot/bootstrap.css" />
				<link rel="stylesheet" href="css/custom.css" />





		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<?php include("includes/header.php");?>

		<!-- Main -->
			<div id="main">
				
				<!-- Intro -->
					<?php
						echo '<section id="top" class="one dark cover">
							<div class="container">';

						if(!isset($_SESSION['c_id'])&&!isset($_POST['forget'])&&!isset($_POST['ok']))

						{
							

							echo '<header> 
							<h2 class="alt">Hi! welcome to<strong> User\'s Panel</strong></h2>
							<a href="https://gratuity.in" target="_blank"><h2 class="alt">gratuity.in</h2><br /></a>

							</header>
							
							<footer>';
						}
						if(isset($_SESSION['c_id']))
						{
							echo '<a href="profile" class="button scrolly">Profile</a>';

						}
						else if(!isset($_POST['forget'])&&!isset($_POST['ok']))
						{
							if($agent==1)
							{
							echo '<a href="#loginz" class="button scrolly">Sign In/Sign Up</a>';
							}
							else
							{
								echo '<button type="button" class="button "><a href="#in">Sign In</a></button>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<button type="button" class="button "><a href="#out">Sign Up</a></button>';
							}

						}?>
							</footer>

						</div>
					</section>
					<div id="loginz"></div>
					
				<!-- Portfolio -->



<section class="three">
				<div class="container" >
					<?php
					if(isset($_POST['forget'])&&!isset($_SESSION['c_id'])&&!isset($_POST['ok']))
					{
						echo '<header></header><h2 class="text-center">Submit your Email Id to reset your password </h2>
						<form role="form" method="POST" action="">
						<div class="row">
						<div class="3u"></div>
						<div class="6u">
						<input class="" id="" type="email"  name="emailid" required placeholder="Email" value=""><br>
						<button class="button"  type="submit" name="ok" >Submit</button>
						</div>
						<div class="3u"></div>
						</form>
						</div>';

					}
					if(isset($_POST['ok']))
					{

						$flag=0;



						{

							$emailid= strip_tags($_POST['emailid']);

											//$password= md5(strip_tags($_POST['password']));

							$result=query("select * from c_users WHERE emailid='$emailid'");

							$num=mysqli_num_rows($result);
							$row=mysqli_fetch_assoc($result);

							if($num==1) 
							{
								extract($row);


								$flag=1;


							}

							else

								echo '</br><h1 style="text-align:center;">You are not a member of <a href="index">gratuity.IN</a>,<br><form role="form" method="POST" action=""><button class="btn-primary"  type="submit" name="forget" >Try Again!</button> OR <button type="button" class="btn-primary" data-toggle="modal" data-target=".xt">Sign Up</button></form></h1>';

							if($flag==1)
							{
								require_once('mail.php');
								$rand=random_string2(6);
								$pass=md5($rand);
								query("UPDATE c_users SET password='$pass' where emailid='$emailid'");

								//$url="https://cashwaapas.com/process.php?key=".$rand;

								$headers = "cpl@cashwaapas.com";
								$html_customer = "Hello <h3>$name</h3><br>This is Camilla from cashwaapas I am here to help you with your password.<br><br>This is your new password: <strong>$rand</strong><br> You can change password from your profile after loggin in.<br><a href='https://cashwaapas.com/cpl/index.php#loginz'>Click Here!</a> to login.<br>We are happy to be at your service. <br><br>Keep saving. <br><br>Regards<br>Camilla at Cashwaapas<br><br><br> For Support/Suggestions drop a mail at cpl@cashwaapas.com ";

								//mailman($emailid, "Password Reset", $html_customer, $name,$headers,"Camilla at Cashwaapas");


								echo '<h3 style="font-size:50px;text-align:center;">Please check your email for new password and then <button type="button" class="btn-primary" data-toggle="modal" data-target=".xu">LogIn</button></form></h1>.</h3>';
							}

						}


					}

					if(!isset($_SESSION['c_id'])&&!isset($_POST['forget'])&&!isset($_POST['ok'])){
						
						if($agent==1)
						{
							echo '<header>
						<h1>LogIn/SignUp:</h1>
						</header>';
						echo '<button type="button" class="button " data-toggle="modal" data-target=".xu">Sign In</button>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<button type="button" class="button " data-toggle="modal" data-target=".xt">Sign Up</button>';
						}
						

					}
					else if(!isset($_POST['forget'])&&!isset($_POST['ok'])){

						echo '<header>
						<h1>Log Out:</h1>
						</header>


						


						<a href="logout.php" class="button " style="margin-left: 30px;" >Log Out</a>
						&nbsp;&nbsp;&nbsp;&nbsp;
						';
					}?>

<?php 
if(!isset($_POST['forget'])&&!isset($_SESSION['c_id']))
{

if($agent==1){

					echo '<div class="modal fade bs-example-modal-md xu" aria-labelledby="myLargeModalLabel" tabindex="-1" role="dialog"  aria-hidden="true" >
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title">Sign In:</h4>
								</div>
								<div class="modal-body">
									<p>
										<form role="form" >
											<div class="row">
												<div class="3u"></div>
												<div class="6u">
													<input class="" id="emailid" type="email"  name="emailid" pattern="^[\w\s!@#\$%\^&\*\+\.\?]{6,30}" required placeholder="Email">
												</div>
												<div class="3u"></div>
											</div>
											<div class="row">
												<div class="3u"></div>
												<div class="6u">
													<input class="" id="password" type="password" name="password" required  placeholder="Password"></br>

												</div>
												<div class="3u"></div>
											</div>

										</br>
										<button class="button " id="login" type="submit" name="login" >Sign In</button>
									</form>

								</p>
							</div>
							<div class="modal-footer">
								<form method="post" action="">
									<h1 style="text-align:center;"><button type="submit" class="btn-primary" href="resetpassword" name="forget">Forget Password?</button></h1>
									<div class="login_result" style="text-align:center;" id="login_result"></div>
								</form>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->











				<div class="modal fade bs-example-modal-md xt" aria-labelledby="myLargeModalLabel" tabindex="-1" role="dialog"  aria-hidden="true" >
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">SignUp:</h4>
							</div>
							<div class="modal-body">
								<p>
									<form role="form">
										<div class="row">
											<div class="3u"></div>
											<div class="6u">
												<input class="" id="name2" type="text" name="name" placeholder="FULL NAME">
											</br>
											<input class="" id="emailid2" type="email" name="emailid" placeholder="Valid Email ID">
										</div>
										<div class="3u"></div>
									</div>
									<div class="row">
										<div class="3u"></div>
										<div class="6u">
											<input class="" id="password2" type="password" name="password" placeholder="Password"></br>
											<input class="" id="cpassword2" type="password" name="cpassword" placeholder="Confirm Password"></br>
										</div>
										<div class="3u"></div>
									</div>
									

								</br>
								<button class="button " type="submit" id="signup" name="signup" >Sign Up</button>
							</form>
							
						</p>
					</div>
					<div class="modal-footer">
						<div class="login_result2" style="text-align:center;" id="login_result"></div>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->';

}
else
{

echo '<section id="in" class="two">
					<header>
						<h1>LogIn</h1>
						</header>
							<form role="form" >
											<div class="row">
												<div class="3u"></div>
												<div class="6u">
													<input class="" id="emailid" type="email"  name="emailid" pattern="^[\w\s!@#\$%\^&\*\+\.\?]{6,30}" required placeholder="Email">
												</div>
												<div class="3u"></div>
											</div>
											<div class="row">
												<div class="3u"></div>
												<div class="6u">
													<input class="" id="password" type="password" name="password" required  placeholder="Password"></br>

												</div>
												<div class="3u"></div>
											</div>

										
										<button class="button " id="login" type="submit" name="login" >Sign In</button>
									</form>
									<form method="post" action="">
				<h1 style="text-align:center;"><button type="submit" class="btn-primary" name="forget">Forget Password?</button></h1>
									</form>
							<div class="login_result" id="login_result"></div>
</section>



<section id="out" class="">
<header>
						<h1>SignUp</h1>
						</header>
							<form role="form">
										<div class="row">
											<div class="3u"></div>
											<div class="6u">
												<input class="" id="name2" type="text" name="name" placeholder="FULL NAME">
											</br>
											<input class="" id="emailid2" type="email" name="emailid" placeholder="Valid Email ID">
										</div>
										<div class="3u"></div>
									</div>
									<div class="row">
										<div class="3u"></div>
										<div class="6u">
											<input class="" id="password2" type="password" name="password" placeholder="Password"></br>
											<input class="" id="cpassword2" type="password" name="cpassword" placeholder="Confirm Password"></br>
										</div>
										<div class="3u"></div>
									</div>
									

								
								<button class="button " type="submit" id="signup" name="signup" >Sign Up</button>
							</form>
							<div class="login_result2" id="login_result"></div>
</section>';}}?>

<!-- About Me -->
<section id="about" class="three">
	<div class="container">

		<header>
			<h2>About Us</h2>
		</header>

		<a href="#" class="image featured"><img src="images/cove.jpg" alt="" /></a>

<p></p>			

		</div>
	</section>

	<!-- Contact -->
	<section id="contact" class="four">
		<div class="container">

			<header>
				<h1>Contact Us</h1>
			</header>

			<p>We will get back to you in 48 Hrs.</p>
<?php 
					if(!isset($_POST['msg']))
					{?>
			<form method="post" action="#contact">
				<div class="row 50%">
					<div class="6u"><input type="text" name="name" placeholder="Full Name" value="<?php if(isset($_SESSION['c_id'])){ echo $rowu['name']; } ?>" required/></div>
					<div class="6u"><input type="text" name="emailid" placeholder="Your Email" value="<?php if(isset($_SESSION['c_id'])){ echo $_SESSION['c_id']; } ?>" required/></div>
				</div>
				<div class="row 50%">
					<div class="12u">
						<input type="text" name="subject" placeholder="Subject" required/><br>
						<textarea name="message" placeholder="Message" required></textarea>
					</div>
				</div>
				<div class="row">
					<div class="12u">
						<button type="submit" class="button" name="msg" style="margin-right: 40px;">Send Message</button>
				</div>
			</form>

			<?php }
					if(isset($_POST['msg']))
					{
								require_once('mail.php');
								$name=$_POST['name'];
								$headers = $_POST['emailid'];
								$subject=$_POST['subject'];

								$emailid = "cpl@cashwaapas.com";
								$message = $_POST['message'];

								//mailman($emailid, $subject, $message, "CPL",$headers,$name);


								echo '<h3 style="font-size:50px;text-align:center;">Message sent successfully.</h3>';
					}



			?>

		</div>
	</section>

</div>




	</div>
</section>
































			
			</div>

		<!-- Footer -->
							<?php include_once("templates/footer.php");  ?>


	</body>
</html>



<script src="js/custom.js"></script>