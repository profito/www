
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/basic_style.css" />
    <link rel="stylesheet" href="css/fight.css" />
    <link rel="stylesheet" href="css/location.css" />
    <title>Game</title>
</head>
<body>
    <div id='MainUnit'>
        <div id='HeroStatus'>
            <div id='HeroImg'></div>
            <div id='Experience'></div>
            <div id='XP'></div>
        </div>
        <div id='MainMenu'>
<<<<<<< HEAD
            <div class="elementMainMenu" id="menuUser">игрок</div>
=======
            <div class="elementMainMenu">игрок</div>
>>>>>>> 952702c3c884b8ae00885f2d131cd77fb4034958
            <div class="elementMainMenu">задания</div>
            <div class="elementMainMenu">вилла</div>
            <div class="elementMainMenu">клан</div>
            <div class="elementMainMenu">банк</div>
            <div class="elementMainMenu">карта</div>
            <div class="elementMainMenu" id="rating">зал славы</div>
            <div class="elementMainMenu">форум</div>
        </div>
        <div id="WindowLocations"></div>
        <div id="WindowMenu">
<<<<<<< HEAD
            <div class="exit" onclick="Exit()">x</div>

=======
>>>>>>> 952702c3c884b8ae00885f2d131cd77fb4034958
            <div id="ImgLocations">
                <div id="lists">
                    <table id="olMenu">
                        <tr>
                            <td>Игрок</td>
                            <td>Уровень</td>
                            <td>Опыт</td>
                            <td>Побед</td>
                            <td>Поражений</td>
                            <td>Нечьих</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="MenuRating">
                <ul>
                    <li id="1">опыт</li>
                    <li id="1">1</li>
                    <li id="1">1</li>
                    <li id="1">1</li>
                </ul>
            </div>
        </div>

<<<<<<< HEAD


       <!--меня пользователя-->
        <div id="MenuUser">
            <div id="leftMenu">
                <div class="thingMenu" id="thing1"></div>
                <div class="thingMenu" id="thing2"></div>
                <div class="thingMenu" id="thing3"></div>
                <div class="thingMenu" id="thing4"></div>
                <div class="thingMenu" id="thing5"></div>
            </div>
            <div id="MenuForMenuRight">
                <div class="menuForRight" id="bag">Мешок</div>
                <div class="menuForRight" id="stats">Статы</div>
                <div class="menuForRight" id="questionnaire">Анкета</div>
                <div class="menuForRight" id="talents">Таланты</div>
                <div class="menuForRight exit"onclick="Exit()">x</div>
            </div>
            <div id="rightMenu">
                <div id="RightMenuBag">
                    <div class="MenuBagThing" id=""></div>
                    <div class="MenuBagThing" id=""></div>
                    <div class="MenuBagThing" id=""></div>
                    <div class="MenuBagThing" id=""></div>
                    <div class="MenuBagThing" id=""></div>
                    <div class="MenuBagThing" id=""></div>
                    <div class="MenuBagThing" id=""></div>
                    <div class="MenuBagThing" id=""></div>
                    <div class="MenuBagThing" id=""></div>
                    <div class="MenuBagThing" id=""></div>
                    <div class="MenuBagState" id=""></div>
                    <div class="MenuBagState" id=""></div>
                    <div class="MenuBagState" id=""></div>
                    <div class="MenuBagState" id=""></div>
                    <div class="MenuBagState" id=""></div>
                    <div class="MenuBagState" id=""></div>
                </div>
                <div id="RightMenuState">
                    <div class="stringMenuState" id="">Мышци</div>
                    <div class="stringMenuState" id="">1</div>
                    <div class="stringMenuState" id="">0</div>
                    <div class="stringMenuState" id="">+</div>
                    <div class="stringMenuState" id="">Жир</div>
                    <div class="stringMenuState" id="">1</div>
                    <div class="stringMenuState" id="">0</div>
                    <div class="stringMenuState" id="">+</div>
                    <div class="stringMenuState" id="">Резкость</div>
                    <div class="stringMenuState" id="">1</div>
                    <div class="stringMenuState" id="">0</div>
                    <div class="stringMenuState" id="">+</div>
                    <div class="stringMenuState" id="">Извилины</div>
                    <div class="stringMenuState" id="">1</div>
                    <div class="stringMenuState" id="">0</div>
                    <div class="stringMenuState" id="">+</div>
                    <div class="stringMenuState bottomMenuState" id="">Крутость</div>
                    <div class="stringMenuState bottomMenuState State" id="">1</div>
                    <div class="stringMenuState bottomMenuState" id="">Здоровье</div>
                    <div class="stringMenuState bottomMenuState State" id="">1</div>
                    <div class="stringMenuState bottomMenuState" id="">Раса</div>
                    <div class="stringMenuState bottomMenuState State" id="">1</div>
                    <div class="stringMenuState bottomMenuState" id="">Класс</div>
                    <div class="stringMenuState bottomMenuState State" id="">1</div>
                </div>
            </div>
        </div>


