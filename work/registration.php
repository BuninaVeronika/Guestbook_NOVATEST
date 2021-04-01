<?
session_start();
include_once('../sql/bd_connect.php');
connect();

$login=$_POST['login'];
$email=$_POST['email'];
$password=$_POST['password'];

$count_mail=mysqli_query($connect,"SELECT * FROM `user` WHERE `email`='$email'");
$count=mysqli_num_rows($count_mail);
if($count!=0){
	exit('Пользователь с данным электронным адресом уже зарегистрирован.');
}
else{
$user=mysqli_query($connect,"INSERT INTO `user`(`login`, `email`, `passsword`) VALUES ('$login','$email','$password')");
$_SESSION['email'] = $email;
echo "Зарегистрирован";
}