<?php 
session_start();
include('auth.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="./css/discover.css">
</head>
<body>


			<div id="navP"></div>
			<div id="searchP"></div>
			<div id="userP"></div>
			<div id="songP"></div>
			<div class="hidden" id="gridScrollDoppel"></div>
			<div class="hidden" id="gridScrollDoppel2"></div>

			

			<div class="bgImgLogged" id="mycontainer">

				<div class="hidden" id="containerFull">
					<div class="containerFull"> <!--Container Expanded-->
						<div id="gridScrollP"></div>
					</div>
				</div>

				<div class="" id="container">
					<div class="container"> <!--Container Contracted-->
						<div id="gridScrollP2"></div>
					</div>
				</div>
			</div>
	
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="./js/functions.js"></script>

</body>
</html>