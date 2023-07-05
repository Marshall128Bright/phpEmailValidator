<?php

$res = "";

 function isEmailValid($email){
        if(preg_match("/^([a-z]|[0-9])([a-z]|[0-9]|\.)+\@.+\.([a-z]\.)*[a-z]+$/i",$email) ==1){ //"/(^[a-z]|[0-9]|\.)+\@[a-z]+\.[a-z]+/i"
            emailBeakDown($email);
        }else{
            echo "<p>".$email. " is a not valid email address</p>";
        }
        
}

function emailBeakDown($email){
    $emailParts = explode("@",$email);
    echo "<p>". $email." has a valid email address format</p>";
    echo "<p> username: ". $emailParts[0]."</p>";
    echo "<p> website address: www.". $emailParts[1]."</p>";
    
}





?>