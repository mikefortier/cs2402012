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
				<label for="recName" >Name of Recipe:</label>
				<input type="text" id="recName" />
				<div id="recPic" class="dropShadow">
					<img alt="Photo of the recipe" src="" />
				</div>
				<div id="recDescription" >
					<textarea id="recDescText" class="softGradient" cols="65" rows="7" placeholder="Description of the recipe goes here." ></textarea>
					<div id="recDescCharsRemaining" class="charsRemaining" ></div>
				</div>
			</div>
			<div id="recInfo" >
				<div class="hrLight" ></div>
				<div id="recTimes" >
					<div id="recTimesLeft" >
						<label for="recPrepTime" >Prep Time:</label><br />
						<input type="text" id="recPrepTime" size="4" maxlength="4" />
						&nbsp;Mins
					</div>
					<div id="recTimesMiddle" class="vrLight" ></div>
					<div id="recTimesRight" >
						<label for="recCookTime" >Cook Time:</label><br />
						<input type="text" id="recCookTime" size="4" maxlength="4" />
						&nbsp;Mins
					</div>
				</div>
				<div class="hrLight" ></div>
				<div id="recServings" >
					<div id="recNumServWrapper" >
						<label for="recNumServ" >Servings:</label><br />
						<input type="text" id="recNumServ" size ="3" maxlength="3" /><br />
					</div>
					<div class="vrLight" ></div>
					<div id="recServSizeWrapper" >
						<label for="recServSize" >Serving Size:</label><br />
						<select id="recServSize" >
							<option value="" >1/4 Cup</option>
							<option value="" >1/2 Cup</option>
						</select>
					</div>
				</div>
			</div>
			<div>
			
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