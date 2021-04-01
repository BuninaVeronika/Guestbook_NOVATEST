<?
session_start();
include_once('../sql/bd_connect.php');
connect();

$text=$_POST['text'];
$email=$_SESSION['email'];
$id_note=$_POST['id_note'];


$count_mail=mysqli_query($connect,"SELECT * FROM `user` WHERE `email`='$email'");
$array=mysqli_fetch_assoc($count_mail);
$id_user=$array["id_user"];
$role=$array["role"];

if($role==1){
	$note=mysqli_query($connect,"UPDATE `note` SET `text`='$text' WHERE `id_note`='$id_note'");
	echo "Отредактировали";
}
else{
$note=mysqli_query($connect,"UPDATE `note` SET `text`='$text' WHERE `id_note`='$id_note' AND `id_user`='$id_user'");
echo "Отредактировали";
}
