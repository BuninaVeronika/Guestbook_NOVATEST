<?
session_start();
include_once('../sql/bd_connect.php');
connect();

$id_note=$_POST['id_note'];
$email=$_SESSION['email'];

$count_mail=mysqli_query($connect,"SELECT * FROM `user` WHERE `email`='$email'");
$array=mysqli_fetch_assoc($count_mail);
$id_user=$array["id_user"];
$role=$array["role"];

if($role==1){
	$note=mysqli_query($connect,"DELETE FROM `note` WHERE `id_note`='$id_note'");
	echo "Удалили";
}
else{
$note=mysqli_query($connect,"DELETE FROM `note` WHERE `id_note`='$id_note' AND `id_user`='$id_user'");
echo "Удалили";
}
 

