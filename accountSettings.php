<!DOCTYPE html> 
<html>
<head>
<title>Random Ingredients - Account</title>

<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="mobile.css" />
<script type="text/javascript" src="validation.js"></script>
<script type="text/javascript" src="utility.js"></script>

<?php
	function getCreateEditAccountTitle(){
		//check whether user is creating or editing an account
		//return String, either "Create" or "Edit"
		};
		
	function loadCreateOrEdit(){
		//check whether user is creating or editing an account
		//if creating, then load form with empty inputs
		//if editing, then pull user info, autofill inputs, and unhide #delAccount
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
			<?php getCreateEditAccountTitle(); ?>&nbsp;Account
		</div>
	</div>
	<!-- Header End -->
	
	<form action="#" name="accountInfo" >
		<!-- Content Start -->
		<div id="content" >
			<div id="contentNews" class="dropShadow softGradient" >
			<span class="fontSubTitle" >Recent News</span>
			<div class="hrDark" ></div>
				<?php include="recentNews.php" ?>
			</div>
			
			<div id="accountInfoLabels" >
				<label class="fontSubTitle" >Name:</label><br />
				<br />
				<label class="fontSubTitle" >Username:</label><br />
				<br />
				<label class="fontSubTitle" >Email:</label><br />
				<br />
				<label class="fontSubTitle" >Password:</label><br />
				<br />
				<label class="fontSubTitle" >Confirm Password:</label>
			</div>
			
			<div id="accountInfoInputs" >
				<input type="text" name="name" class="dropShadow" size="30" maxlength="30" /><br />
				<br />
				<input type="text" name="username" class="dropShadow" size="30" maxlength="30" /><br />
				<br />
				<input type="text" name="email" class="dropShadow" size="30" maxlength="30" /><br />
				<br />
				<input type="password" name="password" class="dropShadow" size="30" maxlength="30" /><br />
				<br />
				<input type="password" name="confirmPw" class="dropShadow" size="30" maxlength="30" />
			</div>
		</div>
		<!-- Content End -->
		
		<!-- Footer Start -->
		<div id="footer" >
			<div id="footerLeft" >
				<a href="#" id="delLink" >Delete Account</a>
			</div>
			<input type="submit" class="button dropShadow" value="Submit" />&nbsp;
			<input type="reset" class="button dropShadow" value="Reset Form" />&nbsp;
			<input type="button" class="button dropShadow" value="Cancel" />
		</div>
		<!-- Footer End -->
	</form>
</div>

<script type="text/javascript" src="registry.js"></script>
</body>
</html>