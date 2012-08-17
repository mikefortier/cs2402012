<!DOCTYPE html> 
<html>
<head>
<title>Random Ingredients - List</title>

<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="mobile.css" />
<script type="text/javascript" src="validation.js"></script>
<script type="text/javascript" src="utility.js"></script>

<?php
	function getRmListTitle(){
		//return String, either "Recipes" or "Meals"
		};
		
	function searchResults(){
		//retrieves postback search parameters
		//return search results into #rmList
		
		//functional alternative: use JavaScript or jquery,
		//without need for postback, instead of php
		};
?>

</head>
<body onload="loader()" >

<div id="wrapper" class="fontMain">
	<!-- Header Start -->
	<div id="header" >
		<a href="homeScreen.php" class="imgLink" ><img id="headerLogo" class="dropShadow" alt="Random Ingredients Logo" src="images/logo.png" /></a>
		<div id="headerTitle" class="fontHeaderTitle">
			<br />
			<?php getRmListTitle(); ?>
		</div>
	</div>
	<!-- Header End -->
	
	<!-- Content Start -->
	<div id="content" >
		<div id="rmList" class="dropShadow softGradient" >
			
		</div>
		<div id="rmListSearchFilters" class="dropShadow softGradient" >
			<span class="fontSubTitle" >Filters</span>
			<div class="hrDark" ></div>
		</div>
	</div>
	<!-- Content End -->
	
	<!-- Footer Start -->
	<div id="footer" >
		<div id="footerLeft" >
			<form action="#" name="search" >
				<div id="searchBar" class="dropShadow" >
					<input type="search" id ="searchTextBox" placeholder="Search"/>
					<input type="button" id="searchGoButton" class="dropShadow" value="Go" />
				</div>
			</form>
		</div>
		<input type="button" class="button dropShadow" value="View" />&nbsp;
		<input type="button" class="button dropShadow" value="Add" />&nbsp;
		<input type="button" class="button dropShadow" value="Edit" />&nbsp;
		<input type="button" class="button dropShadow" value="Delete" />
	</div>
	<!-- Footer End -->
</div>

<script type="text/javascript" src="registry.js"></script>
</body>
</html>