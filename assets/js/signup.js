/*
--------------------------------------------------------
OMT © 2022
Thomas GOILLOT
-------------------------------------------------------- 
*/
function runscriptparam(){

    const request = new XMLHttpRequest();

    request.open("GET","script.php?param=test");
    
    request.onreadystatechange = function(){

        if(request.readyState === 4){

            const res = request.responseText;
            console.log(res);
            const div = document.getElementById("content");
            div.innerHTML += "<p>" + res + "</p>    ";            
        }
        
    };
    
    request.send();

}