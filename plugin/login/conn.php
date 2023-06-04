<?php 
        //Microsoft Azure Database connection PHP script by Hyperactive Digital Studios

        $serverName = "tcp:servername.database.windows.net,1433";

        $connectionOptions = array(
            "Database" => "carvenienceLogin",
            "UID" => "hyperact",
            "PWD" => "WuRu!!!2747"
        );

        $conn = sqlsrv_connect($serverName,
        $connectionOptions);
        ?>