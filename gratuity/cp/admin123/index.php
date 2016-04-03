<html>
<head>
	<title>Gratuity.IN Admin</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	
	
	<link rel="stylesheet" href="../css/boot/bootstrap.min.css" />
	
	<link rel="stylesheet" href="../css/style.css" />

	<?php   

	include("../../includes/config.php");
	if(!isset($_SESSION['csw_admin']) || $_SESSION['csw_admin']!='naman_csw'){

		redirect("login.php");

	}


	?>


	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>
<body>

	<!-- Header -->


	<!-- Main -->
	
		<div class="container">
		<div class="row">



			<?php

				//$connection = mysqli_connect("localhost","makeruw5_cwaapas","CashWaapas987@","makeruw5_cashwaapas");

			$query = mysqli_query($connection, "SELECT id FROM c_users");

			$total_users = mysqli_num_rows($query);

			?>

			<h1 style="text-align:center;">Total Users - <?php echo $total_users;?></h1>

			<hr>

			<h2 style="text-align:center">Gratuity.IN Admin Dashboard</h2><br><h3 style="text-align:center"> <a href="index.php" title="Refresh the dashboard"><<< Refresh >>></a><br></h3>

			

			
			<table class="table table-hover table-bordered">

				<thead><tr>

					<th>#</th>

					<th>Name</th>

					<th>Gender</th>

					<th>Phone</th>

					<th>State</th>

					<th>City</th>

					<th>Reason</th>
					<th>Aadhar No.</th>
			
					
					<th>Age</th>

					
					<th>Status</th>

					<th>Approve</th>

				</tr></thead>

				<?php

				$query = mysqli_query($connection, "SELECT * FROM c_userdata ORDER BY id DESC");
				$rx=query("SELECT * From help where verifyd='3' ORDER BY id DESC");

	//$r = mysqli_fetch_array($query);

				$count=1;
					echo '<tbody>';
				while(	$rowd=mysqli_fetch_array($rx)AND$r = mysqli_fetch_array($query)){

					echo '<tr>';

					echo '<td>'.$count++.'</td>';

					echo '<td>'.$r['fname'].' '. $r['lname'].'</td>';

					echo '<td>'.$r['gender'].'</td>';

					echo '<td>'.$r['phone'].'</td>';

					echo '<td>'.$r['state'].'</td>';

					echo '<td>'.$r['city'].'</td>';
					echo '<td>'.$r['edu'].'</td>';
					echo '<td>'.$r['clg'].'</td>';
			
					echo '<td>'.$r['age'].'</td>';
					

					if(isset($_POST['approve']) && $rowd['id']==$_POST['id']){



						echo '<td class="success">Approved</td>';

					}

					else if(isset($_POST['disapprove']) && $rowd['id']==$_POST['id']){

						

						echo '<td class="danger">Rejected</td>';

					}

					else{

							//echo '<td>'.$r['cashwaapas'].'</td>';

						if($rowd['verifyd']==1)

							echo '<td class="success">Approved</td>';

						else if($rowd['verifyd']==-1)

							echo '<td class="danger">Rejected</td>';

						else

							echo '<td>Pending</td>';

					}



					echo '<td><form action="" method="POST">

					<input type="hidden" name="id" value="'.$rowd['id'].'">





					<button class="btn btn-primary"type="submit" name="approve">Approve</button>

					<button class="btn btn-danger" type="submit" name="disapprove">Reject</button>

					</form></td>';

					echo '</tr>';

				}

				?>
				</tbody>
			</table>

		
</div>
	</div>

	<?php

	if(isset($_POST['approve'])){

		$sid = $_POST['id'];

		

		mysqli_query($connection, "UPDATE help SET verifyd=1 WHERE id='$sid'");

	}

	else if(isset($_POST['disapprove'])){

		$sid = $_POST['id'];


		mysqli_query($connection, "UPDATE help SET verifyd=	-1 WHERE id='$sid'");

	}

	?>

</body>
