<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta charset="windows-1252">
        <meta name ="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
        <!-- styles -->
        <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/css/dataTable.css" />
        


        <!-- Scripts -->
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/js/dataTable.js" type="text/javascript"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/js/dataTableB.js" type="text/javascript"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/js/helper.js" type="text/javascript"></script>
                
        <!-- Modules's Resources -->

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url( get_home_url() ); ?>/">&nbsp;CRUD</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="" id="navHome"><a href="<?php echo esc_url( get_home_url() ); ?>/">Home</a></li>
                        <li class="" id="navProdutos"><a href="<?php echo esc_url( get_home_url() ); ?>/produto">Produtos</a></li>
                        <li class="" id="navClientes"><a href="<?php echo esc_url( get_home_url()); ?>/cliente">Clientes</a></li>
                        <li class="" id="navPedidos"><a href="<?php echo esc_url( get_home_url() ); ?>/pedido">Pedidos</a></li>
                    </ul>
                    
                </div><!--/.nav-collapse -->
            </div>
        </nav>

            <div class="container">
            
            
        
            
