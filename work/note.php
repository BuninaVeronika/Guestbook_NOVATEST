<?
session_start();
include_once('../sql/bd_connect.php');
connect();

$text=$_POST['text'];
$email=$_SESSION['email'];

$mat = array("политика","независимость","роскомнадзор","твиттер","неприемлемо");
$text=str_replace($mat, "*", $text);

$count_mail=mysqli_query($connect,"SELECT `id_user` FROM `user` WHERE `email`='$email'");
$array=mysqli_fetch_assoc($count_mail);
$id_user=$array["id_user"];

$note=mysqli_query($connect,"INSERT INTO `note`(`id_user`, `text`) VALUES ('$id_user','$text')");
 
echo "Добавили";
