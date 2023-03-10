<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>Ferramentas</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->


    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/lib/weather-icons.css" rel="stylesheet" />
    <link href="css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


    <nav class="navbar navbar-light justify-content-center mb-5" style="background-color: #343957; color: white; padding: 20px;">
        <span class="f-s-30">FERRAMENTAS</span> 
    </nav>


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="col-lg-12">
                            <div class="card">
                            <?php
                            
                                if(isset($_GET['msg'])) {
                                    $msg = $_GET['msg'];
                                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    ' . $msg . '
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                                }
                            
                            ?>
                                <div class="row">
                                    <div class="card-title col-lg-8">
                                        <span><a href="add_new_tool.php" class="link-dark"><i class="f-s-20 mr-2 bi bi-person-fill-add"></i>nova ferramenta</a></span>
                                    </div>
                                    <div class="card-title col-lg-4 text-right">
                                        <span><a href="index.php" class="link-dark">Página Inicial </a></span>|
                                        <span><a href="user.php" class="link-dark">Usuários</a></span>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-center student-data-table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th class="col-2">Nome</th>
                                                    <th class="col-3">Descrição</th>
                                                    <th class="col-2">Valor</th>
                                                    <th>Quantidade</th>
                                                    <th class="col-1">Opções</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                
                                                    require 'config.php';                                                    

                                                    $lista  = [];
                                                    $sql = $pdo->query('SELECT * FROM ferramentas');
                                                    if($sql->rowCount() > 0){
                                                        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
                                                    }
                                                        
                                                    // código antigo
                                                    // $sql    = "SELECT * FROM `ferramentas`";
                                                    // $result = mysqli_query($conexao, $sql);
                                                    // while($row = mysqli_fetch_assoc($result)) {
                                                
                                                ?>
                                                <?php
                                                    foreach($lista as $usuario) {
                                                ?>
                                                <tr>
                                                        
                                                    <td><?=$usuario['id'];?></td>
                                                    <td><?=$usuario['nome'];?></td>
                                                    <td><?=$usuario['descricao'];?></td> 
                                                    <td><?=$usuario['valor'];?></td>
                                                    <td><?=$usuario['quantidade'];?></td>

                                                    <!-- código antigo -->
                                                    <!-- 
                                                    <td><#?php #echo $row['id']         ?></td>
                                                    <td><#?php #echo $row['nome']       ?></td>
                                                    <td><#?php #echo $row['descricao']  ?></td>
                                                    <td><#?php #echo $row['data_nasc']  ?></td>
                                                    <td><#?php #echo $row['senha']      ?></td> -->

                                                    <td>
                                                        <a href="edit_tool.php?id=<?=$usuario['id']; ?>" class="f-s-20 pr-3" style="color: black;"><i class="bi bi-pencil-square fs5"></i></a>
                                                        <a href="delete_tool.php?id=<?= $usuario['id']; ?>" onclick="return confirm('certeza que deseja excluir?')" class="f-s-20 me-3" style="color: black;"><i class="bi bi-trash3-fill"></i></a>

                                                        <!-- código antigo -->
                                                        <!-- 
                                                        <a href="edit_user.php?id=<#?= $row['id']; ?>" class="f-s-20 pr-3" style="color: black;"><i class="bi bi-pencil-square fs5"></i></a>
                                                        <a href="delete_user.php?id=<#?=  $row['id']; ?>" class="f-s-20 me-3" style="color: black;"><i class="bi bi-trash3-fill"></i></a> -->
                                                    </td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <!-- scripit init-->
    <script src="js/dashboard2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>