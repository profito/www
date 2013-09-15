function open(nameUser){
    window.location.href='indexpc.php?message='+encodeURIComponent(""+nameUser);
}

function message(){
    var name = document.getElementById('massag').value;
    var key = document.getElementById('key').value;

    var regular = /^[a-zA-Zа-яА-Я]+$/;
    (regular.test(name))?window.location.href='index.php?message='+encodeURIComponent(""+name+"!"+key):alert('Некорректно введено имя пользователя');
}