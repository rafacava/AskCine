<!doctype html>
<html class="no-js" lang="pt-br">



<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - AskCine</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../assets/css/foundation.css" />
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link href="../../assets/skins/flat/red.css" rel="stylesheet">
    <script src="js/icheck.min.js"></script>
    <link rel="stylesheet" href="../../assets/css/estilo.css"> </head>
<body>
    <!-- //MENU -->
    <!-- //MENU -->
    <a name="home" id="home"></a>
    <div class="row ">
        <header>
            <nav class="nav-collapse">
                <ul>
                    <li class="menu-item active"><a href="#home" data-scroll>Home</a></li>
                    <li class="menu-item"><a href="#busca" data-scroll>Busca</a></li>
                    <li class="menu-item"><a href="#destaques" data-scroll>Destaques</a></li>
                    <li class="menu-item"><a href="#sobre" data-scroll>Sobre</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <!-- //FIM DO MENU -->
    <!-- //HEADER -->
    <div class="row align-center container">
        <div class="small-12 small-centered text-center columns"><h1 class="invisible">AskCine</h1><img src="img/blank.png" alt="logo AskCine"></div>
    </div>
    <!-- //FIM DO HEADER -->
    <!-- //BUSCA -->
    <form>
        <div class="row container">
            <a id="busca"></a>
            <h2 class="text-center ">Pesquise seu Filme</h2>
            <br>
            <div class="small-11 small-centered columns">
                <div class="input-group"> <span class="input-group-label hide-for-small-only">Titulo do Filme</span>
                    <input type="text" class="input-group-field" name="titulo-filme" placeholder="Titulo do Filme que deseja escolher">
                    <div class="small-1  small-centered input-group-button columns">
                        <input type="submit" class="button" value="Pesquisar"> </div>
                </div>
            </div>
        </div>
    </form>
    <br>
    <br>
    <div class="row">
        <div class="small-12 text-center columns">
        <button type="button" id="bt-sumir" class="small-3 button small-centered text-center columns" onclick="Mudarestado('esconder')">Mais opções de pesquisa</button>
    </div>
    </div>
    <br>
    <br>
    <br>
    <form>
        <div id="esconder">
            <div class="row container">
                <h3 class="text-center">Busque por outras opções:</h3>
                <br>
                <div class="small-11 small-centered columns">
                    <div class="input-group"> <span class="input-group-label">Gênero do Filme</span>
                        <select name="genero" class="input-group-field">
                            <option value="qualquer">Qualquer</option>
                            <option value="acao">Ação</option>
                            <option value="aventura">Aventura</option>
                            <option value="romance">Romance</option>
                            <option value="terror">Terror</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <fieldset class="small-12 medium-12 large-4 centered text-center columns">
                    <legend class="text-center columns legenda"><b>Legenda</b></legend>
                    <input type="radio" name="legenda" value="sem_legenda" id="sem_legenda" class="linha" required>
                    <label for="sem_legenda" class="linha">Sem Legenda</label>
                    <input type="radio" name="legenda" value="legendado" id="legendado"  class="linha" required>
                    <label for="legendado" class="linha">Legendado</label>
                </fieldset>
                <fieldset class="small-12 medium-12 large-4 centered text-center columns">
                    <legend class="text-center columns legenda"><b>Áudio</b></legend>
                    <input type="radio" name="audio" value="dublado" id="dublado"  class="linha" required>
                    <label for="dublado"  class="linha">Dublado</label>
                    <input type="radio" name="audio" value="original" id="original" class="linha">
                    <label for="original"  class="linha">Áudio original</label>
                </fieldset>
                <fieldset class="small-12 medium-12 large-4 centered text-center columns">
                    <legend class="text-center columns legenda"><b>Vídeo</b></legend>
                    <input type="radio" name="video" value="2d" id="2d"  class="linha" required>
                    <label for="2d"  class="linha">2D</label>
                    <input type="radio" name="video" value="3d" id="3d"  class="linha" required>
                    <label for="3d"  class="linha">3D</label>
                </fieldset>
            </div>
            <br>
            <div class="row">
                <div class="small-11 small-centered text-center columns">
                    <div class="input-group"> <span class="input-group-label legenda">Origem do Filme</span>
                        <select name="origem" class="input-group-field">
                            <option value="qualquer_origem">Qualquer</option>
                            <option value="brasil">Brasil</option>
                            <option value="estados_unidos">EUA</option>
                            <option value="inglaterra">Inglaterra</option>
                            <option value="espanha">Espanha</option>
                        </select>
                        <div class="small-1  small-centered input-group-button columns">
                            <input type="submit" class="button" value="Pesquisar"> </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- //FIM DA BUSCA -->
<br>
<br>
<br>
<br>
<br>
    <!-- //GALERIA -->
    <a name="destaques" id="destaques"></a><h3 class="text-center">Destaques</h3>
    <br>
    <div class="row small-10 small-up-1 medium-up-2 large-up-4 small-centered text-center">
 <div class="column"> <img src="img/posters/poster1.jpg" class="thumbnail" alt=""> <p class="caixa">Doutor Estranho - 2016</p></div>
        <div class="column"> <img src="img/posters/poster2.jpg" class="thumbnail" alt=""> <p class="caixa">Jack Reacher - 2016</p> </div>
        <div class="column"> <img src="img/posters/poster3.jpg" class="thumbnail" alt=""> <p class="caixa">Inferno - 2016</p> </div>
        <div class="column"> <img src="img/posters/poster4.jpg" class="thumbnail" alt=""> <p class="caixa">O Contador - 2016</p> </div>
    

    </div>
    <!-- //FIM DA GALERIA -->
<br>
<br>
<br>
<br>
<br>
    <!-- Sobre -->
   
    <a name="sobre" id="sobre"></a><h3 class="text-center">Sobre o projeto</h3>
    <br>
     <div class="row">
            <div class="small-12 small-centered text-center columns">
                <p>O AskCine é uma ferramenta de busca voltada para a unificação da informação de todos os filmes em cartaz de todos os cinemas da Região da Baixada Santista e Litoral Sul, tendo a oportunidade de saber todos os filmes que estão passando naquela semana e o seus preços. </p>
        </div>
    </div>
<br>
<br>
<br>
<br>
<br>
     <!-- Sobre -->
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
                            <input type="text" class="input-group-field" name="titulo-filme">
                            <div class="small-1  small-centered input-group-button columns">
                                <input type="submit" class="button" id="bt-footer" value="Pesquisar"> </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="fim">
            <div class="text-center">
                <p>AskCine - 2016</p>
            </div>
        </div>
    </footer>

        <!-- //SCRIPTS -->
    <script src="../../assets/js/vendor/jquery.min.js"></script>
    <script src="../../assets/js/vendor/what-input.js"></script>
    <script src="../../assets/js/vendor/foundation.min.js"></script>
    <script src="../../assets/js/responsive-nav.js"></script>
    <script src="../../assets/js/fastclick.js"></script>
    <script src="../../assets/js/scroll.js"></script>
    <script src="../../assets/js/fixed-responsive-nav.js"></script>
    <script src="../../assets/js/funcao.js"></script>
    <script src="../../assets/js/fonte.js"></script>
    <script>
        $(document).foundation();
    </script>
</body>

</html>