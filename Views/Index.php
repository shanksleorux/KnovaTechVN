<?php
if (isset($_SESSION['is_language'])) {
  require("lang/vi.php");
}else {
  require("lang/en.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>KnovaTech</title>

    <!-- Bootstrap -->
  <link href="<?php echo ROOT_URL; ?>/Assets/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo ROOT_URL; ?>/Assets/css/animate.css">
	<link href="<?php echo ROOT_URL; ?>/Assets/css/animate.min.css" rel="stylesheet">
	<link href="<?php echo ROOT_URL; ?>/Assets/css/style.css" rel="stylesheet" />
  <link rel="shortcut icon" type="image/png" href="<?php echo ROOT_URL; ?>/Assets/images/core-img/Knovatech_logo.png"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<header id="header">
        <nav class="navbar navbar-default navbar-static-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <div class="navbar-brand">
						<a href="<?php echo ROOT_URL ?>"><img src="<?php echo ROOT_URL; ?>/Assets/images/core-img/Knovatech_logo.png" alt="KnovaTech" height="64" width="62" style="margin-top: -10px;"></a>
					</div>
                </div>
                <div class="navbar-collapse collapse">
					<div class="menu">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation"><a href="<?php echo ROOT_URL; ?>"><?php echo $menuHome; ?></a></li>
							<li>
                <a class="dropbtn" data-toggle="dropdown" href="" onclick="myFunction()"><?php echo $menuSolution; ?><span class="caret"></span></a>
                  <ul class="dropdown-menu" id="myDropdown" role="menu" aria-labelledby="dropdownMenu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo ROOT_URL.'Solution/Enterprise' ; ?>"><?php echo $menuSolutionEnterprise; ?></a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo ROOT_URL.'Solution/API' ; ?>"><?php echo $menuSolutionAPI; ?></a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo ROOT_URL.'Solution/Testing' ; ?>"><?php echo $menuSolutionTesting; ?></a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo ROOT_URL.'Solution/SystemIntegration' ; ?>"><?php echo $menuSolutionSI; ?></a></li>
                  </ul>
              </li>
							<li role="presentation"><a href="<?php echo ROOT_URL.'About/'; ?>"><?php echo $menuAbout; ?></a></li>
							<li role="presentation"><a href="<?php echo ROOT_URL.'NewsEvents/'; ?>"><?php echo $menuNew; ?></a></li>
							<li role="presentation"><a href="<?php echo ROOT_URL.'Contact/'; ?>"><?php echo $menuContact; ?></a></li>
              <li>
                <a class="dropbtn1" data-toggle="dropdown" href="" onclick="myFunction1()"><?php echo $menuLang; ?><span class="caret"></span></a>
                  <ul class="dropdown-menu" id="myDropdown1" role="menu" aria-labelledby="dropdownMenu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo ROOT_URL.'language/Vi' ; ?>">Tiếng Việt</a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo ROOT_URL.'language/En' ; ?>">English</a></li>
                  </ul>
              </li>
						</ul>
					</div>
				</div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
    <?php require($view); ?>

    <footer>
		<div class="container">
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<h4><?php echo $FooterContact; ?></h4>
				<p> <h2><?php echo $FooterComName; ?></h2></p>
				<div class="contact-info">
					<ul>
						<li><i class="fa fa-home fa"></i> <?php echo $FooterAdd; ?></li>
						<li><i class="fa fa-phone fa"></i> <?php echo $FooterPhone; ?></li>
						<li><i class="fa fa-envelope fa"></i> <?php echo $FooterEmail; ?></li>
					</ul>
				</div>
			</div>

			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
				<div class="">
					<h4><?php echo $FooterNewLetter; ?></h4>
					<p><?php echo $FooterNewLetterDes; ?></p>
					<div class="btn-gamp">
						<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter Email">
					</div>
					<div class="btn-gamp">
						<a type="submit" class="btn btn-default"><?php echo $FooterNewLetterBtn; ?></a>
					</div>

			</div>

		</div>
	</footer>

	<div class="sub-footer">
		<div class="container">
			<div class="social-icon">
				<div class="col-md-4">
					<ul class="social-network">
						<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-4 col-md-offset-4">
				<div class="copyright">
					&copy; 2018 KnovaTech <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates"></a>.All Rights Reserved.
				</div>
                <!--
                    All links in the footer should remain intact.
                    Licenseing information is available at: http://bootstraptaste.com/license/
                    You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Day
                -->
			</div>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo ROOT_URL; ?>/Assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo ROOT_URL; ?>/Assets/js/bootstrap.min.js"></script>
	<script src="<?php echo ROOT_URL; ?>/Assets/js/wow.min.js"></script>
	<script>
	wow = new WOW(
	 {

		}	)
		.init();
	</script>

  <script type="text/javascript">
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

  // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {

        var dropdowns = document.getElementsByClassName("dropdown-menu");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  </script>
  <script type="text/javascript">
    function myFunction1() {
      document.getElementById("myDropdown1").classList.toggle("show");
    }
  </script>
  </body>
</html>
