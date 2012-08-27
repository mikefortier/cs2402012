<!DOCTYPE html> 
<html>
<head>
<title>Random Ingredients - View</title>

<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="mobile.css" />
<script type="text/javascript" src="validation.js"></script>
<script type="text/javascript" src="utility.js"></script>

<?php
	function loadRecipeOrMeal(){
		//check whether user is attempting to view a recipe or a meal
		//then load specified recipe or meal from database
		};
		
	function getRecipeOrMealTitle(){
		//return the title of the specified recipe or meal
		};
?>

<!--
	When inputing data for specified recipe or meal,
	format to replace innerHTML of appropriate elements.
-->

</head>
<body onload="loader()" >

<div id="wrapper" class="fontMain">
	<!-- Header Start -->
	<div id="header" >
		<a href="homeScreen.php" class="imgLink" ><img id="headerLogo" class="dropShadow" alt="Random Ingredients Logo" src="images/logo.png" /></a>
		<div id="headerTitle" class="fontHeaderTitle">
			
		</div>
	</div>
	<!-- Header End -->
	
	<!-- Content Start -->
	<div id="content" >
		<div id="recHeader" >
			<div id="recPic" class="dropShadow">
				<img alt="Photo of the recipe" src="" />
			</div>
			<div id="recDescription" >
				<div id="recTimes" >
					<div id="recTimesTitle" >
						<span class="fontSubTitle2" >
							<br />
							<?php getRecipeOrMealTitle(); ?>
						</span>
					</div>
					<div id="recUnitOfMeasure" >
						<br />
						<input type="radio" id="recUoMUS" />
						<label for="recUoMUS" >US</label>
						<br />
						<input type="radio" id="recUoMMetric" />
						<label for="recUoMMetric" >Metric</label>
					</div>
				</div>
				<div class="hrLight" ></div>
				<div id="recDescText" >
					Description of the recipe goes here.
				</div>
			</div>
		</div>

		<div class="hrLight" ></div>
		<div id="ingredients" >
			<div id="ingrLeftPanel" >
				<span id="ingrTitle" class="fontSubTitle" >Ingredients:</span>
				<div id="ingrList" >
					Ingredients and measurements for the recipe are listed here
				</div>
				<br />
			</div>
			<div id="recServings" >
				<div id="recServVr1" class="vrLight" ></div>
				<div id="recTimesLeft" >
					<span class="fontSubTitle" >Prep Time:</span><br />
					<span id="recPrepTime" ># Mins</span>
				</div>
				<div id="recTimesVr2" class="vrLight" ></div>
				<div id="recTimesRight" >
					<span class="fontSubTitle" >Cook Time:</span><br />
					<span id="recCookTime" ># Mins</span>
				</div>
				<div id="recTimesVr3" class="vrLight" ></div>
				<div id="recNumServWrapper" >
					<span class="fontSubTitle" >Servings:</span><br />
					<span id="recNumServ" >#</span>
				</div>
				<div id="recServVr2" class="vrLight" ></div>
				<div id="recServSizeWrapper" >
					<span class="fontSubTitle" >Serving Size:</span><br />
					<span id="recServSize" >#</span>
				</div>
				<div id="recServVr3" class="vrLight" ></div>
			</div>
		</div>
		<div class="hrLight" ></div>
		<div id="directions" >
			<span class="fontSubTitle" >Directions:</span>
			<br />
			<div id="recDirText" >
				Directions for the recipe go here.
			</div>
		</div>
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