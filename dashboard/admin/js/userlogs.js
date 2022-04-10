/*
 * Created on Mon Apr 04 2022
 *
 * Copyright (c) 2022 Thomas GOILLOT
 */

//REFRESH DATA AJAX METHOD//
window.onload = () => {
    setInterval(userlog_header, 15000); //each 15sec try if new product
}

/* function refresh_userlog(){
    userlog_list();
    userlog_header();
}

function userlog_list(){
    const request = new XMLHttpRequest();

    request.open("GET","/ajax/refresh_userlog_list.php");
    
    request.onreadystatechange = function(){

        if(request.readyState === 4){
            const res = request.responseText;
            const div = document.getElementById("userlog_list");
            div.innerHTML = res;
        }
    };
    
    request.send();
} */

function userlog_header() {
    const request = new XMLHttpRequest();

    request.open("GET","/ajax/refresh_userlog_header.php");
    
    request.onreadystatechange = function(){

        if(request.readyState === 4){
            const res = request.responseText;
            const div = document.getElementById("userlog_header");
            div.innerHTML = res;
        }
    };

    request.send();
}

function search_user(){
    let x = document.getElementById("search-user").value;    

    const request = new XMLHttpRequest();

        request.open("GET","/ajax/search_user.php?q="+x);
        
        request.onreadystatechange = function(){
            if(request.readyState === 4){
                const res = request.responseText;
                const div = document.getElementById("userlog_list");
                div.innerHTML = res;
            }
        };
        
    request.send();
}