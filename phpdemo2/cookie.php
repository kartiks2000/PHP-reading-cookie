<?php

    // $name = "kartik";
    // $value = 28022001;
    // $expiration = time() + (60*60*24*7);

    // setcookie($name,$value,$expiration);

    if(isset($_COOKIE['kartik'])){

        $x = $_COOKIE['kartik'];

        echo "the value of the cookie is...  " . $x;

    }
    else{
        echo "sorry no cookie found....";
    }

?>

<html>
    <head>
        <title>reading cookie...</title>
    </head>
    <body>
        <h1>Reading cookie...</h1>
    </body>
<html>