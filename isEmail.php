<?php
function isEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
$email = "user@example.com";
if(isEmail($email) != false){
    // do something
}else{
    // do something
}