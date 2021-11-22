<?php
session_start();
include("connection.php");

$email = mysqli_real_escape_string($con, trim($_POST['email']));
$user = mysqli_real_escape_string($con, trim($_POST['usuario']));
$password = mysqli_real_escape_string($con, trim(md5($_POST['senha'])));
$confirm = mysqli_real_escape_string($con, trim(md5($_POST['confirm'])));
$sex = mysqli_real_escape_string($con, $_POST['sexo']);
$age = mysqli_real_escape_string($con, $_POST['idade']);


$q = "select count(*) as total from usuario where usuario = '$user'";
$result = mysqli_query($con, $q);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['exists'] = true;
    header('Location: register.php');
    exit;
    //echo 'Exists!';
}

if($password !== $confirm) {
    $_SESSION['invalid'] = true;
    header('Location: register.php');
    exit;
}

$sql = "INSERT INTO usuario (usuario, senha, email, idade, sexo) VALUES ('$user', '$password', '$email', '$age', '$sex')";
$test = "INSERT INTO podcasts (podcast_name, podcast_ep, podcast_img, podcast_path) VALUES (5, 5, LOAD_FILE('/assets/imgs/logo.png'), 5)";
//echo $sql;

if($con->query($sql) === TRUE) {
    $_SESSION['registered'] = true;
}

$con->close();

header('Location: register.php');
exit;


?>