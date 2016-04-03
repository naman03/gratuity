<!DOCTYPE HTML>

<?php 

include("../includes/config.php");
if(!isset($_SESSION['c_id']))
{
	redirect("index.php");

}
else
{
	$session_emailid = $_SESSION['c_id'];
	$queryu = query("SELECT * FROM c_users WHERE emailid='$session_emailid'");
	$rowu = mysqli_fetch_array($queryu);
	//$kid=$rowu[]'id'];

	$queryf = query("SELECT * FROM c_userdata WHERE emailid='$session_emailid'");				

	$rowf = mysqli_fetch_array($queryf);
	
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
	
	#inline ul li{
		display: inline-table;
	}
	th{
		font-weight: 800;
	}


	</STYLE>

	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>
<body>

	<?php  include('includes/header.php'); ?>

					<!-- Main -->
					<div id="main">

						<!-- Intro -->
						<?php if($rowf['verifyf']!="3"){ ?>
						<section id="top" class="two">
							<div class="container">
								<?php
								if(!isset($_POST['ch'])&&!isset($_POST['change'])){
									echo	'

									<footer>';

									if(isset($_SESSION['c_id'])&&$rowf['verifyf']=="")
									{
									/*if($agent=="1")
									{
									echo '<button  class="button" data-toggle="modal" data-target=".xu">Apply Now</button>';
									}
									else*/
									{
										echo '<a  class="button" href="#form">Apply Now</a>';
									}

								}
								else if($rowf['verifyf']=="1")
								{
									echo '<div id="inline"><ul><li><a  class="button" href="#edit"  >Edit Profile</a></li>';
									echo '<li><form method="post" action=""><button class="button" type="submit" name="ch" >ChangePassword</button></form></li></ul></div>';


								}
								else if($rowf['verifyf']=="3"){
									echo '<a  class="button" href="#pro">Complete Profile</a>';

								}
								else if($rowf['verifyf']=="0")
								{

									echo '<a  class="button" href="#status">Status</a>';
								}


							}

							?>

						</footer>
					</div>
				</section>

				<?php
			}

				if($rowf['verifyf']=="3"&&!isset($_POST['ch'])&&!isset($_POST['change'])){


					echo '<section class="two" id="pro">


					<div class="row">

					<div class="u">

					</div>
					<div class="10u">
					<h3>Upload your Profile Picture <h4>Only JPEG/PNG/GIF files are accepted, Image must be less than 1mb</h4>';

					if($rowf['propic']=="")
					{
						echo '<img src="uploader/userpic.gif"/>';
					}
					else
					{
						echo '<img class="img-rounded"style="height: 200px;width:200px;"src="uploads/'.$rowf['propic'].'"/>';
					}
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
									query("UPDATE c_userdata SET propic='$name' WHERE emailid='$session_emailid';");
									redirect("profile");
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
						}


					}


					echo '</br></br><center>
					<form action="" method="post" enctype="multipart/form-data"> 
					<input class="btn btn-primary" type="file" name="myFile">
					<br>
					<input type="submit" value="Upload" required = "required" accept="image/*"name="up">
					</form>

					
					<form action="" method="post" role="form"> <br>
					
					<button type="submit" class="button" value="Next" name="link"> Next Step</button>

					</form>';
					if(isset($_POST["link"]))
					{
						

						query("UPDATE c_userdata SET verifyf='1' WHERE emailid='$session_emailid';");
						redirect("profile");
					}

					echo '</center>
					</div>
					<div class="u">

					</div>


					</div>


					</section>';



				}




				



			/*	if($agent=="0"&&$rowf['verifyf']==""&&!isset($_POST['ch'])&&!isset($_POST['change'])){

							echo '<div class="modal fade bs-example-modal-md xu" aria-labelledby="myLargeModalLabel" tabindex="-1" role="dialog"  aria-hidden="true" >
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<center><h4 class="modal-title">CPL Form:</h4></center>
										</div>
										<div class="modal-body">
											<p>
												<form role="form" method="post" action="" >
													<div class="row">
														<div class="u"></div>
														<div class="5u">
															<input class="" id="fname" type="text"  name="fname"  required placeholder="First Name">
														</div>
														<div class="5u">
															<input class="" id="lname" type="text"  name="lname"  required placeholder="Last Name">
														</div>
														<div class="u"></div>
													</div>
													<div class="row">
														<div class="u"></div>
														<div class="10u">
															<select size="1" id="gender" name="gender" required>
																<option value="" style="display:none">Gender</option>
																<option>Male</option>
																<option>Female</option>




															</select>
														</div>

														<div class="u"></div>
													</div>

													<div class="row">
														<div class="u"></div>
														<div class="10u">
															<input class="" id="phone" type="text"  name="phone"  required  maxlength="14" placeholder="Phone Number: You will be verified via call.">
														</div>

														<div class="u"></div>
													</div>
													<div class="row">
														<div class="u"></div>
														<div class="10u">
															<select size="1" id="state" name="state" required>
																<option value="" style="display:none">Select State</option>
																<option>Andaman and Nicobar Islands</option>
																<option>Andhra Pradesh</option>
																<option>Arunachal Pradesh</option>
																<option>Assam</option>
																<option>Bihar</option>
																<option>Chandigarh</option>
																<option>Chhattisgarh</option>
																<option>Dadra and Nagar Haveli</option>
																<option>Daman and Diu </option>
																<option>Delhi </option>
																<option>Goa</option>
																<option>Gujarat</option>
																<option>Haryana</option>
																<option>Himachal Pradesh</option>
																<option>Jammu and Kashmir</option>
																<option>Jharkhand</option>
																<option>Karnataka</option>
																<option>Kerala</option>
																<option>Lakshadweep</option>
																<option>Madhya Pradesh</option>
																<option>Maharashtra</option>
																<option>Manipur</option>
																<option>Meghalaya</option>
																<option>Mizoram</option>
																<option>Nagaland</option>
																<option>Odisha</option>
																<option>Puducherry </option>
																<option>Punjab</option>
																<option>Rajasthan</option>
																<option>Sikkim</option>
																<option>Tamil Nadu</option>
																<option>Tripura</option>
																<option>Uttar Pradesh</option>
																<option>Uttarakhand</option>
																<option>West Bengal</option>
															</select>
														</div>

														<div class="u"></div>
													</div>

													<div class="row">
														<div class="u"></div>
														<div class="10u">
															<input class="" id="city" type="text"  name="city"  required placeholder="City">
														</div>

														<div class="u"></div>
													</div>


													<div class="row">
														<div class="u"></div>
														<div class="10u">
														<textarea class="" id="clg" type="text"  name="edu"  required placeholder="Qualification"></textarea>

														</div>

														<div class="u"></div>
													</div>
													<div class="row">
														<div class="u"></div>
														<div class="10u">
															<textarea class="" id="clg" type="text"  name="clg"  required placeholder="Experience"></textarea>
														</div>

														<div class="u"></div>
													</div>


													<div class="row">
														<div class="u"></div>
														<div class="10u">
														<textarea class="" id="clg" type="text"  name="pro" placeholder="Past Achivements(Optional)"></textarea>

														</div>

														<div class="u"></div>
													</div>

													


													<div class="row">
														<div class="u"></div>
														<div class="10u">
															<textarea class="" rows="1"  id="addr" type="text"  name="addr"  required placeholder="Full Address"></textarea>
														</div>
														<div class="u"></div>
													</div>

													<div class="row">
														<div class="u"></div>
														<div class="5u">
															<input class="" id="pin" type="text"  name="pin"  required pattern="[0-9]{6}" maxlength="6" placeholder="Pin Code">
														</div>
														<div class="5u">
															<input class="" id="age" type="text"  name="age"  required pattern="[0-9]{2}" maxlength="2"placeholder="Age">
														</div>

														<div class="u"></div>
													</div>

												</br><center>
												<button class="button " id="apply" type="submit" name="apply" >Apply</button></center>
											</form>

										</p>
									</div>
									<div class="modal-footer">
										<form method="post" action="">

											<div class="login_result" id="login_result"></div>
										</form>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->'; }*/


							if($rowf['verifyf']==""&&!isset($_POST['ch'])&&!isset($_POST['change'])){

								echo '
								<section id="form">
								<center>
								<form role="form" method="post" action="" >
								<div class="row">
								<div class="u"></div>
								<div class="5u">
								<input class="" id="fname" type="text"  name="fname"  required placeholder="First Name">
								</div>
								<div class="5u">
								<input class="" id="lname" type="text"  name="lname"  required placeholder="Last Name">
								</div>
								<div class="u"></div>
								</div>
								<div class="row">
								<div class="u"></div>
								<div class="10u">
								<select size="1" id="gender" name="gender" required>
								<option value="" style="display:none">Gender</option>
								<option>Male</option>
								<option>Female</option>




								</select>
								</div>

								<div class="u"></div>
								</div>

								<div class="row">
								<div class="u"></div>
								<div class="10u">
								<input class="" id="clg" type="text"  name="clg"  required placeholder="Aadhaar Card No.">
								</div>

								<div class="u"></div>
								</div>



								<div class="row">
								<div class="u"></div>
								<div class="10u">
								<input class="" id="phone" type="text"  name="phone"  required  maxlength="14" placeholder="Phone Number: You will be verified via call.">
								</div>

								<div class="u"></div>
								</div>
								<div class="row">
								<div class="u"></div>
								<div class="10u">
								<select size="1" id="state" name="state" required>
								<option value="" style="display:none">Select State</option>
								<option>Andaman and Nicobar Islands</option>
								<option>Andhra Pradesh</option>
								<option>Arunachal Pradesh</option>
								<option>Assam</option>
								<option>Bihar</option>
								<option>Chandigarh</option>
								<option>Chhattisgarh</option>
								<option>Dadra and Nagar Haveli</option>
								<option>Daman and Diu </option>
								<option>Delhi </option>
								<option>Goa</option>
								<option>Gujarat</option>
								<option>Haryana</option>
								<option>Himachal Pradesh</option>
								<option>Jammu and Kashmir</option>
								<option>Jharkhand</option>
								<option>Karnataka</option>
								<option>Kerala</option>
								<option>Lakshadweep</option>
								<option>Madhya Pradesh</option>
								<option>Maharashtra</option>
								<option>Manipur</option>
								<option>Meghalaya</option>
								<option>Mizoram</option>
								<option>Nagaland</option>
								<option>Odisha</option>
								<option>Puducherry </option>
								<option>Punjab</option>
								<option>Rajasthan</option>
								<option>Sikkim</option>
								<option>Tamil Nadu</option>
								<option>Tripura</option>
								<option>Uttar Pradesh</option>
								<option>Uttarakhand</option>
								<option>West Bengal</option>
								</select>
								</div>

								<div class="u"></div>
								</div>

								<div class="row">
								<div class="u"></div>
								<div class="10u">
								<input class="" id="city" type="text"  name="city"  required placeholder="City">
								</div>

								<div class="u"></div>
								</div>



								<div class="row">
								<div class="u"></div>
								<div class="10u">
								<textarea class="" rows="1"  id="addr" type="text"  name="addr"  required placeholder="Full Address"></textarea>
								</div>
								<div class="u"></div>
								</div>


								<div class="row">
								<div class="u"></div>
								<div class="10u">
								<textarea class="" id="clg" type="text"  name="edu"  required placeholder="About You"></textarea>

								</div>

								<div class="u"></div>
								</div>
								
								



								<div class="row">
								<div class="u"></div>
								<div class="5u">
								<input class="" id="pin" type="text"  name="pin"  required pattern="[0-9]{6}" maxlength="6" placeholder="Pin Code">
								</div>
								<div class="5u">
								<input class="" id="age" type="text"  name="age"  required pattern="[0-9]{2}" maxlength="2"placeholder="Age">
								</div>

								<div class="u"></div>
								</div>

								</br>
								<button class="button " id="apply" type="submit" name="apply" >Apply</button>
								</form></center>






							</section>';}?>







							<?php

							if(isset($_POST['apply']))
							{
								$fname=preg_replace('/\s+/','',$_POST['fname']);
								$lname=$_POST['lname'];
								$gender=$_POST['gender'];
								$phone=$_POST['phone'];
								$state=$_POST['state'];
								$city=$_POST['city'];
								$edu=$_POST['edu'];
								$clg=$_POST['clg'];
								$pro=$_POST['pro'];
								$addr=$_POST['addr'];
								$pin=$_POST['pin'];
								$age=$_POST['age'];

								$rand=random_string(3);
								$sub=$fname.$rand;

//echo $fname,$lname,$phone,$state,$city,$edu,$pro,$addr,$pin,$age;
								$re=query("SELECT * FROM c_userdata WHERE emailid='$session_emailid'");
								$rowz=mysqli_num_rows($re);
								if($rowz==0)
								{
									$result=query("INSERT INTO c_userdata(fname,lname,emailid,gender,phone,state,city,edu,clg,pro,addr,pin,age,verifyf,timestamp,sub_id,ip) values('$fname','$lname','$session_emailid','$gender' ,'$phone','$state','$city','$edu','$clg','$pro','$addr','$pin','$age','3','$time','$sub','$ip')");
								}
								else
								{
									echo "Already applied wait for the confirmation.";
	//echo 'you have already applied';
								}
//query("UPDATE c_userdata SET verifyf='0' WHERE emailid='$session_emailid'");


								redirect("profile.php");
							}



							?>






							<?php if(!isset($_POST['ch'])&&!isset($_POST['change'])&&$rowf['verifyf']=="1")
							{

								echo '<section id="wallet" class="three">


								<div class="container">

								<header>
								<h1>Your Details</h1>
								</header>
								<div id="edit" class="row">

								<div class="12u">';

									if($rowf['propic']=="")
					{
						echo '<img src="uploader/userpic.gif"/>';
					}
					else
					{
						echo '<img class="img-rounded"style="height: 200px;width:200px;"src="uploads/'.$rowf['propic'].'"/>';

					}



echo '<center><br><br><form action="" method="post" enctype="multipart/form-data"> 
					<input class="btn btn-primary" type="file" name="myFile">
					<br>
					<button type="submit"  class="button" required = "required" accept="image/*"name="up">Change</button>
					</form></center><section ><form role="form" method="post" action="" ><table>
<hr size=3 color="black" >

<tr><th> Email ID:</th><td><strong> '.$rowf['emailid'].'  </strong></td></tr>
<tr><th>Name: </th><td><strong> '.$rowf['fname'].'  '.$rowf['lname'].'</strong></td></tr>

								<tr><th>Aadhar Card No:</th><td> <strong> '.$rowf['clg'].'  </strong>  </td> </tr>

<tr><th>Phone:</th><td> <input type="text" name="phone" value="'.$rowf['phone'].'" size="20" maxlength="13">   </td></tr>

<tr><th>State:</th><td><select size="1" id="state" name="state"  required>
								<option value="'.$rowf['state'].'">'.$rowf['state'].'</option>
								<option>Andaman and Nicobar Islands</option>
								<option>Andhra Pradesh</option>
								<option>Arunachal Pradesh</option>
								<option>Assam</option>
								<option>Bihar</option>
								<option>Chandigarh</option>
								<option>Chhattisgarh</option>
								<option>Dadra and Nagar Haveli</option>
								<option>Daman and Diu </option>
								<option>Delhi </option>
								<option>Goa</option>
								<option>Gujarat</option>
								<option>Haryana</option>
								<option>Himachal Pradesh</option>
								<option>Jammu and Kashmir</option>
								<option>Jharkhand</option>
								<option>Karnataka</option>
								<option>Kerala</option>
								<option>Lakshadweep</option>
								<option>Madhya Pradesh</option>
								<option>Maharashtra</option>
								<option>Manipur</option>
								<option>Meghalaya</option>
								<option>Mizoram</option>
								<option>Nagaland</option>
								<option>Odisha</option>
								<option>Puducherry </option>
								<option>Punjab</option>
								<option>Rajasthan</option>
								<option>Sikkim</option>
								<option>Tamil Nadu</option>
								<option>Tripura</option>
								<option>Uttar Pradesh</option>
								<option>Uttarakhand</option>
								<option>West Bengal</option>
								</select>
								</div></td></tr>
<tr><th>City:</th><td> <input class="" id="city" type="text"  name="city" value="'.$rowf['city'].'" required placeholder="City">   </td></tr>
<tr><th>About You:</th><td> <textarea class="" id="clg" type="text"  name="edu" value="" required placeholder="Qualification">'.$rowf['edu'].' </textarea> </td></tr>



<tr><th>Address:</th><td> <textarea class="" rows="1"  id="addr" type="text"  name="addr"  required placeholder="Full Address">'.$rowf['addr'].'</textarea>   </td></tr>

<tr><th>Pin Code:</th><td> <input class="" id="pin" type="text"  name="pin"  value="'.$rowf['pin'].'"required pattern="[0-9]{6}" maxlength="6" placeholder="Pin Code">   </td></tr>


<tr><th>Age:</th><td> <input class="" id="age" type="text"  name="age" value="'.$rowf['age'].'" required pattern="[0-9]{2}" maxlength="2"placeholder="Age">  </td></tr>

                   </table>

<input type="submit" value="Update" name="updateo"></td>
</form></section>';




							if(isset($_POST['updateo']))
							{
								//$fname=preg_replace('/\s+/','',$_POST['fname']);
								//$lname=$_POST['lname'];
								//$gender=$_POST['gender'];
								$phone=$_POST['phone'];
								$state=$_POST['state'];
								$city=$_POST['city'];
								$edu=$_POST['edu'];
								$clg=$_POST['clg'];
								$pro=$_POST['pro'];
								$addr=$_POST['addr'];
								$pin=$_POST['pin'];
								$age=$_POST['age'];
								$fbl=$_POST["fbl"];
						$lnk=$_POST["lnk"];
						$twl=$_POST["twl"];
						$wbl=$_POST["wbl"];


								$rand=random_string(3);
								$sub=$fname.$rand;

//echo $fname,$lname,$phone,$state,$city,$edu,$pro,$addr,$pin,$age;
								$re=query("SELECT * FROM c_userdata WHERE emailid='$session_emailid'");
								$rowz=mysqli_num_rows($re);
								if($rowz==1)
								{
									query("UPDATE c_userdata SET phone='$phone',state='$state',city='$city',edu='$edu',clg='$clg',pro='$pro',addr='$addr',pin='$pin',age='$age',fbl='$fbl',lnk='$lnk',twl='$twl',wbl='$wbl' WHERE emailid='$session_emailid';");

								}
								else
								{
	//echo 'you have already applied';
								}
//query("UPDATE c_userdata SET verifyf='0' WHERE emailid='$session_emailid'");


								redirect("profile.php");
							}

if(isset($_POST['up']))
					{

						define("UPLOAD_DIR", "uploads/");

						if (!empty($_FILES["myFile"])) 
						{
							$fk=$rowf['propic'];
							//delete("uploads/$fk");
							$myFile = $_FILES["myFile"];

							unlink('uploads/'.$fk);

							$name =  $myFile["name"];

							$f=0;

							$fileSize = $_FILES['myFile']['size'];
							if($fileSize<1250000)
							{
								$f=1;
							}


							//$fileType = exif_imagetype($_FILES["myFile"]["tmp_name"]);
							//$allowed = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG);
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
									query("UPDATE c_userdata SET propic='$name' WHERE emailid='$session_emailid';");
									redirect("profile.php");
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
						}


					}
						//echo 'Name:'.$rowf['fname'].'  '.$rowf['lname'] ;



								
							}







								if(!isset($_POST['ch'])&&!isset($_POST['change'])&&$rowf['verifyf']=='0')
								{
									echo '<section id="status" class="three">

									<div class="container">

									<header>
									<h1>Status</h1>
									</header>

									<h2>Your Counsellor application form has been successfully submitted, and is pending for approval.</h2>
									</section>';
								}
								else if(!isset($_POST['ch'])&&!isset($_POST['change'])&&$rowf['verifyf']=='-1')
								{
									echo '<section id="status" class="three">

									<div class="container">

									<header>
									<h1>Status</h1>
									</header>

									<h2>Your application has been rejected.</h2>
									</section>';
								}
							
									if(isset($_POST['ch'])&&!isset($_POST['change'])){

										echo '<section id="change" class="three">
										<div class="container">

										<header>
										<h2>Change Password</h2>
										</header>
										<form method="post" action="">
										<div class="row">
										<div class="3u"></div>
										<div class="6u">
										<input class="" id="password2" type="password" name="password" placeholder="New Password" required></br>
										<input class="" id="cpassword2" type="password" name="cpassword" placeholder="Confirm New Password" required></br>


										</div>
										<div class="3u"></div>


										</div>
										<button class="button" type="submit" id="change" name="change" >Change</button>
										</form>';}





										if(isset($_POST['change']))
										{	

											$flag=0;


											$password= md5(strip_tags($_POST['password']));

											$cpassword= md5(strip_tags($_POST['cpassword']));

											$result=query("SELECT * FROM c_users WHERE emailid='$session_emailid'"); 

											if(mysqli_num_rows($result)==1)


											{




												if($password!=$cpassword)
												{

							//echo 0;

													$flag=1;
													echo '<br><br><h1 style="text-align:center;">Password did not match <form method="post" action=""><button  class="button" type="submit" name="ch" >Try Again!</button></form></h1><br><br>';

												}
												else if($flag==0)
												{

													$result=query("UPDATE c_users SET password='$cpassword' WHERE emailid='$session_emailid';");


													echo '<br><br><br><h1 style="text-align:center;">Password Successfully Updated. <br> <a class="button" href="profile.php"> Click Here!</a></h1><br><br><br>';
							//echo 1;
												}

												else
												{
													echo '<h1 style="text-align:center;">Some Problem Occured.</a>.</h1>';
												}


											}
											else
												echo 3;
										}?>
									</div>
								</section>


							</div>

							<!-- Footer -->
							<?php include("templates/footer.php") ?>



						</div>
					</section>





					<script src="js/custom.js"></script>