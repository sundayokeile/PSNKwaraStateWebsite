<!--
Author: okeilesunday
-->
<?php 
	require_once('db_connection.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>PSN KWARA | Login</title>
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
						</div>
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						 <ul class="nav navbar-nav">
							<li class="act"><a href="index.php">Home</a></li>
							<li class="dropdown act">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="aim.php">Aim & Objectives</a></li>
								<li><a href="coe.php">Code of Ethics</a></li>
							  </ul>
							</li>
							<li class="dropdown act">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Membership <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="pro.php">Procedure</a></li>
							  </ul>
							</li>
							<li class="act"><a href="gallery.php">Gallery</a></li>
							<li class="act"><a href="contact.php">Contact Us</a></li>
							<li class="active"><a href="#">Login</a></li>
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
	<div class="contact">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li>Login</li>
			</ol>
            <div class="contact-form">
                <div class="paragraph">
                    <h3>Notice</h3>
                    <p> Only registered members of the Pharmaceutical Society of Nigeria,
                     Kwara State Chapter are eligible to use this page.
                      New members can register by browsing the links 
                    provided on this platform.</p>
                </div>
                <h3>Member Login...</h3>
                <!--php login script -->
				<?php
					// define variables and set to empty values
					$username = $password = "";
					function test_input($data)
					{
						$data = trim($data);
						$data = stripslashes($data);
						$data = htmlspecialchars($data);
						return $data;
					}
                    if(isset($_POST['login'])!= "")
                    {
                        $username = test_input($_POST["username"]);
                        $password = test_input($_POST['password']);
						//member login...  
                        $member = "SELECT username, password FROM tbl_member WHERE username = '$username' AND password = '$password'";
						$member = $db->query($member);
                        $row = $member->fetch_assoc();
                        $count = $member->num_rows;
						//admin login...
						$admin = "SELECT username, password FROM tbl_admin WHERE username = '$username' AND password = '$password'";
                        $admin = $db->query($admin);
                        $rowy = $admin->fetch_assoc();
                        $county = $admin->num_rows;
						if($count == 1)
                        {
							$_SESSION['orukonaa'] = $username;
							$msg = '<div class="alert alert-success" role="alert">
                           				Access confirmation in progress, please wait...
									</div>
                                	<meta http-equiv="refresh" content="3;url=user/my_member.php">';
						}
						elseif($county == 1)
                        {
							$_SESSION['orukonla'] = $username;
							$msg = '<div class="alert alert-success" role="alert">
                           				Access confirmation in progress, please wait...
									</div>
                                	<meta http-equiv="refresh" content="3;url=user/dir_member.php">';
						}
						else
						{
							$msg = '<div class="alert alert-success" role="alert">
                           				Login Failed, please try again...
									</div>';
						}
					}
                ?>
                <?php 
					if(isset($_POST['login']))
					{
						echo $msg;
					}
				?>
                <!--php login script ends -->
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="text" name="password" placeholder="Password" required>
                    <input type="submit" name="login" value="LOGIN">
                </form>
            </div>
		</div>
        <div class="clearfix"></div>
	</div>
<!-- //contact -->	
<!-- footer -->
	<div class="footer">
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
						<li><a href="#">Login</a></li>
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