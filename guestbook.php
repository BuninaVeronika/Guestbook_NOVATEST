<?
session_start();
include_once('sql/bd_connect.php');
connect();
?>
<html>
<head>
<title>ГОСТЕВАЯ КНИГА</title>
<script defer src="jquery_3.5.1.min.js"></script>
<script defer src="form_js.js"></script>
</head>
<style type="text/css">
	body{
		background-color: #fcf6f0;
	}
	.authorization{
		width: 50%;
		margin: 0 20%;
		box-shadow: 1px 1px 20px rgba(122,122,122,0.2);
		padding: 5%;
		background: #fff;
	}
div input[type="text"],input[type="password"],input[type="email"]{
	width: 100%;
	text-align: center;
	outline: none;
	padding: 10px;
	background:none;
	border: 1px solid #873524;
	border-radius: 5px;
	margin: 1% 0;
}
hr{
	border:none;
	border-bottom: 1px solid #873524;
	float: left;
	width: 100%;
}
div input[type="button"]{
	outline: none;
	padding: 10px;
	background-color: #d35339;
	color:white;
	border: none;
	text-transform: uppercase;
	width: 50%;
	margin: 0 25%;
	border-radius: 5px;
	margin-top: 5%;
}
div input[type="button"]:hover{
	background-color: #b53c21;
}
input:-webkit-autofill {
    -webkit-box-shadow:0 0 0 50px #e3a598 inset; /* можно изменить на любой вариант цвета */
    -webkit-text-fill-color: #333;
}
h1,p,h3{
	margin: 5px 0;
	text-transform: uppercase;
	padding: 0;
}
</style>
<body>
<div class='authorization'>
<h1>Гостевая книга</h1>
<?php
$email=$_SESSION['email'];
$count_mail=mysqli_query($connect,"SELECT * FROM `user` WHERE `email`='$email'");
$count=mysqli_num_rows($count_mail);
$array=mysqli_fetch_assoc($count_mail);
$login=$array["login"];
$id_user=$array["id_user"];
$role=$array["role"];
if($count!=0){
	echo '<form  id="note"><p>Здравствуйте, '.$login.'</p><input type="text" name="text" placeholder="Текст записи"><input type="button" onclick="note();" name=""  value="Добавить запись"></form>';
}
?>
</div>
<div class='authorization'>
<?
 $note=mysqli_query($connect,"SELECT * FROM `note` ORDER BY 'id_note' DESC ");
 $note_count=mysqli_num_rows($note);

$count_str=($note_count/10)+1;
$numer_str=$_GET["numer_str"];
if($numer_str==''){$numer_str=1;}

$public_user=$numer_str*10;

$public_end=$public_user-10;

for($r=0; $r<$public_user; $r++){

	if($r==$note_count){ break;}

	 $array_note=mysqli_fetch_assoc($note);

	if($r>=$public_end){

 $id_note=$array_note["id_note"];
 $id_user_note=$array_note["id_user"];
 $text=$array_note["text"];
 $datatime=$array_note["datatime"];

 $user=mysqli_query($connect,"SELECT * FROM `user` WHERE `id_user`='$id_user_note'");
 $array_user=mysqli_fetch_assoc($user);
 $login=$array_user["login"];
 if($id_user==$id_user_note || $role==1){

 $class_id='class_'.$r;	
print<<<note
<h3>$login</h3><br>
<form id='$class_id'>
<input style='display:none;' type="text" name="id_note" value='$id_note'>
<input type="text" name="text" placeholder="Текст записи" value='$text'>
<p style='float:right;'>$datatime</p>
<input type="button" value='Редактировать' class='red' att='$class_id'>
<input type="button" value='Удалить' alt='$id_note' class='del'>
</form>
<hr>
note;
 }
 else{
print<<<note
<br>
<h3>$login</h3>
<span>$text</span>
<p style='float:right;'>$datatime</p>
<hr>
<br>
note;

 }
}
}
?>
</div>

<center style='color:#d35339; font-size:22px;' >

<?
	for($t=1; $t<=$count_str; $t++){

print<<<slid
			<a  style='color:#d35339; text-decoration:none;'  class="a_auth" href="guestbook.php?numer_str=$t">$t</a>
slid;
			
		}
?>
</center>

</body>
</html>
