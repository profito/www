﻿<!DOCTYPE html>
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
        <div id='MainMenu'></div>
        <div id="WindowLocations"></div>

        <!--Шаблон основного окна -->
        <script type="text/html" id="Locations" >
            <div id="<%= ImgLocations %>">
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
                            <div id="<%= monster %>" onclick='<%= monsterClick %> '> Monster </div>
                        </ul>
                    </div>
                    <div id="<%= BossLocations %>"></div>
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


</html>
