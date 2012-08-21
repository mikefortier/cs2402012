<!DOCTYPE html> 
<html>
<head>
<title>Random Ingredients - Welcome Chefs</title>

<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="mobile.css" />
<script type="text/javascript" src="validation.js"></script>
<script type="text/javascript" src="utility.js"></script>

<!--
	loginForm action needs destination
-->

</head>
<body onload="loader()" >

<div id="wrapper" class="fontMain">
	<!-- Header Start -->
	<div id="header" >
		<img id="headerLogo" class="dropShadow" alt="Random Ingredients Logo" src="images/logo.png" />
		<div id="headerTitle" class="fontHeaderTitle">
			<br />
			Welcome Chefs
		</div>
	</div>
	<!-- Header End -->
	
	<!-- Welcome/Login Content Start -->
	<div id="content" >
		<div id="contentNews" class="dropShadow softGradient" >
			<span class="fontSubTitle" >Recent News</span>
			<div class="hrDark" ></div>
			<?php include 'recentNews.php'; ?>
		</div>
		<div id="contentRightPanel" >
			<form name="loginForm" action="#" method="post" >
				<div id="welcomeContentLoginInputs" class="fontSubTitle" >
					<label>Username:<br />
					<input type="text" name="username" id="welcomeContentLoginUsername" class="dropShadow" size="30" maxlength="30" /></label><br />
					<br />
					<label>Password:<br />
					<input type="password" name="password" id="welcomeContentLoginPassword" class="dropShadow" size="30" maxlength="30" /></label><br />
					<br />
				</div>
				<div id="welcomeContentLoginSubmit" >
					<input type="submit" value="Log In" name="login" id="welcomeContentLoginButton" class="dropShadow button" /><br />
					<a class="fontSmall" href="createLogin.php" >New User?</a>
				</div>
			</form>
		</div>
	</div>
	<!-- Welcome/Login Content End -->
	
	<!-- Footer Start -->
	<div id="footer" >
		&nbsp;
	</div>
	<!-- Footer End -->
</div>

<script type="text/javascript" src="registry.js"></script>
</body>
</html>