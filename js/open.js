function open(uName){
    var cooki = document.cookie,
        getCo=cooki.split("=");
    window.location.href='indexpc.php?message='+encodeURIComponent(""+uName);
}

function message(){
    var name = document.getElementById('massag').value,
        key = document.getElementById('key').value;

    var regular = /^[a-zA-Zа-яА-Я]+$/;
    (regular.test(name))?window.location.href='index.php?message='+encodeURIComponent(""+name+"!"+key):alert('Некорректно введено имя пользователя');
}

function registration(){
    var nameRegistration =document.getElementById('nameRegistration').value,
        emailRegistration=document.getElementById('emailRegistration').value,
        keyRegistration=document.getElementById('keyRegistration').value;
        window.location.href='registration.php?message='+encodeURIComponent(""+nameRegistration+"!"+keyRegistration+"!"+emailRegistration);

}
function entrance(){
    window.location.href='index.php?message=';
}
