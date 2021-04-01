<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'admin');
define('DB_PASSWORD', '1111');
define('DB_NAME', 'guestbook');
define('DB_TABLE_VERSIONS', 'versions');


// Подключаемся к базе данных
function connectDB() {
    $errorMessage = 'Невозможно подключиться к серверу базы данных';
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if (!$conn)
        throw new Exception($errorMessage);
    else {
        $query = $conn->query('set names utf8');
        if (!$query)
            throw new Exception($errorMessage);
        else
            return $conn;
    }
}

function connect(){
$connect=mysqli_connect("localhost","admin","1111");
if(!$connect)
{
die("СУБД не подключена".mysqli_errno());
}
mysqli_set_charset($connect,"utf8");
if (!mysqli_select_db($connect,"guestbook"))
{
die("Ошибка БД".mysql_errno());
}
$GLOBALS['connect'] = $connect;
}