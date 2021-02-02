<?php
    //simple db query
    //pake mysqli object style

    //db setting, ganti sesuai konfigurasi
    $db_server = "localhost";
    $db_port = 3306;
    $db_name = "db1";
    $db_user = "root";
    $db_pass = "";

    //query
    $sql = "select * from mhs";

    $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
    
    $res = $conn->query($sql);

    // var_dump($res);
    while ($row = $res->fetch_assoc()) {
        var_dump($row);
    }

    $conn->close();

?>