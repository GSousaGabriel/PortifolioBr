<?php
require "validateAccess.php"
?>

<html lang="pt/br">

<head>
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body class="bg-info">
    <header class="page-header-bg bg-dark">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="aboutMe.php">About me</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuHeader" aria-controls="menuHeader" aria-expanded="false" aria-label="Mostrar Menus">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menuHeader">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="knowledge.php">Knowledge</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="knowledge.php">Knowledge</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contato</a>
                        </li>
                    </ul>
                    <div class="col">
                        <a class="navbar-brand float-end" href="logoff.php">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main class="bg-info">
        <section>
            <div>
                <section>
                    <div class="container text-light pt-5">
                        <div class="typing-demo">
                            <h1 class="typing-demo">Resumo</h1>
                        </div>
                        <hr>
                        <div class="row alert alert-info mt-5" role="alert">
                            <div class="container">
                                <div class="row mx-auto">
                                    <p>O autor deste site &eacute; chamado Gabriel Gon&ccedil;alves de Sousa, 22
                                        anos.</p>
                                </div>
                                <div class="row mx-auto">
                                    <p>Come&ccedil;ou sua carreira em T.I em 2020 como suporte t&eacute;cnico na
                                        AOKI
                                        Sistemas,
                                        empresa de ERP, onde p&ocirc;de adquirir uma maior Knowledge com
                                        atendimento
                                        ao
                                        cliente e Knowledge de conversa&ccedil;&atilde;o e, atualmente,
                                        est&aacute;
                                        estagiando
                                        como desenvolvedor no instituto SiDi, onde p&ocirc;de adquirir uma maior
                                        Knowledge
                                        com linguagens de programa&ccedil;&atilde;o.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container alert alert-info mt-5" role="alert">
                        <div class="row mx-auto">
                            <p>Este projeto apresentar&aacute; um pouco seus conhecimentos em desenvolvimento web. Para outras compet&ecirc;ncias foi feito diferentes projetos para melhor
                                organiza&ccedil;&atilde;o e
                                visualiza&ccedil;&atilde;o partilhada das informa&ccedil;&otilde;es.</p>
                        </div>
                    </div>
                </section>
                <section class="d-none d-xl-block">
                    <div class="container-fluid mt-5">
                        <div class="row justify-content-center">
                            <a class="text-dark col-2 mx-4" href="aboutMe.php">
                                <div class="card alert-info" style="width: 18rem;">
                                    <img class="card-img-top" src="sobreMim.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Ver mais informa&ccedil;&otilde;es sobre Gabriel.
                                        </h5>
                                    </div>
                                </div>
                            </a>
                            <a class="text-dark col-2 me-4" href="knowledge.php">
                                <div class="card alert-info" style="width: 18rem;">
                                    <img class="card-img-top" src="sobreMim.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Ver mais informa&ccedil;&otilde;es sobre suas
                                            Knowledges.</h5>
                                    </div>
                                </div>
                            </a>
                            <a class="text-dark col-2 me-4" href="knowledge.php">
                                <div class="card alert-info" style="width: 18rem;">
                                    <img class="card-img-top" src="sobreMim.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Ver mais informa&ccedil;&otilde;es sobre suas
                                            Knowledge.
                                        </h5>
                                    </div>
                                </div>
                            </a>
                            <a class="text-dark col-2 me-4" href="contact.php">
                                <div class="card alert-info" style="width: 18rem;">
                                    <img class="card-img-top" src="sobreMim.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Ver mais informa&ccedil;&otilde;es sobre como o
                                            contatar.
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                </section>
            </div>
        </section>
    </main>
</body>
<footer>
    <div class="container">
        <div class="row fixed-bottom">
            <div class="col-12 bg-dark text-light text-center">
                <em>Copyright All Rights Reserved © 2022 | Developed by Gabriel Sousa</em>
            </div>
        </div>
    </div>
</footer>

</html>