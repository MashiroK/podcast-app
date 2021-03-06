<?php 
session_start();
include('auth.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="./css/playlistPage.css">
</head>
<body>

			<div id="navP"></div>
			<div id="searchP"></div>
			<div id="userP"></div>
			<div id="songP"></div>
			<div class="hidden" id="listScrollDoppel"></div>
			
			

			<div class="bgImgLogged" id="mycontainer">

				<div>
					<a class="follow" href="#">
						Seguir
					</a>
				</div>

				<div class="hidden" id="containerFull">
					<div class="containerFull"> <!--Container Expanded-->
						<div class="info">
							<div class="info__container">
								
								<h2>The Playlist</h2>
								<h3>Descrição da Playlist - At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas ... <i class="white">show more</i></h3>
										
								<div class="info__container-img"></div>

								<div class="button__container">
										<a class="button" href="#">
											Play	
										</a>
									
										<div class="button" type="or">
											or

										</div>
										
										<a class="button" href="#">
											Shuffle
											<svg type="shuffle" baseProfile="tiny" height="24" version="1.2" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M4 9h3.5c.736 0 1.393.391 1.851 1.001.325-.604.729-1.163 1.191-1.662C9.739 7.516 8.676 7 7.5 7H4c-.553 0-1 .448-1 1s.447 1 1 1zM11.685 12.111C12.236 10.454 13.941 9 15.334 9h1.838l-1.293 1.293c-.391.391-.391 1.023 0 1.414.195.195.451.293.707.293s.512-.098.707-.293L21 8l-3.707-3.707c-.391-.391-1.023-.391-1.414 0s-.391 1.023 0 1.414L17.172 7h-1.838c-2.274 0-4.711 1.967-5.547 4.479l-.472 1.411C8.674 14.816 7.243 16 6.5 16H4c-.553 0-1 .448-1 1s.447 1 1 1h2.5c1.837 0 3.863-1.925 4.713-4.479l.472-1.41z"/><path d="M15.879 13.293c-.391.391-.391 1.023 0 1.414L17.172 16h-2.338c-1.268 0-2.33-.891-2.691-2.108-.256.75-.627 1.499-1.09 2.185.886 1.162 2.243 1.923 3.781 1.923h2.338l-1.293 1.293c-.391.391-.391 1.023 0 1.414.195.195.451.293.707.293s.512-.098.707-.293L21 17l-3.707-3.707c-.391-.391-1.023-.391-1.414 0z"/></svg>	
										</a>
								</div>

							</div>
						</div>
						
						<div type="sub" id="listScrollP"></div>
					</div>
				</div>

				<div class="" id="container">
					<div class="container"> <!--Container Contracted-->
						<div class="info">
							<div class="info__container">
								
								<h2>The Playlist</h2>
								<h3>Descrição da Playlist - At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas ... <i class="white">show more</i></h3>
										
								<div class="info__container-img"></div>

								<div class="button__container">
										<a class="button" href="#">
											Play	
										</a>
									
										<div class="button" type="or">
											or

										</div>
										
										<a class="button" href="#">
											Shuffle
											<svg type="shuffle" baseProfile="tiny" height="24" version="1.2" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M4 9h3.5c.736 0 1.393.391 1.851 1.001.325-.604.729-1.163 1.191-1.662C9.739 7.516 8.676 7 7.5 7H4c-.553 0-1 .448-1 1s.447 1 1 1zM11.685 12.111C12.236 10.454 13.941 9 15.334 9h1.838l-1.293 1.293c-.391.391-.391 1.023 0 1.414.195.195.451.293.707.293s.512-.098.707-.293L21 8l-3.707-3.707c-.391-.391-1.023-.391-1.414 0s-.391 1.023 0 1.414L17.172 7h-1.838c-2.274 0-4.711 1.967-5.547 4.479l-.472 1.411C8.674 14.816 7.243 16 6.5 16H4c-.553 0-1 .448-1 1s.447 1 1 1h2.5c1.837 0 3.863-1.925 4.713-4.479l.472-1.41z"/><path d="M15.879 13.293c-.391.391-.391 1.023 0 1.414L17.172 16h-2.338c-1.268 0-2.33-.891-2.691-2.108-.256.75-.627 1.499-1.09 2.185.886 1.162 2.243 1.923 3.781 1.923h2.338l-1.293 1.293c-.391.391-.391 1.023 0 1.414.195.195.451.293.707.293s.512-.098.707-.293L21 17l-3.707-3.707c-.391-.391-1.023-.391-1.414 0z"/></svg>	
										</a>
								</div>

							</div>
						</div>
						<div type="sub" id="listScrollP2"></div>
					</div>
				</div>
			</div>
	
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="./js/functions.js"></script>

</body>
</html>
