<?php
    include ("header.php"); 
    include ("dbcon.php");

    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $query = "SELECT * FROM `pessoas` WHERE `id` = '$id'";

            $result = mysqli_query($connection, $query);

            if (!$result) { 
                die("Query falhou". mysqli_error($connection));
            } else {
                $row = mysqli_fetch_row($result);
                $nome = $row[1];
                $sobrenome = $row[2];
                $idade = $row[3];
            }
                
    }

    if (isset($_POST["update_pessoas"])) {
        $id = $_POST["f_id"];
        $nome = $_POST['f_nome'];
        $sobrenome = $_POST['f_sobrenome'];
        $idade = $_POST['f_idade'];

        $query = "UPDATE `pessoas` SET `nome` = '$nome', `sobrenome` = '$sobrenome', `idade` = '$idade' WHERE `id` = '$id'";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query falhou" . mysqli_error($connection));
        } else {
            header("location:index.php?update_msg=Dados alterados com sucesso");
        }
    }
?>
    
<form action="update_data.php" method="post">
    <div class="form-group" hidden="true">
        <input type="text" name="f_id" class="form-control" value="<?php echo $id ?>">
    </div>
    <div class="form-group">
        <label for="f_nome">Nome</label>
        <input type="text" name="f_nome" class="form-control" value="<?php echo $nome ?>">
    </div>
    <div class="form-group">
        <label for="f_sobrenome">Sobrenome</label>
        <input type="text" name="f_sobrenome" class="form-control" value="<?php echo $sobrenome ?>">
    </div>
    <div class="form-group">
        <label for="f_idade">Idade</label>
        <input type="text" name="f_idade" class="form-control" value="<?php echo $idade ?>">
    </div>
    <input type="submit" class="btn btn-success" name="update_pessoas" value="ALTERAR">
</form>

<?php
    include ("footer.php");
?>