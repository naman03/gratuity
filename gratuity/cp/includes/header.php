<!-- Header -->


	<div id="header" class="skel-layers-fixed">

		<div class="top">

			<!-- Logo -->
			<div id="logo">
				<!--<span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>-->
				<?php	echo '<h1 id="title"><a href="http://c.gratuity.in">'.$rowu['name'].'</a></h1>'?>
				<p><a href="https://gratuity.in">gratuity.in</a></p>
			</div>

			<!-- Nav -->
			<nav id="nav">
							<!--
							
								Prologue's nav expects links in one of two formats:
								
								1. Hash link (scrolls to a different section within the page)
								
								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>
							
								-->
								<ul>
									<li><a href="index"    ><span class="icon fa-home">Home</span></a></li>
									

									<?php
									if(isset($_SESSION['c_id'])){
										if($rowf['verifyf']==1)
										{
										echo '<li><a href="manage"><span class="icon fa-calendar">Manage</span></a></li>';
										}
										echo '<li><a href="profile"><span class="icon fa-pencil">Profile</span></a></li>';
										echo '
										<li><a href="index#about"  ><span class="icon fa-user">About Us</span></a></li>
									<li><a href="index#contact"><span class="icon fa-envelope">Contact Us</span></a></li>
									<li><a href="logout"  ><span class="icon fa-power-off">Log Out</span></a></li>';
									}
									else{
										echo '<li><a href="#loginz"  ><span class="icon fa-power-off">Login</span></a></li>
										<li><a href="index#about"  ><span class="icon fa-user">About Us</span></a></li>
									<li><a href="index#contact"><span class="icon fa-envelope">Contact Us</span></a></li>
									';

									}?>

										
									
								</ul>
							</nav>

						</div>

						<div class="bottom">

							<!-- Social Icons -->
							<ul class="icons">
								<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.facebook.com/gratuity" target="_blank"class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
								<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
								<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
							</ul>

						</div>

					</div>