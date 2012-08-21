<!DOCTYPE html> 
<html>
<head>
<title>Random Ingredients - Home</title>

<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="mobile.css" />
<script type="text/javascript" src="validation.js"></script>
<script type="text/javascript" src="utility.js"></script>

<?php
	function getUsername(){
		//returns String
		};
?>

<!--
	Sign Out link needs destination
-->

</head>
<body onload="loader()" >

<div id="wrapper" class="fontMain">
	<!-- Header Start -->
	<div id="header" >
		<img id="headerLogo" class="dropShadow" alt="Random Ingredients Logo" src="images/logo.png" />
		<div id="headerTitle" class="fontHeaderTitle">
			<br />
			Hello Chef <?php getUsername() ?>
		</div>
	</div>
	<!-- Header End -->
	
	<!-- Content Start -->
	<div id="content" >
		<div id="contentNews" class="dropShadow softGradient" >
			<span class="fontSubTitle" >Recent News</span>
			<div class="hrDark" ></div>
			<?php include 'recentNews.php'; ?>
		</div>
		<div id="homeScreenContentRightPanel" >
			<form action="rmList.php" name="homeScreenSelection" >
				<input type="submit" id="homeScreenRecipesButton" class="button dropShadow" value="Recipes" /><br />
				<input type="submit" id="homeScreenMealsButton" class="button dropShadow" value="Meals" />
			</form>
		</div>
	</div>
	<!-- Content End -->
	
	<!-- Footer Start -->
	<div id="footer" >
		<a href="#" > Sign Out</a>
		&nbsp;|&nbsp;
		<a href="accountSettings.php" >Account Settings</a>
	</div>
	<!-- Footer End -->
</div>

<script type="text/javascript" src="registry.js"></script>
</body>
</html>