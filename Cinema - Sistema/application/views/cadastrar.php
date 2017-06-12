<!DOCTYPE html>
<html lang="pt-br">
<head>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrar - AskCine</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <link href="<?php echo base_url(); ?>assets/skins/flat/red.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>js/icheck.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/estilo.css"> </head>
<body>
<!-- //HEADER -->
    <div class="row align-center container">
        <div class="small-12 small-centered text-center columns">
            <h1 class="invisible">AskCine</h1><img src="../../assets/img/blank.jpg" alt="logo AskCine"></div>
    </div>
    <div class="containerzao">
        <div class="row align-center container">
            <div class="small-12 small-centered text-center columns" id="login">
                <h1>Cadastro</h1> </div>
        </div>
        <!-- fim do header -->
    <?php if (isset($_SESSION['success'])) { ?>
         <div class="callout success">  <?php echo $_SESSION['success']; ?></div>
    <?php
    } ?>
    <?php echo validation_errors('<div class="callout alert">', '</div>'); ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="username">Apelido:</label>
            <input class="form-control" name="username" id="username" type="text" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" name="email" id="email" type="email" required>
        </div>

        <div class="form-group">
            <label for="password">Senha:</label>
            <input class="form-control" name="password" id="password" type="password">
        </div>

        <div class="form-group">
            <label for="password">Confirme a senha:</label>
            <input class="form-control" name="password2" id="password" type="password">
        </div>

        
        <div>
            <button class="button small-centered text-center" name="register">Cadastre</button>
        </div>
    </form>
        <a class="button" href="login">Login</a>
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
        </footer>
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