<?php 
session_start();
include('auth.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="./css/playlists.css">
</head>
<body>

			<div id="navP"></div>
			<div id="searchP"></div>
			<div id="userP"></div>
			<div id="playlistP"></div>

			<div class="bgImgLogged" id="mycontainer">

				<div class="hidden" id="containerFull">
					<div class="containerFull"> <!--Container Expanded-->
						<h1 type="title">Minhas Playlists:</h1>
						<div class="gridExpanded">
							<div class="box">
								<a href="#" id="createPlaylist">
									
								</a>
							</div>
							<div class="box">
								<a href="playlistPage.php">
									
								</a>
							</div>
							<div class="box">
								<a href="playlistPage.php">
									
								</a>
							</div>
							<div class="box">
								<a href="playlistPage.php">
									
								</a>
							</div>
							<div class="box">
								<a href="playlistPage.php">
									
								</a>
							</div>
							<div class="box">
								<a href="playlistPage.php">
									
								</a>
							</div>
							<div class="box">
								<a href="playlistPage.php">
									
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="" id="container">
					<div class="container"> <!--Container Contracted-->
						<h1 type="title">Minhas Playlists:</h1>
						<div class="gridExpanded"> <!--Change into grid future?-->
							<div class="box">
								<a href="#" id="createPlaylist2">
									
								</a>
							</div>
							<div class="box">
								<a href="playlistPage.php">
									
								</a>
							</div>
							<div class="box">
								<a href="playlistPage.php">
									
								</a>
							</div>
							<div class="box">
								<a href="playlistPage.php">
									
								</a>
							</div>
							<div class="box">
								<a href="playlistPage.php">
									
								</a>
							</div>
							<div class="box">
								<a href="playlistPage.php">
									
								</a>
							</div>
							<div class="box">
								<a href="playlistPage.php">
									
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
