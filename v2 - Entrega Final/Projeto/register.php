<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="./css/register.css">
</head>
<body>
<div class="login">
	<div class="bgImg">
		<div class="container">
			<div class="logo">
				<img src="./assets/imgs/logoLong.png" alt="logo" width="75%" height="75%">
				<div class="striked">
					<h1>Register</h1>
				</div>

				<form action ="registerDB.php" method="POST">
					<input type="text" id="emailr" name="email" placeholder="Insira seu email aqui">
					<input type="text" id="nomer" name="usuario" placeholder="Insira seu nome aqui">
					<input type="password" id="senhar" name="senha" placeholder="Insira sua senha">
					<input type="password" id="senharconfirm" name="confirm" placeholder="Confirme sua senha">
					
					<span>
					<select type="select" id="sexor" name="sexo">
						<option value="Sexo" disabled selected hidden>Sexo</option>
						<option value="Masculino">Masculino</option>
						<option value="Feminino">Feminino</option>
						<option value="Outro">Outro</option>
						</select>
					</span>

					<span>
						<input name="idade" type="text2" id="idader"placeholder="Idade">

						</select>
					</span>

					<input type="submit" id="continuar" value="CONTINUAR">

				</form>

				<?php
					if(isset($_SESSION['registered'])):
				?>
				<div class="msg">Cadastrado com sucesso!</div>
				<?php
					endif;
					unset($_SESSION['registered']);
				?>

				<?php
					if(isset($_SESSION['exists'])):
				?>
				<div class="msg">Usuário já cadastrado!</div>
				<?php
					endif;
					unset($_SESSION['exists']);
				?>

				<?php
					if(isset($_SESSION['invalid'])):
				?>
				<div class="msg">Senhas não batem!</div>
				<?php
					endif;
					unset($_SESSION['invalid']);
				?>

			  </div>
		</div>
	</div>


</div>


</body>
</html>