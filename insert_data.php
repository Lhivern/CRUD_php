<?php
    include("dbcon.php");

    if(isset($_POST["add_pessoas"])) {
        $f_nome = $_POST["f_nome"];
        $f_sobrenome = $_POST["f_sobrenome"];
        $f_idade = $_POST["f_idade"];

        if($f_nome == "" || empty($f_nome)) {
            header("location:index.php?error_msg=O nome não pode ser vazio");
        } else {
            $query = "INSERT INTO `pessoas` (`nome`, `sobrenome`, `idade`) VALUES ('$f_nome', '$f_sobrenome', '$f_idade')";

            $result = mysqli_query($connection ,$query);

            if (!$result) {
                die("Query falhou: ". mysqli_error($connection));
            } else {
                header("location:index.php?insert_msg=Dados inseridos com sucesso");
            }
            
        }


    }
