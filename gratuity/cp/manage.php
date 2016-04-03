<!DOCTYPE HTML>

<?php 

include("../includes/config.php");
if(!isset($_SESSION['c_id']))
{
	redirect("index");


}
else
{
	$session_emailid = $_SESSION['c_id'];
	$queryu = query("SELECT * FROM c_users WHERE emailid='$session_emailid'");
	$rowu = mysqli_fetch_array($queryu);
	//$kid=$rowu[]'id'];

	$queryf = query("SELECT * FROM c_userdata WHERE emailid='$session_emailid'");	
	$rowf = mysqli_fetch_array($queryf);	
	$r=query("SELECT * From help where email='$session_emailid'");
	$rowd=mysqli_fetch_array($r);		

	//query("UPDATE timetable SET flag='0' where email='$session_emailid'");

	if($rowf['verifyf']!=1)
	{
		redirect("profile");
	}
	$agent=1;
	$useragent=$_SERVER['HTTP_USER_AGENT'];
	if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
	{
		$agent=0;
	}

}
?>




<html>
<STYLE TYPE="text/css">


</STYLE>
<head>
	<title>Gratuity</title>
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



	<STYLE TYPE="text/css">
	
	


}       


</STYLE>



<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>
<body>

	<!-- Header -->
	<?php  include('includes/header.php'); ?>

	<!-- Main -->
	<div id="main">

		<!-- Intro -->
		<section id="top" class="two">
			<div class="container">


				<?php  
				date_default_timezone_set("Asia/Kolkata"); 

	//include('../includes/config.php');
				

				if($rowd['verifyd']==0||$rowd['verifyd']==1)

				{







					if($rowd['verifyd']==1) {echo '<h2>You can now modify your post</h2>';}

					?>

					<button class="btn btn-info"><h3>Need Something? We'll help you</h3></button>
					<form role="form" action="" method="POST">
						<div class="form-group">


							<div class="row">						


								<div class="u">

								</div>
								<div class="10u" style="text-align:left;">

									<h3>You are an?</h3>

														<select size="1" id="gender" name="you" required>
																<option value="" style="display:none">Select</option>
																<option>Individual</option>
																<option>Organisation (NGO)</option>




															</select>

									<h3>What do you need?</h3>
									<div class="table-responsive">
										<table>
											<tr><td>  

												<span class="btn btn-default"><input onclick="fundx()" type="checkbox" name="need[]" value="Funds"  >Funds</input></span><div id="flux" style="visibility:hidden;position:absolute;"><input type="text" name="fund" placeholder="How much fund do you require?" required></div><br>
												<span class="btn btn-default"><input type="checkbox" name="need[]" value="Meds"  >Medical Supplies</input></span><br>


												<span class="btn btn-default"><input type="checkbox" name="need[]" value="Clothes"  >Clothes</input></span><br>
												<span class="btn btn-default"><input type="checkbox" name="need[]" value="Food" >Food</input></span><br>
												<span class="btn btn-default"><input type="checkbox" name="need[]" value="Other Stuff" >Others</input></span><br>

											</td></tr>
										</table>

									</div>

								<textarea class="form-control" name="why" rows="5" id="comment" placeholder="Please explain in detail the situation you are in.." required><?= $rowd['why']; ?></textarea>
						<br><center><button type="submit" id="search" name="sub" class="button"style="width:200px;height=100px;"/>Submit</button></center>	
							</div>
								<div class="u"></div>
								


								
							</div>
						</form>




						<?php
					}

					if(isset($_POST['sub']))
					{

						$f=0;
				//$days=array('mon','tue','wed','thu','fri','sat','sun');
						$i=0;
						if($rowd['email']==$session_emailid)
						{
							$f=1;
						}

						while($i<7)
						{
					//$day=$days[$i];

							if(isset($_POST['need']))
							{
								$check = $_POST['need'];
								foreach($check as $checked) 
								{
									$checked=implode(',', $_POST['need']);



								}
								if($f==0)
								{
									if(query("INSERT INTO help (need,email) VALUES ('".$checked."','$session_emailid')"))
										{$f=1;}
								}
								else if($f==1)
								{
									query("UPDATE help SET need='$checked' where email='$session_emailid'");
								}

							}
							else
							{
						//echo 'notset';
							}
							$i++;


						}


				//query("UPDATE timetable SET flag='1' where email='$session_emailid'");



						$why=$_POST['why'];
						$fund=$_POST['fund'];
						$why='<pre>'.$why.'</pre>';
						if($rowd['verifyd']==1) 
							query("UPDATE help SET why='$why',verifyd=1,funds='$fund' where email='$session_emailid'");
						else
						query("UPDATE help SET why='$why',verifyd=2,funds='$fund' where email='$session_emailid'");

						redirect('manage');

					}



					if($rowd['verifyd']==2)
					{

						?>


						<center>
							<?php
							if($rowd['propic']=="")
							{

							}
							else
							{
								echo '<img class="img-rounded"style="height: 1000px;width:500px;"src="uploads/'.$rowd['propic'].'"/>';
							}?>

							<form action="" method="post" enctype="multipart/form-data"> 
								<h3>Upload documents for verification.</h3>
								<input class="btn btn-primary" type="file" name="myFile">
								<br>
								<button type="submit"  class="button" required = "required" accept="image/*"name="up">Upload</button>
							</form>

						</center>


						<?php }


						if($rowd['verifyd']==3)
						{


							echo "<h1>Your Document has been sent for verification, you'll get an email when the documents have been verified.</h1>";
						}









						?>	



					</div>
				</section>

			</div>



		</body>

		</html>
















		<!-- Footer -->
		<?php include("templates/footer.php") ?>






		<script src="js/custom.js"></script>

		<?php
				//sleep(5);
		//if(isset($_POST['sub']))
			//redirect('manage');



		if(isset($_POST['up']))
		{

			define("UPLOAD_DIR", "uploads/");

			if (!empty($_FILES["myFile"])) 
			{
				$myFile = $_FILES["myFile"];



				$name =  $myFile["name"];

				$f=0;

				$fileSize = $_FILES['myFile']['size'];
				if($fileSize<1250000)
				{
					$f=1;
				}


				//$fileType = exif_imagetype($_FILES["myFile"]["tmp_name"]);
				$allowed = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG);
				if ($f) 
				{

					$i = 0;
					$parts = pathinfo($name);
					$rand=random_string(7);
					$name=$rand.".".$parts["extension"];



					while (file_exists(UPLOAD_DIR . $name))
					{
						$i++;
						$name = $rand . $i . "." . $parts["extension"];
					}
		//echo $parts["extension"];

    // preserve file from temporary directory


					$success = move_uploaded_file($myFile["tmp_name"],
						UPLOAD_DIR . $name);
					if($success)
					{
						query("UPDATE help SET docs='$name',verifyd='3' WHERE email='$session_emailid'");
						redirect("manage");
					}
					if (!$success)
					{ 
						echo "<h1 style='color: red;'>Unable to save file.</h1>";
						exit;
					}

				}
				else
				{
					if($f=='0')
						echo '<h1 style="color: red;">Image size must be less than 1MB</h1>';

					else

						echo '<h1 style="color: red;">Invalid Extension, Upload Image file only</h1>';
				}

		//$t=UPLOAD_DIR.$name;
//echo $path = rtrim(dirname($t), "/\\");
		//echo realpath($t);
    // set proper permissions on the new file
		//chmod(UPLOAD_DIR . $name, 0644);
				//redirect('manage');			
			}


		}

		?>


		<script>
		function fundx(){
			var f=document.getElementById("flux");
			if(f.style.visibility=="visible")
			{
				f.style.visibility="hidden";
				f.style.position="absolute";

			}
			else
			{
				f.style.visibility="visible";
				f.style.position="inherit";
			}
		}


		</script>