<?php


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>Pagina Inicial de JHouuSEF</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->


    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/lib/weather-icons.css" rel="stylesheet" />
    <link href="css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="index.php">
                            <!-- <img src="images/logo.png" alt="" /> --><span>JHouuSEf</span></a></div>
                    <li class="label">Menu</li>

                    <li><a href="user.php"><i class="ti-user"></i>Usuários</a></li>
                    <li><a href="tool.php"><i class="bi bi-tools"></i>Ferramentas</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">Jhousef
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <!-- <div class="dropdown-content-heading">
                                        <span class="text-left"></span>>
                                    </div> -->
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Seja bem-vindo, <span>você está na página de usuários e ferramentas</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <!-- <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div> -->
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <a href="./user.php"><div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i></a> 
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total de Usuarios</div>
                                        <?php
                                            require 'config.php';

                                            $sql = $pdo->prepare('SELECT * FROM usuarios');
                                            $sql->execute();

                                            $total_de_usuarios = $sql->rowCount();
                                        ?>
                                        <div class="stat-digit"><?=$total_de_usuarios;?></div>
                                    </div>
                                </div>
                            </div>                         
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <a href="./tool.php"><div class="stat-icon dib"><i class="ti-bag color-success border-success"></i></a> 
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total de Ferramentas</div>
                                        <?php 
                                            require 'config.php';

                                            $sql = $pdo->prepare('SELECT * FROM ferramentas');
                                            $sql->execute();
                                            
                                            $total_de_ferramentas = $sql->rowCount();
                                        ?>
                                        <div class="stat-digit"><?=$total_de_ferramentas;?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Footer -->       
                    <div class="row" style="margin-top: 600px;">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p class="text-center">2018 © Admin Board. - <a href="#">jhou</a></p>
                            </div>
                        </div>
                    </div>
                </section>
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
    <script src="js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="js/dashboard2.js"></script>
</body>

</html>
