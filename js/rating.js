﻿document.getElementById('rating').addEventListener("click",function (){ clickRating()});
<<<<<<< HEAD
document.getElementById('menuUser').addEventListener("click",function (){ clickMenuUser()});
function clickRating(){
    document.getElementById('WindowMenu').style.display="block";
    document.getElementById('MenuUser').style.display="none";

}
function clickMenuUser(){
    document.getElementById('MenuUser').style.display="block";
    document.getElementById('WindowMenu').style.display="none";
=======
function clickRating(){
    document.getElementById('WindowMenu').style.display="block";
>>>>>>> 952702c3c884b8ae00885f2d131cd77fb4034958

}
function lists(q){
    userRating= q.split('%');
    document.getElementById('olMenu').innerHTML += tmpl('Rating')({elementList:"<td>"+userRating[0]+"</td>"+"<td>"+userRating[1]+"</td>"+"<td>"+userRating[2]+"</td>"+"<td>"+userRating[3]+"</td>"+"<td>"+userRating[4]+"<td>"+userRating[5]+"</td>"});

}
<<<<<<< HEAD
<!-- мешок-->
function bag(name){
    thing=name.split(",");

    document.getElementById('thing1').style.background="url('../images/"+thing[1]+"')";
    document.getElementById('thing2').style.background="url('../images/"+thing[2]+"')";
    document.getElementById('thing3').style.background="url('../images/"+thing[3]+"')";
    document.getElementById('thing4').style.background="url('../images/"+thing[4]+"')";
    document.getElementById('thing5').style.background="url('../images/"+thing[5]+"')";
}
=======
>>>>>>> 952702c3c884b8ae00885f2d131cd77fb4034958
