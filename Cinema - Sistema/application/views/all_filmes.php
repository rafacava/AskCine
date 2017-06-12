<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Listar Filme - AskCine</title>
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
        <table>
        <tr>
        <th>id</th>    
        <th>Titulo</th>    
        <th>Genero</th>    
        <th>Legenda</th>    
        <th>Audio</th>    
        <th>Video</th>    
        <th>Origem</th>    
        <th>Ator</th>    
        <th>Diretor</th>    
        <th>Link Imagem</th>    
        <th>Link Youtube</th>    
        </tr>
        <?php 
            $i = 0;
            foreach ($filmes as $filme):  ?>
            <tr>
            <td><?php echo ++$i; ?></td>
            <td><?php echo $filme->titulo; ?></td>
            <td><?php echo $filme->genero; ?></td>
            <td><?php echo $filme->legenda; ?></td>
            <td><?php echo $filme->audio; ?></td>
            <td><?php echo $filme->video; ?></td>
            <td><?php echo $filme->origem; ?></td>
            <td><?php echo $filme->ator; ?></td>
            <td><?php echo $filme->diretor; ?></td>
            <td><?php echo $filme->imagem; ?></td>
            <td><?php echo $filme->youtube; ?></td>
                <td><a href="<?php base_url(); ?>filmes/edit/<?php echo $filme->id_filmes; ?>"class="button">EDITE-ME</a>
                <a class="button"></a>
                <a href="<?php base_url(); ?>filmes/delete-row/<?php echo $filme->id_filmes; ?>"class="button">Delete</a></td>
                <a class="button"></a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
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
                <form>
                    <h5 class="text-center ">Pesquise seu Filme</h5>
                    <br>
                    <div class="small-11 small-centered columns">
                        <div class="input-group"> <span class="input-group-label show-for-large-only">Titulo do Filme</span>
                            <input type="text" class="input-group-field" name="pesquisar">
                            <div class="small-1  small-centered input-group-button columns">
                                <input type="submit" class="button" id="bt-footer" value="Pesquisar"> </div>
                        </div>
                    </div>
                </form>
            </div>
               
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