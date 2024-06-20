<?php
// Start the session
session_start();

// Regenerate session ID to prevent session fixation
session_regenerate_id(true);

function SetMessage($message){
    $_SESSION["Message"] = $message;
}

function GetMessage(){
    if(isset($_SESSION["Message"])){
        $output = $_SESSION["Message"];
        $_SESSION["Message"] = null;
        return $output;
    }
}
?>
