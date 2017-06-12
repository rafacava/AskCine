<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editar Filme - AskCine</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <link href="<?php echo base_url(); ?>assets/skins/flat/red.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>js/icheck.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/estilo.css"> </head>

<body>
    <!-- //MENU -->
    <!-- //MENU --><a id="home"></a>
    <div class="row ">
        <header>
            <nav class="nav-collapse">
                <ul>
                    <li class="menu-item"><a href="index.html" data-scroll>Home</a></li>
                    <li class="menu-item  active"><a href="#busca" data-scroll>Busca</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <!-- //FIM DO MENU -->
    <!-- //HEADER -->
    <div class="row align-center container">
        <div class="small-12 small-centered text-center columns"><h1 class="invisible">AskCine</h1><img src="img/blank.png" alt="logo"></div>
    </div>
    <!-- //FIM DO HEADER -->

    <br>
    <br>
    <br>
    <!-- //GALERIA -->
    <a id="resultado"></a>
    <h3 class="text-center">Todos os Registros de Filmes</h3>
    <br>
    <div class="row small-10 small-up-1 medium-up-2 large-up-4 small-centered text-center">
          <?php if (isset($_SESSION['success'])) { ?>
         <div class="callout success">  <?php echo $_SESSION['success']; ?></div>
    <?php
    } ?>
    <?php echo validation_errors('<div class="callout alert">', '</div>'); ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="titulo">Titulo do Filme</label>
            <input class="form-control" name="titulo" id="titulo" type="text" value="<?php echo $filme->titulo ?>" required>
        </div>

        <div class="form-group">
            <label for="genero">genero do filme</label>
            <input class="form-control" name="genero" id="genero" type="text" value="<?php echo $filme->genero ?>" required>
        </div>

        <div class="form-group">
            <label for="legenda">legenda do filme</label>
            <input class="form-control" name="legenda" id="legenda" type="text" value="<?php echo $filme->legenda ?>" required>
        </div>
        
        <div class="form-group">
            <label for="audio">audio do filme</label>
            <input class="form-control" name="audio" id="audio" value="<?php echo $filme->audio ?>" type="text" required>
        </div>
        
        <div class="form-group">
            <label for="video">video do filme</label>
            <input class="form-control" name="video" id="video" type="text" value="<?php echo $filme->video ?>" required>
        </div>   
        
        <div class="form-group">
            <label for="origem">origem do filme</label>
            <input class="form-control" name="origem" id="origem" type="text" value="<?php echo $filme->origem ?>" required>
        </div>   
            
        
        <div class="form-group">
            <label for="ator">ator principal</label>
            <input class="form-control" name="ator" id="ator" type="text" value="<?php echo $filme->ator ?>" required>
        </div>
            
        
        <div class="form-group">
            <label for="diretor">diretor do filme</label>
            <input class="form-control" name="diretor" id="diretor" type="text" value="<?php echo $filme->diretor ?>" required>
        </div>
        
        <div class="form-group">
            <label for="imagem">imagem do filme</label>
            <input class="form-control" name="imagem" id="imagem" type="text" value="<?php echo $filme->imagem ?>" required>
        </div>
        <div class="form-group">
            <label for="youtube">link youtube do filme</label>
            <input class="form-control" name="youtube" id="youtube" type="text" value="<?php echo $filme->youtube ?>" required>
        </div>
        <div>
            <button class="button small-centered text-center" name="update">Editar Filme</button>
        </div>
    </form>
</div>
   
    <!-- //FIM DA GALERIA -->
    <footer>
        <div class="row">
            <div class="small-12 medium-6 large-6 columns">
                <br>
                <h5>Projeto AskCine, elaborado por:</h5>
                <br>
                <p>Almir Baptista</p>
                <p>Lucas Figueiredo</p>
                <p>Luiz Fernando</p>
                <p>Rafael Cavalcante</p>
                <br>
                <br> </div>
            <div class="small-12 medium-6 large-6 columns">
                <br>
               
            </div>
        </div>
        <div class="fim">
            <div class="text-center">
                <p>AskCine - 2016</p>
            </div>
        </div>
    </footer>
        <!-- //SCRIPTS -->
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