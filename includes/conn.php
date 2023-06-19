<?php 
    $type = "local";

    if($type == "local") {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "slr";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }
    if($type == "live"){
        $servername = "localhost";
        $username = "umairabbas786_umair";
        $password = "Devils@dvocate007";
        $dbname = "umairabbas786_slr";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }
?>