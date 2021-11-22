<?php
session_start();
include('connection.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($con, $_POST['usuario']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

$query = "select usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($con, $query);

$row = mysqli_num_rows($result);

if($row ==1) {
    $usuario_bd = mysqli_fetch_assoc($result);
    $_SESSION['usuario'] = $usuario_bd['usuario'];
    header('Location: discover.php');
    exit();
    echo 'Success';
}
else {
    $_SESSION['failed'] = true;
    header('Location: index.php');
    exit();
    echo 'Fail';
}

?>