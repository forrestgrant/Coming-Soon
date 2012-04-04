<?php include('includes/config.php'); ?>
<!DOCTYPE html>
<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=420" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<title><?php echo $conf['app_name']; ?> | Coming Soon</title>
		
	<link rel="stylesheet" type="text/css" href="/stylesheets/styles.css" media="all" />
	<link rel="stylesheet" type="text/css" href="/stylesheets/styles-small.css" media="screen and (max-width:450px)" />
	<link href='http://fonts.googleapis.com/css?family=Asap' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script type="text/javascript" src="/javascripts/application.js"></script>

<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="/stylesheets/ie.css" media="all" />
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>

<section id="coming-soon">
	<h1><?php echo $conf['app_name']; ?></h1>
	<p class="welcome">Sign-up to be notified of our launch.</p>
	<form id="signup" action="/signup.php" method="post" target="popupwindow">
		<input class="required email" id="email" type="email" name="email" value="E-mail" onfocus="if (this.value == 'E-mail') {this.value = '';}" onblur="if (this.value == '') {this.value = 'E-mail';}" autocapitalize="off" autocorrect="off" />
		<input class="submit" id="submit" type="submit" name="submit" value="Submit" />
		<img src="/images/ajax-loader.gif" id="spinner" alt="Spinner" style="display:none;" />
	</form>

</section>

<footer>
	<p>Copyright &copy; <?php echo date('Y'); ?> <?php echo $conf['app_name']; ?>.</p>
</footer>

<script type="text/javascript">$(document).ready(function(){ Application.init(); });</script>

</body>
</html>