function open(nameUser){
    window.location.href='indexpc.php?message='+encodeURIComponent(""+nameUser);
}

function message(){
    var name = document.getElementById('massag').value;
    var regular = /^[а-яА-Я]+$/;
    (regular.test(name))?window.location.href='index.php?message='+encodeURIComponent(""+name):alert('Некорректно введено имя пользователя');
}