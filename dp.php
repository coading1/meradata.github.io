<?php

    $server = "sql300.epizy.com";
    $usernam = "epiz_31550376";
    $password = "mAibLr4Ao2er0w8";
    $dbname = "epiz_31550376_merainfo";

    $conn = mysqli_connect($server, $usernam, $password, $dbname)

    if(!$conn){
        die("Connection Faile:d".mysqli_connect_error());
    }

?>