<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - AskCine</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../assets/css/foundation.css" />
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link href="../../assets/skins/flat/red.css" rel="stylesheet">
    <script src="js/icheck.min.js"></script>
    <link rel="stylesheet" href="../../assets/css/estilo.css"> </head>

<body>
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
            <div class="small-12 small-centered text-center columns">
                <form>
                    <div class="row">
                        <div class="medium-6 small-centered columns">
                            <label>Login
                                <input type="text" placeholder="insira seu apelido" name="login" id="login" required> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-6 small-centered columns">
                            <label>Senha
                                <input type="password" placeholder="insira sua senha" name="password" id="password" required> </label>
                        </div>
                    </div>
                    <div class="row">
                        <button class="button" type="submit" value="Submit">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- fim do login -->
    <!-- //CADASTRO -->
    <div class="row align-center container">
        <div class="small-12 small-centered text-center columns">
            <p><a data-open="exampleModal2">Faça um cadastro</a></p>
        </div>
    </div>
    <!-- This is the first modal -->
    <div class="reveal" id="exampleModal2" data-reveal>
        <div class="row align-center container">
            <div class="small-12 small-centered text-center columns">
                <h2>Faça o seu cadastro!</h2>
                <form>
                    <div class="row">
                        <div class="medium-6 small-centered columns">
                            <label>Apelido
                                <input type="text" placeholder="Apelido" name="apelido" id="apelido" required> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-6 small-centered columns">
                            <label>E-mail
                                <input type="email" placeholder="E-mail" name="email" id="email" required> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-6 small-centered columns">
                            <div class="medium-6 clear-fix columns">
                                <label>Senha
                                    <input type="password" placeholder="Senha" name="cdst_senha" id="cdst_senha" required> </label>
                            </div>
                            <div class="medium-6 clear-fix columns">
                                <label>Repita a senha
                                    <input type="password" placeholder="Repita a senha" name="rep_senha" id="rep_senha" required> </label>
                            </div>
                        </div>
                        <div class="row">
                            <button class="button" data-open="exampleModal2" type="submit" value="Submit"> Cadastrar </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <button class="close-button" data-close aria-label="Close reveal" type="button"> <span aria-hidden="true">&times;</span> </button>
    </div>
    <!-- This is the nested modal -->
    <div class="reveal" id="exampleModal3" data-reveal>
        <h2>ANOTHER MODAL!!!</h2>
        <button class="close-button" data-close aria-label="Close reveal" type="button"> <span aria-hidden="true">&times;</span> </button>
    </div>
    <!-- //FIM DO CADASTRO -->
    <!-- //FIM DO HEADER -->
    <!-- Sobre -->
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