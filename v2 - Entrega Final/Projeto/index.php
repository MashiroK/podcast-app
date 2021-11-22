<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="./css/login.css">
</head>
<body>
<div class="login">
	<div class="bgImg">
		<div class="container">
			<div class="logo">
				<img src="./assets/imgs/logoLong.png" alt="logo" width="75%" height="75%">
				<div class="striked">
					<h1>Log in</h1>
				</div>

				<form action="login.php" method="POST">
					<input name="usuario" type="text" id="nome" placeholder="Usuário">
					<input name="senha" type="password" id="senha"placeholder="************">
					<div class="formDiv"><span class="underline">ESQUECEU A SENHA?</span></div>
					<input type="submit" id="login" value="LOG IN">
					<?php
					if(isset($_SESSION['failed'])): 
					?>
					<div class="fail">USUÁRIO E/OU SENHA INCORRETOS!</div>
					<?php
					endif;
					unset($_SESSION['failed']);
					?>
				</form>

				<div class="striked">
					<p>ou</p>
				</div>

				<form>
					<a href="./register.php"><input type="button" id="register" value="REGISTRAR"></a> 
				</form>

				<div class="terms">AO CLICAR EM "LOG IN/REGISTRAR" ACIMA, VOCÊ RECONHECE QUE LEU E CONCORDA COM NOSSOS TERMOS DE USO.</div>


			  </div>
		</div>
	</div>


</div>


</body>
</html>