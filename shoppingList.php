<!DOCTYPE html> 
<html>
<head>
<title>Random Ingredients - Shopping List</title>

<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="mobile.css" />
<script type="text/javascript" src="validation.js"></script>
<script type="text/javascript" src="utility.js"></script>

<?php
	function loadShoppingList(){
		// pull list of ingredients from database, then input into
		// innerHTML of div with id='insertIngrListHere' using format:
		// [input textbox for quantity] [name of ingredient] [[x] button to remove ingredient]
		};
		
	function getRecipeOrMealTitle(){
		//return the title of the specified recipe or meal
		};
?>

<!--
	When inputing data for specified recipe or meal,
	format to replace innerHTML of appropriate elements.
	
	Need to format .css for printer friendly printout
-->

</head>
<body onload="loader()" >

<div id="wrapper" class="fontMain">
	<!-- Header Start -->
	<div id="header" >
		<a href="homeScreen.php" class="imgLink" ><img id="headerLogo" class="dropShadow" alt="Random Ingredients Logo" src="images/logo.png" /></a>
		<div id="headerTitle" class="fontHeaderTitle">
			Shopping List
		</div>
	</div>
	<!-- Header End -->
	
	<!-- Content Start -->
	<div id="content" >
		<span class="fontSubTitle2" ><?php getRecipeOrMealTitle() ?></span>
		<div class="hrLight" ></div>
		<div id="insertIngrListHere"></div>
	</div>
	<!-- Content End -->
	
	<!-- Footer Start -->
	<div id="footer" >
		<input type="button" class="button dropShadow" value="Back" />
	</div>
	<!-- Footer End -->
</div>

<script type="text/javascript" src="registry.js"></script>
</body>
</html>