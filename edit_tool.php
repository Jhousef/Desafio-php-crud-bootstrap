<?php
require "config.php";



if(isset($_POST['atualizar'])){
    $id                 =   filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome               =   filter_input(INPUT_POST, 'nome');
    $valor              =   filter_input(INPUT_POST, 'valor');
    $descricao          =   filter_input(INPUT_POST, 'descricao');
    $quantidade         =   filter_input(INPUT_POST, 'quantidade');

    if($nome && $valor && $descricao && $quantidade){

        $sql = $pdo->prepare('UPDATE ferramentas SET nome=:nome, valor=:valor, descricao=:descricao, quantidade=:quantidade WHERE id=:id ');
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':valor', $valor);
        $sql->bindValue(':descricao', $descricao);
        $sql->bindValue(':quantidade', $quantidade);
        $sql->bindValue(':id', $id);
        $sql->execute();

        header('Location: tool.php');
        exit;
    } else {
        header('Location: edit_tool.php');
        exit;
    }


    // código antigo
    // $sql = "UPDATE app.usuario
    // SET nome='$nome', data_nasc='$data', descricao='$desc', quantidade='$quantidade'
    // WHERE id= '$id'
    // ";

    // $res = mysqli_query($conexao, $sql);

    // if($res){
    //     header("Location: ./user.php?msg=Dados atualizado com sucesso");
    // } else {
    //     echo "Failed: " . mysqli_error($conexao);
    // }

} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>Usuario</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->


    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


    <nav class="navbar navbar-light justify-content-center mb-5" style="background-color: #343957; color: white; padding: 20px;">
        <span class="f-s-30">FERRAMENTAS</span> 
    </nav>
    
    <?php 

        //Validação
        $info   = [];

        $id             = filter_input(INPUT_GET, 'id');
        $nome           = filter_input(INPUT_POST, 'nome');
        $descricao      = filter_input(INPUT_POST, 'descricao');
        $valor          = filter_input(INPUT_POST, 'valor');
        $quantidade     = filter_input(INPUT_POST, 'quantidade');

        if($id){

            $sql = $pdo->prepare('SELECT * FROM ferramentas WHERE id = :id');
            $sql->bindValue(':id', $id);
            $sql->execute();

            if($sql->rowCount() > 0){

                $info = $sql->fetch( PDO::FETCH_ASSOC );
                $info['id'];

            } else {
                header('Location: tool.php');
                exit;
            }

        }

    // antigo código
    // $id     = $_GET['id'];
    // $sql    = "SELECT * FROM `usuario` WHERE id = $id LIMIT 1";
    // $res    = mysqli_query($conexao, $sql);
    // $row    = mysqli_fetch_assoc($res);
    ?>

    <div class="container">

        <div class="text-center mb-4">
            <h3>Editar informações da ferramenta</h3>
            <p class="text-muted">clique em atualizar depois de alterar qualquer informação</p>
        </div>
            <div class="container d-flex justify-content-center">
                <div class="container-container">
                    <form action="" method="POST" style="width: 50vw; min-width: 300px;">
                        <div class="row">
                            <div class="col-6 m-0 mb-3">
                                <label class="form-label" for="nome">Nome:</label>
                                <input type="text" id="nome" class="form-control" name="nome" value="<?=$info['nome'];?>">
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="valor_id">Valor:</label>
                                <input type="number" id="valor_id" class="form-control" name="valor" value="<?=$info['valor'];?>">
                            </div>
                        </div>
                        <div class="row-12 mb-3">
                            <div class="mb-3">
                                <label class="form-label" for="desc">Descrição:</label>
                                <textarea name="descricao" id="desc" cols="30" rows="4" class="form-control" value=""><?=$info['descricao']; ?></textarea>
                            </div>
                        </div>    
                        <div class="row mb-3">
                            <div class="col-12">
                                <label class="form-label" for="quantidade_id">Quantidade:</label>
                                <input type="number" class="form-control" name="quantidade" id="quantidade_id" value="<?=$info['quantidade']; ?>">
                            </div>
                        </div>
                        <div class="row-12">    
                            <div class="grid text-center mb-3">
                                <button type="submit" name="atualizar" class="btn btn-secondary col-3" name="submit">Atualizar</button>
                                <a href="./tool.php" class="btn btn-danger col-3">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>

    


    <!-- jquery vendor -->
    <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="js/lib/menubar/sidebar.js"></script>
    <script src="js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="js/lib/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="js/lib/weather/weather-init.js"></script>
    <script src="js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="js/lib/chartist/chartist.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>