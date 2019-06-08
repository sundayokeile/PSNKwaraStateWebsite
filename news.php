<!--
Author: okeilesunday
-->
<?php
	require_once('db_connection.php');
	$sql = mysqli_query($db, "select * from tbl_bulletin"); 
	$total = mysqli_num_rows($sql);
	$adjacents = 3;
	$targetpage = "news.php"; //your file name
	$limit = 1; //how many items to show per page
	
	$page = ($_GET['page']); //before it was: $page = $_GET['pn'];
	if($page)
	{ 
		$start = ($page - 1) * $limit; //first item to display on this page
	}
	else
	{
		$start = 0;
	}
	/* Setup page vars for display. */
	if ($page == 0) $page = 1; //if no page var is given, default to 1.
		$prev = $page - 1; //previous page is current page - 1
		$next = $page + 1; //next page is current page + 1
		$lastpage = ceil($total/$limit); //lastpage.
		$lpm1 = $lastpage - 1; //last page minus 1
		$sql2 = "select * from tbl_bulletin where 1=1";
		$sql2 .= " order by id desc limit $start ,$limit ";
		$sql_query = mysqli_query($db, $sql2);
		/* CREATE THE PAGINATION */
		$pagination = ""; 
		$counter = 0; // added by me...
		if($lastpage > 1)
		{ 
			$pagination .= "<div class=text-center><ul class=pagination ert>";
			if ($page > $counter+1) {
				$pagination.= "<li><a href=\"$targetpage?page=$prev\">PREV</a></li>"; 
		}
		if ($lastpage < 7 + ($adjacents * 2)) 
		{ 
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<li><a href='#' class='active'>$counter</a></li>";
				else
					$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>"; 
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2)) //enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2)) 
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li><a href='#' class='active'>$counter</a></li>";
					else
						$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>"; 
				}
				$pagination.= "<li>...</li>";
				$pagination.= "<li><a href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
				$pagination.= "<li><a href=\"$targetpage?page=$lastpage\">$lastpage</a></li>"; 
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<li><a href=\"$targetpage?page=1\">1</a></li>";
				$pagination.= "<li><a href=\"$targetpage?page=2\">2</a></li>";
				$pagination.= "<li>...</li>";
		
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li><a href='#' class='active'>$counter</a></li>";
				else
					$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>"; 
				}
				$pagination.= "<li>...</li>";
				$pagination.= "<li><a href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
				$pagination.= "<li><a href=\"$targetpage?page=$lastpage\">$lastpage</a></li>"; 
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<li><a href=\"$targetpage?page=1\">1</a></li>";
				$pagination.= "<li><a href=\"$targetpage?page=2\">2</a></li>";
				$pagination.= "<li>...</li>";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; 
				$counter++)
				{
					if ($counter == $page)
						$pagination.= "<li><a href='#' class='active'>$counter</a></li>";
					else
						$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>"; 
				}
			}
		}
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<li><a href=\"$targetpage?page=$next\">NEXT</a></li>";
		else
			$pagination.= "";
			$pagination.= "</ul></div>\n"; 
		}
?>
<!DOCTYPE html>
<html>
<head>
<title>PSN KWARA | Bulletin</title>
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}
(document, 'script', 'facebook-jssdk'));
</script>
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

						<!-- Collect the nav links, forms, and other content for toggling -->
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
<!-- news -->
	<div class="news">
		<div class="container">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Bulletins</li>
            </ol>
            <div class="news-left">
            <?php
                //while( $row = mysqli_fetch_array( $sql_query) )
                while( $row = $sql_query->fetch_assoc() )
                {
                    $show_img = $row['img_news'];
                    echo'
                        <div class="news-left-l">
                            <h3>'.$row['headline'].'</h3>';
                    echo"
                            <img src='$show_img' class='img-responsive' alt='' />";
                    echo'
                            <p>'.$row['content'].'
                            '.$row['date'].' | Post By: '.$row['postby'].'</p>
                            <a href="#" class="read hvr-rectangle-in">Share</a>
                        </div>';
                }
            ?>
			<?php echo $pagination ;?>
            </div>
        <div class="news-right">
			<h3>Recent Editorial</h3>
			<div class="news-right-text">
					<img src="images/7.jpg" class="img-responsive" alt=" " />
					<p><label><a href="addiction.php">ADDICTION</a></label></p>
			</div>
			<div class="news-right-text">
					<img src="images/10.jpg" class="img-responsive" alt=" " />
					<p><label><a href="alzheimer-disease.php">ALZHEIMER-DISEASE</a></label></p>
			</div>
            <div class="news-right-text">
					<img src="images/10.jpg" class="img-responsive" alt=" " />
					<p><label><a href="anxiety-disorder.php">ANXIETY-DISORDER</a></label></p>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //news -->
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