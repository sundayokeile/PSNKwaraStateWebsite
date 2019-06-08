<?php
	require_once('db_connection.php');
?>
<!--
Author: okeilesunday
-->
<!DOCTYPE html>
<html>
<head>
<title>PSN KWARA | Registration</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="PSN Nigeria, pharmaceutical society of nigeria, pharmacy, pharmacist, pharmacy in nigeria, PSN, drug, news on drugs, publications about drugs, suntosolutions, " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-nav">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <a href="index.php">
                              <img src="images/psn.jpg"/>
                              <span style="font-size:20px;color:#CC3">PSN</span>
                          </a>
						  <!--a class="navbar-brand" href="index.html"><span>P</span>roperty</a-->
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						 <ul class="nav navbar-nav">
							<li class="act"><a href="index.php">Home</a></li>
							<!-- <li class="act"><a href="about.html">About</a></li> -->
							<li class="dropdown act">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="aim.php">Aim & Objectives</a></li>
								<li><a href="coe.php">Code of Ethics</a></li>
								<!--<li><a href="exco.php">PSN Kwara Exco</a></li>-->
							  </ul>
							</li>
							<li class="dropdown active">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Membership <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="pro.php">Procedure</a></li>
								<!--<li><a href="#">Registration</a></li>-->
							  </ul>
							</li>
							<li class="act"><a href="gallery.php">Gallery</a></li>
							<li class="act"><a href="contact.php">Contact Us</a></li>
							<li class="act"><a href="login.php">Login</a></li>
						  </ul>
						</div><!-- /.navbar-collapse -->
					</nav>
			</div>
			<!-- search-scripts -->
			<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
				<script>
					new UISearch( document.getElementById( 'sb-search' ) );
				</script>
			<!-- //search-scripts -->
			<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
			<!-- //script for menu -->
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- contact -->
	<!--php script begins-->
	<?php
		// define variables and set to empty values
			$title = $surname = $firstname = $lastname = $pcnregno = $phoneno = $homeaddress = $officeaddress = $username = $password = "";
		function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		if(isset($_POST['submit']))
		{
			$title = test_input($_POST["title"]);
			$surname = test_input($_POST["surname"]);
			$firstname = test_input($_POST["firstname"]);
			$lastname = test_input($_POST["lastname"]);
			$pcnregno = test_input($_POST["pcnregno"]);
			$phoneno = test_input($_POST["phoneno"]);
			$homeaddress = test_input($_POST["homeaddress"]);
			$officeaddress = test_input($_POST["officeaddress"]);
			$username = test_input($_POST["username"]);
			$password = test_input($_POST["password"]);
			
			$sex = "nil";
			$dateofbirth = "nil";
			$maritalstatus = "nil";
			$wedanni = "nil";
			$alternateno = "nil";
			$email = "nil";
			$technicalgroup = "nil";
			$interestgroup = "nil";
			$schoolattended = "nil";
			$yearofgraduation = "nil";
			$compare = mysqli_query($db, "SELECT username, pcnregno FROM tbl_member WHERE username = '$username' OR pcnregno = '$pcnregno'");
			if ($row = $compare->fetch_assoc())
			{
				$msg =  "Member Already Exist!, Kindly proceed <a href='login.php' class='read hvr-rectangle-in'>LOGIN</a>";
			}
			else// if record not found, insert new record...
			{
				if (!preg_match("/^[a-zA-Z ]*$/",$title))
				{
					$msg = "Oops!, somethong went wrong : TITLE";
				}
				elseif (!preg_match("/^[a-zA-Z ]*$/",$surname))
				{
					$msg = "Oops!, somethong went wrong : SURNAME";
				}
				elseif (!preg_match("/^[a-zA-Z ]*$/",$firstname))
				{
					$msg = "Oops!, somethong went wrong: FIRSTNAME";
				}
				elseif (!preg_match("/^[a-zA-Z ]*$/",$lastname))
				{
					$msg = "Oops!, somethong went wrong: LASTNAME";
				}
				elseif (preg_match("/^[a-zA-Z ]*$/",$pcnregno))
				{
					$msg = "Oops!, somethong went wrong: PCNREGNO";
				}
				elseif (preg_match("/^[a-zA-Z ]*$/",$phoneno))
				{
					$msg = "Oops!, somethong went wrong: PHONE NO";
				}
				else
				{ // kindly insert if all is cool..
				
					$insert = "INSERT INTO tbl_member VALUES('$title', '$surname', '$firstname', '$lastname', '$sex', '$dateofbirth', '$maritalstatus', '$wedanni', '$homeaddress', '$officeaddress', '$phoneno', '$alternateno', '$email', '$technicalgroup', '$interestgroup', '$pcnregno', '$schoolattended', '$yearofgraduation', '$username', '$password')";
					if($db->query($insert) === TRUE)
					{
						$msg = "New Record Created!, Kindly proceed <a href='login.php' class='read hvr-rectangle-in'>LOGIN</a>";
					}
					else
					{
						$msg =  "Error: " . $insert . "<br>" . $db->error;
					}
				}
				$db->close();
			}
		}
	?>
    <!--php script end-->
	<div class="contact">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="index.html">Membership</a></li>
				<li>Registration</li>
			</ol>
	<div class="contact-form">
		<h3>Become a PSN KWARA Chapter Member...</h3>
		<?php 
			if(isset($_POST['submit']))
            {
                echo "<div class='alert alert-success' role='alert'>
						$msg
					</div>";
        	}
        ?>	
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
			<form-group>
				<input type="text" name="title" placeholder="Title" required />
				<input type="text" name="surname" placeholder="Surname" required />
				<input type="text" name="firstname" placeholder="Firstname" required />
			</form-group>
			<form-group>
				<input type="text" name="lastname" placeholder="Lastname" required />
				<input type="text" name="pcnregno" placeholder="PCN Reg.No" required />
				<input type="text" name="phoneno"placeholder="Phone No" required /> 
			</form-group>
			<div class="clearfix"> </div>
			<textarea name="homeaddress" placeholder="Home Address" required></textarea>
			<textarea name="officeaddress" placeholder="Office Address" required></textarea>
			<form-group>
				<input type="text" name="username" placeholder="Username" required /> 
				<input type="text" name="password" placeholder="Password" required />
			</form-group>
			<!--button type="submit" name="submit" class="btn btn-danger">send</button
            </form-group-->
			<input type="submit" name="submit" value="SUBMIT">
            

		</form>
		</div>
		</div>
	</div>
<!-- //contact -->	
<!-- footer -->
	<div class="footer">
    	<!--div class="footer-icons">
			<ul>
				<li><a href="#" class="g"></a></li>
				<li><a href="#" class="in"></a></li>
				<li><a href="#" class="twitter"></a></li>
				<li><a href="#" class="u-tube"></a></li>
				<li><a href="#" class="be"></a></li>
				<li><a href="#" class="facebook"></a></li>
			</ul>
		</div-->
		
		<div class="container"> 
			<div class="footer-info">
				<div class="footer-info-left">
					<?php date_default_timezone_set("Africa/Lagos"); ?>
<p>Copyright © <?php echo date('Y'); ?>. All Rights Reserved | PSN KWARA STATE</p>
				</div>
				<div class="footer-info-right">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="login.php">Login</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
	<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
	<!-- //for bootstrap working -->
</body>
</html>