<?
session_start();
include_once('../sql/bd_connect.php');
connect();

$email=$_POST['email'];
$password=$_POST['password'];

$count_mail=mysqli_query($connect,"SELECT `email` FROM `user` WHERE `email`='$email' AND `passsword`='$password'");
$count=mysqli_num_rows($count_mail);
if($count!=0){
	$array=mysqli_fetch_assoc($count_mail);
	$email=$array["email"];
	$_SESSION['email'] = $email;
	echo "Авторизован";	
}
else{
exit('Пользователь с указанными данными не зарегистрирован.');
}
