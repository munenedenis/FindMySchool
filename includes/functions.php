<?php
//this file is the place to store all basic functions

function mysql_prep($value) {
    $magic_quotes_active = get_magic_quotes_gpc();
    $new_enough_php = function_exists("mysql_real_escape_string");
    //i.e. PHP >= v 4.3.0
    if($new_enough_php) { //PHP v 4.3.0 or higher
        //undo any magic effect to mysql_real_escape_string can do the work
        if($magic_quotes_active){ $value = stripslashes( $value ); }
        $value = mysql_real_escape_string($value);
        } else { //before PHP v. 4.3.0
            //if magic quotes arent already on then add slashes manually
            if(!$magic_quotes_active) { $value = addslashes ($value); }
            //if magic quotes are active then the slashes already exist
            
            
        }
    return $value;
}


function redirect_to($location = NULL) {
    if($location != NULL) {
    header("Location: ($location)");
    exit;
    }
}

function confirm_query($result_set){}



?>