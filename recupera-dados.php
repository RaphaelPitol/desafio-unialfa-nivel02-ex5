<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    </script>

</head>
<body>
    <h1 style="text-align: center;">Atividade 2 bimestre</h1>
    <main>
        <?php
        function mensageErro($msg)
        {
        ?>
            <script>
                Swal.fire('<?= $msg ?>').then((result) => {
                    history.back();
                })
            </script>
        <?php
        }
        ?>
        <?php
        if ($_POST) {
            $nome = $_POST['nome'] ?? NULL;
            $email = $_POST['email'] ?? NULL;
            $idade = $_POST['idade'] ?? NULL;
            $hobbie = $_POST['hobbie'] ?? NULL;
            if (strlen($nome) < 6) {
                mensageErro("Nome Invalido, caracteres menor que 6!");
            }
            if($idade < 18 ){
                mensageErro("Idade precisa ser maior que 18 anos!");
            }
            ?>
            <table class="table">
                <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Idade</th>
                <th>Hobbie</th>
                </tr>
                <tr>
                <?php
                foreach($_POST as $dado =>$dados){
                    ?>
                    <td><?= $dados?></td>
                    <?php
                }
                ?>
                </tr>
            </table>

            <?php
        }
        
        ?>
        <a href="formulario.php" class="btn btn-danger">Voltar</a>


    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>