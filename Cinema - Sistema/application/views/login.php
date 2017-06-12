<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - AskCine</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <link href="<?php echo base_url(); ?>assets/skins/flat/red.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>js/icheck.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/estilo.css"> </head>

<body>

<div class="col-lg-5 col-lg-offset-2">
    <!-- //HEADER -->
    <div class="row align-center container">
        <div class="small-12 small-centered text-center columns">
            <h1 class="invisible">AskCine</h1><img src="../../assets/img/blank.jpg" alt="logo AskCine"></div>
    </div>
    <div class="containerzao">
        <div class="row align-center container">
            <div class="small-12 small-centered text-center columns" id="login">
                <h1>Login</h1> </div>
        </div>
        <!-- fim do header -->
        <!-- login -->
        <div class="row align-center container">
            <div class="small-12 small-centered columns">
                <h2 class="text-center">Faça o seu LOGIN</h2> 
                    
         <form action="" method="POST">
        <div class="row">
            <label for="username">Apelido:</label>
            <input class="form-control" name="username" id="username" type="text" required>
        </div>
                </div>

        <div class="form-group">
            <label for="password">Senha:</label>
            <input class="form-control" name="password" id="password" type="password">
        </div>
                 <div>
            <button class="button" name="login">Login</button>
        </div>
                <a class="button" href="registrar">Cadastre-se</a>


    <?php if (isset($_SESSION['success'])) { ?>
        <div class="callout success"> <?php echo $_SESSION['success']; ?></div>
    <?php
    } ?>

    <?php if (isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger"> <?php echo $_SESSION['error']; ?></div>
    <?php
    } ?>
    <?php echo validation_errors('<div class="callout alert">', '</div>'); ?>
</div>
        </div>
    <footer>
            <div class="row">
                <br>
                <br>
                <br>
                <br> </div>
            <div class="fim">
                <div class="text-center">
                    <p>AskCine - 2016</p>
                </div>
            </div>
        <script src="<?php echo base_url(); ?>assets/js/vendor/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>js/vendor/what-input.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/vendor/foundation.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/responsive-nav.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/scroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/fixed-responsive-nav.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/funcao.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/fonte.js"></script>
        <script>
            $(document).foundation();
        </script>
</body>
</html>