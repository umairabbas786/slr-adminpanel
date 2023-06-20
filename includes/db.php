<?php 
    session_start();
    ob_start();

    $type = "local";

    if($type == "local") {

        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "slr";

        $conn = new mysqli($server, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }
    if($type == "live"){
        $server = "localhost";
        $username = "umairabbas786_umair";
        $password = "Devils@dvocate007";
        $dbname = "umairabbas786_slr";

        $conn = new mysqli($server, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }
?>