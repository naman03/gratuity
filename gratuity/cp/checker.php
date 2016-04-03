<?php

include("../includes/config.php");
//@session_start();



if(isset($_POST['action']) && $_POST['action'] == 'login')
{	
	
	$flag=0;
	$emailid= strip_tags($_POST['emailid']);
	if (!filter_var($emailid, FILTER_VALIDATE_EMAIL)) 
	{
		echo 2;

	}
	else
	{
		//$password= md5(strip_tags($_POST['password']));
		$password= (strip_tags($_POST['password']));

		$result=query("select * from c_users WHERE emailid='$emailid' and password='$password'");

		$num=mysqli_num_rows($result);

		if($num==1) 
		{
			$flag=1;
			$_SESSION['c_id']=$emailid;


			echo 1;

		}

		else
		{
						//echo '<h3 style="text-align:center;color:#666;">Email ID and Password Combination is incorrect. Please try again.</h3>';
						//echo '<h3 style="text-align:center;color:#666;">Password is incorrect <a href="resetpassword.php">Reset</a> in case you forget</h1></h3>';
			echo 0;
		}
	}
}









if(isset($_POST['action']) && $_POST['action'] == 'signup')

	{	$flag=0;

		$emailid= strip_tags($_POST['emailid']);

		$query = mysqli_query($connection, "SELECT emailid FROM c_users WHERE emailid='$emailid'");

		if(mysqli_num_rows($query))
		{

					//echo '<h2 style="text-align:center;">Email ID already registered.</h2>';
			echo 0;

			$flag=1;

		}

		$name= ucfirst(strip_tags($_POST['name']));

		$password=  (strip_tags($_POST['password']));

		$cpassword=  (strip_tags($_POST['cpassword']));

		if($password!=$cpassword && !$flag){

					//echo '<h2 style="text-align:center;">Passwords does not Match. Please try again.</h2>';
			echo 1;
			$flag=1;

		}

		if(!$flag && mysqli_query($connection, "INSERT INTO c_users(emailid,name,password,timestamp,ip) values('$emailid','$name' ,'$password','$time','$ip')"))
		{
			

			echo 3;
			$_SESSION['c_id']=$emailid;
			//$rand=random_string2(50);


			//$url="https://cashwaapas.com/verify.php?key=".$rand;

					//sending welcome email to newly signed up customer

					//$headers = "From: info@cashwaapas.com";

					//to be set later

					//$html_customer = "Hi $name,\n\nWelcome to India's biggest online cash saving platform! \n\nHard cash savings are just a click away at www.Cashwaapas.com Simply click through the links on our website to various leading e-commerce stores and get cash in your hands.\n\nWe get commissions for your Click-through and we share them with you. \n\nKeep adding money in you cashwaapas account and get a payout by any of your desired payment modes (mobile recharge, bank transfer, cheque, Shopping Vouchers) \n\nWe are slowly adding more stores so that we can provide Cashwaapas on most of your online purchases. So each time you plan to shop online, just check www.cashwaapas.com Just a Click can save you Rupees. \n\nWe are happy to be your service. \n\nKeep saving. \n\nRegards\nCashwaapas Team";

					//mail($emailid, "Welcome to CashWaapas", $html_customer, $headers);



					//sending welcome email to newly signed up customer
			//require_once('mail.php');
					//$headers = "care@cashwaapas.com";
					//$html_customer = "Hello and welcome<h3>$name</h3><br>Welcome to India's fastest growing online cash saving platform! <br><br>Hard cash savings are just a click away at <a href='www.Cashwaapas.com'>Cashwaapas.com</a> Simply click through the links on our website to various leading e-commerce stores and get cash in your hands.<br><br>We get commissions for your Click-through and we share them with you. <br><br>Keep adding money in you cashwaapas account and get a payout by any of your desired payment modes (mobile recharge, bank transfer, cheque, Shopping Vouchers) <br><br>We are slowly adding more stores so that we can provide Cashwaapas on most of your online purchases. So each time you plan to shop online, just check www.cashwaapas.com Just a Click can save you lots of bucks.<br> <br>Please visit this link to verify your account:<br>$url<br>We are happy to be at your service. <br><br>Keep saving. <br><br>Regards<br>Cashwaapas Team <br><br><br> For Support/Suggestions drop a mail at care@cashwaapas.com ";

					//mailman($emailid, "Welcome to CashWaapas!", $html_customer, $name,$headers,"Cashwaapas");
					//query("UPDATE users SET verify='$rand',verifys='2' where emailid='$emailid'");
		}

		else if(!$flag)
		{
			echo 2;
					//echo '<h2 style="text-align:center;">Something Went Wrong!<br>Couldn\'t register now. Please try again later.</h2>';

		}

	}

if(isset($_POST['action'])&& $_POST['action'] == 'change') 
				{
					$flag=0;
					$emailid = strip_tags($_POST['emailid']);

					$password=  (strip_tags($_POST['password']));

					$cpassword=  (strip_tags($_POST['cpassword']));
					
					$result=query("SELECT * FROM c_users WHERE emailid='$emailid'"); 
					
					if(mysqli_num_rows($result)==1)


					{

						
						

						 if($password!=$cpassword)
						{

							echo 0;

							$flag=1;
							//echo '2';

						}
						else if($flag==0)
						{

							$result=query("UPDATE c_users SET password='$cpassword' WHERE emailid='$emailid';");


							//echo '<h1 style="text-align:center;">Password is Successfully Updated visit<a href="profile.php"> Profile</a>.</h1>';
							echo 1;
						}
						
						else
						{
							echo 2;
						}


					}
					else
						echo 3;


					//else{echo '<h1 style="text-align:center;">Link expired.</h1>';}
					

				}

	?>