<!DOCTYPE html> 
<html>
<head>
<title>Random Ingredients - Recipe</title>

<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="mobile.css" />
<script type="text/javascript" src="validation.js"></script>
<script type="text/javascript" src="utility.js"></script>

<?php
	function getAddEditRecipeTitle(){
		//check whether user is creating or editing an account
		//return String, either "Create" or "Edit"
		};
		
	function loadAddOrEdit(){
		//check whether user is creating or editing an account
		//if creating, then load form with empty inputs
		//if editing, then pull user info, autofill inputs, and unhide #delRecipe
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
			<?php getAddEditRecipeTitle(); ?>&nbsp;Recipe
		</div>
	</div>
	<!-- Header End -->
	
	<form action="#" name="recForm" >
		<!-- Content Start -->
		<div id="content" >
			<div id="recHeader" >
				<div id="recPic" class="dropShadow">
					<img alt="Photo of the recipe" src="" />
				</div>
				<div id="recDescription" >
					<div id="recTimes" >
						<div id="recTimesTitle" >
							<label for="recName" class="fontSubTitle" >Name of Recipe:</label><br />
							<input type="text" id="recName" class="dropShadow" size="75" maxlength="100" />
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
					<textarea id="recDescText" class="softGradient" cols="65" rows="7" placeholder="Description of the recipe goes here." ></textarea>
				</div>
			</div>

			<div class="hrLight" ></div>
			<div id="ingredients" >
				<div id="ingrLeftPanel" >
					<span id="ingrTitle" class="fontSubTitle" >Ingredients:</span>
					<div>
						<input type='text' id='txtIngrName1' class='txtIngrName dropShadow' placeholder='Name of ingredient' size='38' maxlength='100' />
						<input type='text' id='txtIngrQty1' class='txtIngrName dropShadow' placeholder='Qty' size='3' maxlength='3' />
						<select id='selIngrMeasure1' class='selIngrMeasure' >
							<option value='' >pinch</option>
							<option value='' >teaspoon</option>
							<option value='' >tablespoon</option>
							<option value='' >cup</option>
							<option value='' >pound</option>
							<option value='' >other</option>
						</select>
					</div>
				</div>
				<div id="ingrRightPanel" >
					<br />
					<input type='button' id='addIngrButton' class='button dropShadow' value='&#43;' />
				</div>
				<div id="recServings" >
					<div id="recServVr1" class="vrLight" ></div>
					<div id="recTimesLeft" >
						<label for="recPrepTime" class="fontSubTitle" >Prep Time:</label><br />
						<input type="text" id="recPrepTime" class="dropShadow" size="4" maxlength="4" />
						&nbsp;Mins
					</div>
					<div id="recTimesVr2" class="vrLight" ></div>
					<div id="recTimesRight" >
						<label for="recCookTime" class="fontSubTitle" >Cook Time:</label><br />
						<input type="text" id="recCookTime" class="dropShadow" size="4" maxlength="4" />
						&nbsp;Mins
					</div>
					<div id="recTimesVr3" class="vrLight" ></div>
					<div id="recNumServWrapper" >
						<label for="recNumServ" class="fontSubTitle" >Servings:</label><br />
						<input type="text" id="recNumServ" class="dropShadow" size ="3" maxlength="3" /><br />
					</div>
					<div id="recServVr2" class="vrLight" ></div>
					<div id="recServSizeWrapper" >
						<label for="recServSize" class="fontSubTitle" >Serving Size:</label><br />
						<select id="recServSize" >
							<option value="" >1/4 Cup</option>
							<option value="" >1/2 Cup</option>
						</select>
					</div>
					<div id="recServVr3" class="vrLight" ></div>
				</div>
			</div>
			<div class="hrLight" ></div>
			<div id="directions" >
				<span class="fontSubTitle" >Directions:</span>
				<br />
				<textarea id="recDirText" class="softGradient" cols="65" rows="7" placeholder="Directions for the recipe go here." ></textarea>
			</div>
		</div>
		<!-- Content End -->
		
		<!-- Footer Start -->
		<div id="footer" >
			<div id="footerLeft" >
				<a href="#" id="delLink" >Delete Recipe</a>
			</div>
			<input type="submit" class="button dropShadow" value="Save Recipe" />&nbsp;
			<input type="button" class="button dropShadow" value="Reset" />&nbsp;
			<input type="button" class="button dropShadow" value="Cancel" />
		</div>
		<!-- Footer End -->
	</form>
</div>

<script type="text/javascript" src="registry.js"></script>
</body>
</html>