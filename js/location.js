var Window;

Window = function(obj){
    var a;
    for (a in obj){
        if(obj.hasOwnProperty(a)){
            this[a] = obj[a];
        }
    }
};
Window.prototype= {
    newWindow: function(obj){
        document.getElementById('WindowLocations').innerHTML = tmpl('Locations')({ImgLocations:"ImgLocations",ImgLocation:"ImgLocation",ImgLocationsDescription:"ImgLocationsDescription",MenuLocations:"MenuLocations",MoveLocations:"MoveLocations",next:"next",back:"back",boss:"boss",shop:"shop",monster:"monster", monsterClick:"Window.prototype.battleWindow(); fight();",BossLocations:"BossLocations"});
    },

    battleWindow: function(){
     document.getElementById('WindowLocations').innerHTML = tmpl('fight')({StringName:'StringName', NameHero:'NameHero',NameAntiHero:'NameAntiHero', windowsHero:'windowsHero',logFight:'logFight', skills:'skills',skillsOne:'skillsOne',skillsTwo:'skillsTwo',skillsThree:'skillsThree',skillsFour:'skillsFour',skillsFive:'skillsFive',skillsSix:'skillsSix',windowsBattle:'windowsBattle',field:'field',roller:'roller',windowsAntiHero:'windowsAntiHero',windowsXPAntiHero:'windowsXPAntiHero'});
    }
}

function fight(){
    var roller = document.getElementById("roller"),
        i=0;
    var route= 'bottom';
    setInterval(function(){
        if(route == 'bottom'){
            (i<=225)? roller.style.top=i+++'px' : route = 'top';
        }else{
            (i>60)? roller.style.top=i--+'px' : route ='bottom';
        }
    },0.1);

    var s1 = document.getElementById('skillsOne'),
        s2 = document.getElementById('skillsTwo'),
        s3 = document.getElementById('skillsThree'),
        s4 = document.getElementById('skillsFour'),
        s5 = document.getElementById('skillsFive'),
        s6 = document.getElementById('skillsSix'),
        windowsXPAntiHero = document.getElementById('windowsXPAntiHero'),
        XPAntiHero=500;

    s1.addEventListener("click",function (){ sc1();});
    s2.addEventListener("click",function (){ sc2();});
    s3.addEventListener("click",function (){ sc3();});
    s4.addEventListener("click",function (){ sc4();});
    s5.addEventListener("click",function (){ sc5();});
    s6.addEventListener("click",function (){ sc6();});

    XP(500);

    function sc1(){
        XPAntiHero=XPAntiHero-(i/1);
        XP(XPAntiHero);
    }
    function sc2(){
        XPAntiHero=XPAntiHero-(i/2);
        XP(XPAntiHero);
    }
    function sc3(){
        XPAntiHero=XPAntiHero-(i/3);
        XP(XPAntiHero);
    }
    function sc4(){
        XPAntiHero=XPAntiHero-(i/4);
        XP(XPAntiHero);
    }
    function sc5(){
        XPAntiHero=XPAntiHero-(i/5);
        XP(XPAntiHero);
    }
    function sc6(){
        XPAntiHero=XPAntiHero-(i/6);
        XP(XPAntiHero);
    }
    function XP(XP){
        if (XP>=0){  windowsXPAntiHero.innerHTML=XP }
        else{
        alert('вы выиграли!');
        Hero.prototype.newWindow(XPAntiHero);

        }
    }
}
