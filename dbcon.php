<?php 
    define("HOSTNAME", "localhost");
    define("USERNAME", "admin");
    define("PASSWORD", "admin");
    define("DATABASE", "crud_basics");

    $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    if(!$connection) {
        die("Connection Failed". mysqli_connect_error());
    }