=======
>>>>>>> 952702c3c884b8ae00885f2d131cd77fb4034958
        <!--Шаблон окна рейтинга -->
        <script type="text/html" id="Rating" >
            <tr><%= elementList %></tr>
        </script>

        <!--Шаблон основного окна -->
        <script type="text/html" id="Locations" >
            <div id="ImgLocations">
                    <div id="<%= ImgLocation %>"></div>
                    <div id="<%= ImgLocationsDescription %>"></div>
                </div>
                <div id="<%= MenuLocations %>">
                    <div id="<%= MoveLocations %>">
                        <ul>
                            <li id="<%= next %>">Next</li>
                            <li id="<%= back %>">Back</li>
                            <li id="<%= boss %>">Boss</li>
                            <li id="<%= shop %>"> Shop</li>
                        </ul>
                    </div>
                    <div id="<%= BossLocations %>">
                        <div id="<%= monster %>" onclick='<%= monsterClick %> '> Monster </div>
                    </div>
                </div>
        </script>

        <!--Шаблон окна боя-->
        <script type="text/html" id="fight" >
                <div id="<%=StringName%>">
                    <div id="<%= NameHero %>"></div>
                    <div id="<%= NameAntiHero %>"></div>
                </div>
                <div id="<%= windowsHero %>">
                    <div id="<%= logFight %>"></div>
                    <div id="<%= skills %>">
                        <div id="<%= skillsOne %>"></div>
                        <div id="<%= skillsTwo %>"></div>
                        <div id="<%= skillsThree %>"></div>
                        <div id="<%= skillsFour %>"></div>
                        <div id="<%= skillsFive %>"></div>
                        <div id="<%= skillsSix %>"></div>
                    </div>
                </div>
                <div id="<%= windowsBattle %>">
                     <div id="<%= field %>">
                        <div id="<%= roller %>"></div>
                     </div>
                </div>
                <div id="<%= windowsAntiHero %>"></div>
                <div id="<%= windowsXPAntiHero %>"></div>
        </script>

        <!--<div id='Chat'>
               <div></div>
               <div></div>
            </div>-->
    </div>
</body>

<script src="js/core.js"></script>
<script src="js/location.js"></script>
<script src="js/hero.js"></script>
<script src="js/antiheroes.js"></script>
<script src="js/talent.js"></script>
<script src="js/things.js"></script>
<script src="js/fight.js"></script>
<script src="js/rating.js"></script>



</html>
<?php
<<<<<<< HEAD
$get = $_GET[message];
list($idUser) = explode("!", $get);

//1 способ
$conn = new PDO('mysql:host=localhost; dbname=gamepc', profito, profito);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//2 способ
$link = mysql_connect('localhost','profito','profito');
mysql_select_db('gamepc');

$row = mysql_fetch_array(mysql_query("  SELECT `userId` FROM `user` ORDER BY `userId` DESC LIMIT 1",$link));//последний id
$qe=$row[0];

for($i=0;$i<=$qe;$i++){
$data = $conn->query('SELECT * FROM user WHERE userId = ' . $conn->quote($i));
    foreach($data as $row) {
        print '<script language="javascript"> lists("'.$row[1].'%'.$row['keys'].'%'.$row[5].'%'.$row[6].'%'.$row[7].'%'.$row[8].'")</script>';
    }
}
//$bag = mysql_fetch_array(mysql_query("SELECT * FROM user, bag, helmet, weapon, shield, armor, knee WHERE user.idbag= bag.idbag and bag.helmet= helmet.idthing and bag.weapon= weapon.idthing  and bag.shield= shield.idthing  and bag.armor= armor.idthing  and bag.knee= knee.idthing  and user.iduser='$idUser'",$link));//последний id
//print '<script language="javascript">bag("'.$bag[name].','.$bag[helmeturl].','.$bag[weaponurl].','.$bag[shieldurl].','.$bag[armorurl].','.$bag[kneeurl].'")</script>';
$data = $conn->query('SELECT * FROM user u LEFT JOIN (bag b LEFT JOIN ( thing t LEFT JOIN (features_thing ft LEFT JOIN (kit k )ON k.kitId = ft.kitId) ON ft.thingId=t.thingId) ON t.thingId=b.thingId) on b.bagId=u.bagId WHERE u.userId='.$conn->quote($idUser));
foreach($data as $row) {
    print '<script language="javascript"> t("'.$row[userId].'","'.$row[thingId].'","'.$row[state].'","'.$row[urlImg].'","'.$row[attribute].'","'. $row[value].'")</script>';
}
?>
=======
//1 способ
$conn = new PDO('mysql:host=localhost; dbname=gamepc', profito, profito);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//2 способ
$link = mysql_connect('localhost','profito','profito');
mysql_select_db('gamepc');

$row = mysql_fetch_array(mysql_query("  SELECT `iduser` FROM `user` ORDER BY `iduser` DESC LIMIT 1",$link));//последний id
$qe=$row[0];

for($i=0;$i<=$qe;$i++){
$data = $conn->query('SELECT * FROM user WHERE iduser = ' . $conn->quote($i));
    foreach($data as $row) {
        print '<script language="javascript">lists("'.$row[1].'%'.$row[3].'%'.$row[5].'%'.$row[6].'%'.$row[7].'%'.$row[8].'")</script>';
    }
}


?>
>>>>>>> 952702c3c884b8ae00885f2d131cd77fb4034958
