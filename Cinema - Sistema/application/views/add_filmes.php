<!DOCTYPE html>
<html lang="pt-br">
<head>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastrar Filme - AskCine</title>
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
                <h1>Adicionar Filmes</h1> </div>
        </div>
        <!-- fim do header -->
    <?php if (isset($_SESSION['success'])) { ?>
         <div class="callout success">  <?php echo $_SESSION['success']; ?></div>
    <?php
    } ?>
    <?php echo validation_errors('<div class="callout alert">', '</div>'); ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="titulo">Titulo do Filme</label>
            <input class="form-control" name="titulo" id="titulo" type="text" required>
        </div>

        <div class="form-group">
            <label for="genero">genero do filme</label>
            <input class="form-control" name="genero" id="genero" type="text" required>
        </div>

        <div class="form-group">
            <label for="legenda">legenda do filme</label>
            <input class="form-control" name="legenda" id="legenda" type="text" required>
        </div>
        
        <div class="form-group">
            <label for="audio">audio do filme</label>
            <input class="form-control" name="audio" id="audio" type="text" required>
        </div>
        
        <div class="form-group">
            <label for="video">video do filme</label>
            <input class="form-control" name="video" id="video" type="text" required>
        </div>   
        
        <div class="form-group">
            <label for="origem">origem do filme</label>
            <input class="form-control" name="origem" id="origem" type="text" required>
        </div>   
            
        
        <div class="form-group">
            <label for="ator">ator principal</label>
            <input class="form-control" name="ator" id="ator" type="text" required>
        </div>
            
        
        <div class="form-group">
            <label for="diretor">diretor do filme</label>
            <input class="form-control" name="diretor" id="diretor" type="text" required>
        </div>
        
        <div class="form-group">
            <label for="imagem">imagem do filme</label>
            <input class="form-control" name="imagem" id="imagem" type="text" required>
        </div>
        <div class="form-group">
            <label for="youtube">link youtube do filme</label>
            <input class="form-control" name="youtube" id="youtube" type="text" required>
        </div>
        <div>
            <button class="button small-centered text-center" name="add">Cadastrar Filme</button>
        </div>
    </form>
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