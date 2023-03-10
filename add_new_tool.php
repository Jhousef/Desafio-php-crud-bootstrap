<?php

require 'config.php';

if(isset($_POST['enviar-form'])){

    $nome           = filter_input(INPUT_POST, 'nome');
    $descricao      = filter_input(INPUT_POST, 'descricao');
    $valor          = filter_input(INPUT_POST, 'valor');
    $quantidade     = filter_input(INPUT_POST, 'quantidade');

    //VALIDAÇÃO
    if($nome && $descricao && $valor && $quantidade){
    $sql = $pdo->prepare('INSERT INTO ferramentas (nome, descricao, valor, quantidade) VALUES (:nome, :descricao, :valor, :quantidade) ');
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':descricao', $descricao);
    $sql->bindValue(':valor', $valor);
    $sql->bindValue(':quantidade', $quantidade);
    $sql->execute();

    header('Location: tool.php?msg=Novo registro criado com sucesso');
    exit;

    } else {
        header('Location: add_new_tool.php');
        exit;
    }

}

// include "./database/db_conexao.php";

// if(isset($_POST['enviar_form'])){
//     $nome   =   $_POST['nome'];
//     $data   =   $_POST['data_nasc'];
//     $desc   =   $_POST['desc'];
//     $senha  =   $_POST['senha'];

//     $sql = "INSERT INTO `usuario`(`id`, `nome`, `data_nasc`, `descricao`, `senha`) VALUES (NULL, '$nome', '$data', '$desc', '$senha')";

//     $res = mysqli_query($conexao, $sql);

//     if($res){
//         header("Location: ./user.php?msg=Novo registro criado com sucesso");
//     } else {
//         echo "Falha: " . mysqli_error($conexao);
//     }

// } 

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
        <span class="f-s-30">USUÁRIOS</span> 
    </nav>



    <div class="container">
        <div class="text-center mb-4">
            <h3>Adiconar nova ferramenta</h3>
            <p class="text-muted">preencha o formulário abaixo para adicionar uma nova ferramenta</p>
        </div>
            <div class="container d-flex justify-content-center">
                <div class="container-container">
                    <form action="" method="POST" style="width: 50vw; min-width: 300px;">
                        <div class="row">
                            <div class="col-6 m-0 mb-3">
                                <label class="form-label" for="nome">Nome:</label>
                                <input type="text"" id="nome" class="form-control" name="nome" placeholder="nome da ferramenta">
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="valor">Valor:</label>
                                <input type="number" id="valor" class="form-control" name="valor" placeholder="digite o valor">
                            </div>
                        </div>
                        <div class="row-12 mb-3">
                            <div class="mb-3">
                                <label class="form-label" for="desc">Descrição:</label>
                                <textarea name="descricao" id="desc" cols="30" rows="4" class="form-control" placeholder="descreva aqui..."></textarea>
                            </div>
                        </div>    
                        <div class="row mb-3">
                            <div class="col-12">
                                <label class="form-label" for="senha">Quantidade:</label>
                                <input type="number" class="form-control" name="quantidade" id="quantidade" placeholder="digite sua quantidade">
                            </div>
                        </div>
                        <div class="row-12">    
                            <div class="grid text-center mb-3">
                                <button type="submit" name="enviar-form" class="btn btn-secondary col-3" name="submit">Salvar</button>
                                <a href="tool.php" class="btn btn-danger col-3">Cancelar</a>
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
</body>

</html>