
<!DOCTYPE html>
<html  oncontextmenu="return false">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>windows</title>
</head>
<body >
<div id="formOpen">
    <input name="form" id="massag" placeholder="Имя пользователя" />
    <input type="submit" id="enter" value="Вход" onclick="message()" />
</div>
<script src="js/open.js"></script>
</body>
</html>

<?php
$name = $_GET[message];

try {
    $conn = new PDO('mysql:host=localhost; dbname=gamepc', profito, profito);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = $conn->query('SELECT * FROM user WHERE login = ' . $conn->quote($name));

    foreach($data as $row) {
        if($row[1]==$name){
          print_r($row[3]);
          print '<script language="javascript">alert("dfg"); open("'.$row[3].'")</script>';
        }
    }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>


