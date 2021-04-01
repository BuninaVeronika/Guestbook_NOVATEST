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
h1{
	text-transform: uppercase;
}
</style>
<body>
<div class='authorization'>
<h1>Авторизация</h1>
<form  id="authorization">
<input type="text" name="email" placeholder="Email">
<input type="password" name="password" placeholder="Пароль">
<input type="button" onclick="authorization();" name=""  value="Авторизоваться">
</form>
</div>
<div class='authorization' style="background-color: #eb7965;">
<h1 style="color: #fcf6f0;">Регистрация</h1>
<form id="registration">
<input style="color: #fff;" type="text" name="login" placeholder="Логин">
<input style="color: #fff;" type="email" name="email" placeholder="Email">
<input style="color: #fff;" type="password" name="password" placeholder="Пароль">
<input type="button"  onclick="registration();" name="" value="Зарегистрироваться">
</form>
</div>
</body>
</html>
