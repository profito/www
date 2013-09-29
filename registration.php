<!DOCTYPE html>
<html  oncontextmenu="return false">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Регистрация</title>
</head>
<body >
<div>Регистрация</div>

<div id="registration">
    <input name="form" id="nameRegistration" placeholder="Имя пользователя" />
    <input name="form" id="emailRegistration" placeholder="e-mail" />
    <input name="form" id="keyRegistration" placeholder="Пароль" />
    <input type="submit" id="enter" value="Вход" onclick="registration()" />
</div>
<script src="js/open.js"></script>
</body>
</html>
<?php
$get = $_GET[message];
list($nameRegistration,$keyRegistration,$emailRegistration) = explode("!", $get);
if($nameRegistration<>''or $keyRegistration<>'' or $emailRegistration<>''){

    $conn = new PDO('mysql:host=localhost; dbname=gamepc', profito, profito);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $link = mysql_connect('localhost','profito','profito');
    mysql_select_db('gamepc');
    $row = mysql_fetch_array(mysql_query("  SELECT `iduser` FROM `user` ORDER BY `iduser` DESC LIMIT 1",$link));//последний id
    $qe=$row[0];
    $s=0;
    for($i=0;$i<=$qe;$i++){
        $data = $conn->query('SELECT * FROM user WHERE iduser = ' . $conn->quote($i));
        foreach($data as $rows) {
            if($rows[1]==$nameRegistration){
                print '<script language="javascript">alert("Имя занято");</script>';
                $s=1;
            }
        }
    }
    if($s==0){
        mysql_query("INSERT INTO `user`(`name`,`login`,`keys`,`e-mail`) VALUES('$nameRegistration','$nameRegistration','$keyRegistration','$emailRegistration')",$link) or die("ERROR: ".mysql_error());
        print '<script language="javascript">entrance();</script>';
    }
}
else{
}
?>