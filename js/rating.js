﻿document.getElementById('rating').addEventListener("click",function (){ clickRating()});
function clickRating(){
    document.getElementById('WindowMenu').style.display="block";

}
function lists(q){
    userRating= q.split('%');
    document.getElementById('olMenu').innerHTML += tmpl('Rating')({elementList:"<td>"+userRating[0]+"</td>"+"<td>"+userRating[1]+"</td>"+"<td>"+userRating[2]+"</td>"+"<td>"+userRating[3]+"</td>"+"<td>"+userRating[4]+"<td>"+userRating[5]+"</td>"});

}
