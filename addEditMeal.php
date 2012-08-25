<!DOCTYPE html> 
<html>
<head>
<title>Random Ingredients - Meal</title>

<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="mobile.css" />
<script type="text/javascript" src="validation.js"></script>
<script type="text/javascript" src="utility.js"></script>

<?php
	function getAddEditMealTitle(){
		//check whether user is creating or editing an account
		//return String, either "Create" or "Edit"
		};
		
	function loadAddOrEdit(){
		//check whether user is creating or editing an account
		//if creating, then load form with empty inputs
		//if editing, then pull user info, autofill inputs, and unhide #delMeal
		};
?>

<!--
	form action needs destination
-->

</head>
<body onload="loader()" >

<div id="wrapper" class="fontMain">
	<!-- Header Start -->
	<div id="header" >
		<a href="homeScreen.php" class="imgLink" ><img id="headerLogo" class="dropShadow" alt="Random Ingredients Logo" src="images/logo.png" /></a>
		<div id="headerTitle" class="fontHeaderTitle">
			<br />
			<?php getAddEditMealTitle(); ?>&nbsp;Meal
		</div>
	</div>
	<!-- Header End -->
	
	<form action="#" name="mealInfo" >
		<!-- Content Start -->
		<div id="content" >
			<div id="mealInfoLeft" class="dropShadow softGradient" >
			
			</div>
			<div id="mealInfoMiddle" >
				<input type="button" class="button dropShadow" value="View" /><br />
				<br />
				<input type="button" class="button dropShadow" value="Add >>" /><br />
				<br />
				<input type="button" class="button dropShadow" value="<< Remove" />
			</div>
			<div id="mealInfoRight" class="dropShadow softGradient" >
			
			</div>
		</div>
		<!-- Content End -->
		
		<!-- Footer Start -->
		<div id="footer" >
			<div id="footerLeft" >
				<a href="#" id="delLink" >Delete Meal</a>
			</div>
			<input type="submit" class="button dropShadow" value="Save Meal" />&nbsp;
			<input type="button" class="button dropShadow" value="Reset" />&nbsp;
			<input type="button" class="button dropShadow" value="Cancel" />
		</div>
		<!-- Footer End -->
	</form>
</div>

<script type="text/javascript" src="registry.js"></script>
</body>
</html>