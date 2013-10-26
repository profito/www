<!DOCTYPE html>
<html  oncontextmenu="return false">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Вход</title>
</head>
<body >
<div id="formOpen">
    <input name="form" id="massag" placeholder="Имя пользователя" />
    <input name="form" id="key" placeholder="Пароль" />

    <input type="submit" id="enter" value="Вход" onclick="message()" />
    <div><a href="registration.php">Регистрация</a></div>

</div>
<script src="js/open.js"></script>
</body>
</html>

<?php
$get = $_GET[message];
list($user, $pass) = explode("!", $get);

try {
    $conn = new PDO('mysql:host=localhost; dbname=gamepc', profito, profito);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = $conn->query('SELECT * FROM user WHERE login = ' . $conn->quote($user));
    foreach($data as $row) {
        if($row[1]==$user){
                print '<script language="javascript">document.cookie = "name=login; domain=pcgame.ru"; open("'.$row[0].'")</script>';
            }
        }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>




