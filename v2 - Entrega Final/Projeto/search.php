<?php 
session_start();
include('auth.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="./css/search.css">
</head>
<body>

			<div id="navP"></div>
			<div id="searchP"></div>
			<div id="userP"></div>

			<div class="bgImgLogged" id="mycontainer">

				<div class="hidden" id="containerFull">
					<div class="containerFull"> <!--Container Expanded-->
						<h2>Resultados de busca:</h2>
						<div class="gridExpanded">
							<div class="box">
								<a href="#">
									
								</a>
							</div>
							<div class="box">
								<a href="#">
									
								</a>
							</div>
							<div class="box">
								<a href="#">
									
								</a>
							</div>
							<div class="box">
								<a href="#">
									
								</a>
							</div>
							<div class="box">
								<a href="#">
									
								</a>
							</div>
							<div class="box">
								<a href="#">
									
								</a>
							</div>
							<div class="box">
								<a href="#">
									
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="" id="container">
					<div class="container"> <!--Container Contracted-->
						<h2>Resultados de busca:</h2>
						<div class="gridExpanded"> <!--Change into grid future?-->
							<div class="box">
								<a href="#">
									
								</a>
							</div>
							<div class="box">
								<a href="#">
									
								</a>
							</div>
							<div class="box">
								<a href="#">
									
								</a>
							</div>
							<div class="box">
								<a href="#">
									
								</a>
							</div>
							<div class="box">
								<a href="#">
									
								</a>
							</div>
							<div class="box">
								<a href="#">
									
								</a>
							</div>
							<div class="box">
								<a href="#">
									
								</a>
							</div>
						</div>				
					</div>
				</div>
			</div>
	
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="./js/functions.js"></script>

</body>
</html>
