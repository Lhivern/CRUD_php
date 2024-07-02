<?php 
    include("dbcon.php");

    $id = $_GET['id'];
    $query = "DELETE FROM `pessoas` WHERE id = '$id'";

    $result = mysqli_query( $connection, $query);

    if (!$result) {
        die("Query falhou ".mysqli_error($connection));
    } else {
        header("location:index.php?delete_msg=Dados excluidos com sucesso");
    }
