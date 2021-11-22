<?php
session_start();
include("connection.php");
//$test = "INSERT INTO podcasts (podcast_name, podcast_ep, podcast_img, podcast_path) VALUES (6, 6, LOAD_FILE('C:\Users\Mashiro\Desktop\podcastsimgs\thedropout.jpg'), 6)";
$test = "insert into teste (idteste, imagem) VALUES (2, LOAD_FILE('/thedropout.jpg'))";
if($con->query($test) === TRUE) {
    echo 'Inserted!';
}
?>