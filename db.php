
<?php


    $dbName = 'contact_me';
    $dbPass = '';
    $dbUser = 'root';
    $host = 'localhost';

    $db = mysqli_connect($host, $dbUser, $dbPass, $dbName);

    if($db){
        // echo 'Database is connect';
    }else {
        die();
    }


?>