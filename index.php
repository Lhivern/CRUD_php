<?php 
    include('header.php');
    include('dbcon.php');
?>

<div class="box1">
    <h2>Todos os registros</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addpessoasModal">ADICIONAR PESSOAS</button>
</div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Idade</th>
            <th>Alterar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $query = "SELECT * FROM `pessoas`";

            $result = mysqli_query($connection, $query);

            if (!$result) { 
                die("Query falhou". mysqli_error($connection));
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nome']; ?></td>
                        <td><?php echo $row['sobrenome']; ?></td>
                        <td><?php echo $row['idade']; ?></td>
                        <td><a href="update_data.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Editar</a></td>
                        <td><a href="delete_data.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Excluir</a></td>
                    </tr>
                    <?php
                }
            }
        ?>
    </tbody>
</table>

<?php
    if (isset($_GET["error_msg"])){
        echo "<h6 class='error'>".$_GET["error_msg"]."</h6>";
    }

    if (isset($_GET["insert_msg"])) {
        echo "<h6 class='success'>" . $_GET["insert_msg"] . "</h6>";
    }

    if (isset($_GET["update_msg"])) {
        echo "<h6 class='success'>" . $_GET["update_msg"] . "</h6>";
    }

    if (isset($_GET["delete_msg"])) {
        echo "<h6 class='error'>" . $_GET["delete_msg"] . "</h6>";
    }

?>

<!-- Modal -->
<form action="insert_data.php" method="post">
    <div class="modal fade" id="addpessoasModal" tabindex="-1" aria-labelledby="addpessoasModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addpessoasModalLabel">Adicionar Pessoas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="f_nome">Nome</label>
                        <input type="text" name="f_nome" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="f_sobrenome">Sobrenome</label>
                        <input type="text" name="f_sobrenome" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="f_idade">Idade</label>
                        <input type="text" name="f_idade" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-success" name="add_pessoas" value="Adicionar">
                </div>
            </div>
        </div>
    </div>
</form>

<?php
    include ('footer.php');
?>