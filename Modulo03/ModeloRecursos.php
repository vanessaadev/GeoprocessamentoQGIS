<?php
// HEADER
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid">
            <!-- Begin main-content -->
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title Texto">

                        <h3 style="color: #92c56e; font-weight: 600;">Títulos</h3>
                        <hr><br>

                        <!-- Título -->
                        <h2 class="Titulo">Titulo</h2>
                        <hr>
                        <!-- Sub Título -->
                        <p class="SubTitulo">Sub_Titulo</p>
                        <hr>
                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Sub_Sub_Titulo</p>
                        <hr>

                        <br><br>
                        <h3 style="color: #92c56e; font-weight: 600;">Texto e link</h3>
                        <hr>

                        <!-- Texto -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <a href="http://cursos.egp.ce.gov.br" target="_blank">Ava 2022</a> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>

                        <br><br>
                        <h3 style="color: #92c56e; font-weight: 600;">Caixas Destaque</h3>
                        <hr>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                            </div>
                        </div>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr</p>
                            </div>
                        </div>

                        <!-- Curiosidade -->
                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <div class="CuriosidadeTexto">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr</p>
                            </div>
                        </div>

                        <!-- Atividade -->
                        <div class="AtividadeCaixa">
                            <p class="AtividadeTitulo"> Atividade</p>
                            <div class="AtividadeTexto">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</p>
                            </div>
                        </div>

                        <!-- Exemplo -->
                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <div class="ExemploTexto">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</p>
                            </div>
                        </div>

                        <!-- Pratique -->
                        <div class="PratiqueCaixa">
                            <p class="PratiqueTitulo"> Pratique</p>
                            <div class="PratiqueTexto">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                            </div>
                        </div>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit</p>
                            </div>
                        </div>

                        <!-- Dúvida  -->
                        <div class="DuvidaCaixa">
                            <p class="DuvidaTitulo"> Dúvida</p>
                            <div class="DuvidaTexto">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
                            </div>
                        </div>

                        <!-- Reflita -->
                        <div class="ReflitaCaixa">
                            <p class="ReflitaTitulo"> Reflita</p>
                            <div class="ReflitaTexto">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labo</p>
                            </div>
                        </div>

                        <br><br>
                        <h3 style="color: #92c56e; font-weight: 600;">fadeIn's</h3>
                        <hr>

                        <p class="wow fadeInLeft" data-wow-delay="0.3s"> Lorem ipsum dolor sit amet.</p>
                        <p class="wow fadeInRight" data-wow-delay="0.6s"> Lorem ipsum dolor sit amet.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.9s"> Lorem ipsum dolor sit amet.</p>
                        <p class="wow fadeInDown" data-wow-delay="1.0s"> Lorem ipsum dolor sit amet.</p>
                        <p class="wow fadeIn" data-wow-delay="1.3s"> Lorem ipsum dolor sit amet.</p>

                        <br><br>
                        <h3 style="color: #92c56e; font-weight: 600;">Figura</h3>
                        <hr>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong>Figura XX: </strong>Nome da Figura Aqui</p>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Figura 01 - End -->

                        <br><br>
                        <h3 style="color: #92c56e; font-weight: 600;">Diferentes Informações na Mesma Linha</h3>
                        <hr>


                        <p class="SubTitulo"><u>Tabela</u></p>

                        <!-- duas tabelas na mesma linha-->
                        <div class="row">
                            <div class="col-md-6 col-sm-12">

                                <p>Vida Profissional:</p>

                                <table class="table table-bordered border-success">
                                    <tbody>
                                        <tr>
                                            <td colspan="4">Objetivo:</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Quando: [ ] curto prazo [ ] médio prazo [ x ] longo prazo</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">legado</td>
                                        </tr>
                                    </tbody>
                                </table><br>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <p>Vida Profissional:</p>

                                <table class="table table-bordered border-success">
                                    <tbody>
                                        <tr>
                                            <td colspan="4">Objetivo:</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Quando: [ ] curto prazo [x ] médio prazo [ ] longo prazo</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">legado</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--Fim  Reducao de Coluna -->

                        <p class="SubTitulo"><u>Imagem e texto</u></p>

                        <!-- Figura do lado do texto-->
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <p class="wow fadeInUp" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center wow fadeInDown">
                                    <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                        <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura wow fadeInDown"><strong>Figura XX: </strong>Nome da Figura Aqui</p>
                                    </a>
                                </div>
                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->
                            </div>
                        </div>

                        <p class="SubTitulo"><u>Texto</u></p>

                        <!-- Textos diferentes mas na mesma linha -->
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <p class="img-fluid wow fadeInRight" data-wow-delay="0.5s"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. s </p>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <p class="img-fluid wow fadeInLeft" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>

                        <p class="SubTitulo"><u>Imagem</u></p>

                        <!-- Figuras na mesma linha-->
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura"><strong>Figura XX: </strong>Nome da Figura Aqui</p>
                                    </a>
                                </div>
                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura"><strong>Figura XX: </strong>Nome da Figura Aqui</p>
                                    </a>
                                </div>
                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 01 - End -->
                            </div>
                        </div>


                        <br><br>
                        <h3 style="color: #92c56e; font-weight: 600;">Vídeo dentro da Aula Online</h3>
                        <hr>

                        <!-- VÍDEO -->
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QVwy54O9NjI"></iframe>
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>

                        <br><br>
                        <h3 style="color: #92c56e; font-weight: 600;">Modal</h3>
                        <hr>

                        <div class="text-center">
                            <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                        </div>
                        <br>
                        <!-- Início Section Modal-->
                        <section id="Modal">
                            <div class="text-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Primavera Árabe
                                </button>
                                <!-- Modal -->

                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">
                                    Occupy Wall Street
                                </button>
                                <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal3">
                                    Jornadas de Junho
                                </button>
                                <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Fim section -->

                        <br><br>
                        <h3 style="color: #92c56e; font-weight: 600;">Caixas Alert</h3>
                        <hr>


                        <!--Alerta Verde -->
                        <div class="alert alert-success" role="alert">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos </div>

                        <!--Alerta Azul -->
                        <div class="alert alert-info" role="alert">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos </div>

                        <!--Alerta Amarelo -->
                        <div class="alert alert-warning" role="alert">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos </div>

                        <!--Alerta Vermelho -->
                        <div class="alert alert-danger" role="alert">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos </div>

                        <!--Alerta Preto -->
                        <div class="alert alert-dark" role="alert">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos </div>

                        <br><br>
                        <h3 style="color: #92c56e; font-weight: 600;">Caixas Callout</h3>
                        <hr>

                        <p><strong><u>A caixa success é própria para citação.</u></strong></p>

                        <!-- CITAÇÃO -->
                        <div class="bd-callout bd-callout-success">
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <footer class="blockquote-footer">PEF</footer>
                        </div>

                        <!-- Início Caixa Callout -->
                        <div class="bd-callout bd-callout-warning">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <footer class="blockquote-footer">PEF</footer>
                        </div>
                        <!-- Fim Caixa Callout -->

                        <!-- Início Caixa Callout -->
                        <div class="bd-callout bd-callout-info">
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <footer class="blockquote-footer">PEF</footer>
                        </div>
                        <!-- Fim Caixa Callout -->

                        <!-- Início Caixa Callout -->
                        <div class="bd-callout bd-callout-primary">
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <footer class="blockquote-footer">PEF</footer>
                        </div>
                        <!-- Fim Caixa Callout -->

                        <!-- Início Caixa Callout -->
                        <div class="bd-callout bd-callout-danger">
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <footer class="blockquote-footer">PEF</footer>
                        </div>
                        <!-- Fim Caixa Callout -->


                        <br><br>
                        <h3 style="color: #92c56e; font-weight: 600;">Caixa Cinza (Lucas favor ajustar essa caixa)</h3>
                        <hr>

                        <!--INÍCIO CAIXA CINZA -->
                        <section id="pt2">
                            <div class="bg-cinzaAzul container-fluid main-content">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="caixa">
                                        <h4 class="wow fadeInLeft" data-wow-delay="0.6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</h4>
                                        </p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                        </section>
                        <!--INÍCIO CAIXA CINZA -->

                        <br><br>
                        <h3 style="color: #92c56e; font-weight: 600;">Accordion</h3>
                        <hr>


                        <!-- Início Accordion -->
                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center>
                            <!-- Accordion 01 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Accordion 01</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 01 -->

                            <!-- Accordion 02 -->
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Accordion 02</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 02 -->

                            <!-- Accordion 03 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Accordion 03 </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos </p>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                        <!-- Accordion 03 -->
                        <!-- FIM Accordion -->

                        <br><br>
                        <h3 style="color: #92c56e; font-weight: 600;">Caixa Card</h3>
                        <hr>
                        <p>Caso queira colocar alguma cor, só adicionar o style com background na div.</p>
                        <div class="card">
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            </div>
                        </div>

                        <br><br>
                        <h3 style="color: #92c56e; font-weight: 600;">Texto Nota de Rodapé</h3>
                        <hr>


                        <!-- Nota de Rodapé -->
                        <p class="NotaDeRodape"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

                        <br><br>
                        <h3 style="color: #92c56e; font-weight: 600;">Marcadores</h3>
                        <hr>

                        <!-- Marcadores -->
                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> fa fa-arrow-right;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> fa fa-dot-circle;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-cog CorVerdeClaroEstado"></i> fa fa-cog;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-cube CorVerdeClaroEstado"></i> fa fa-cube;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> fa fa-bullseye;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-check-circle CorVerdeClaroEstado"></i> fa fa-check-circle;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-alt-circle-right CorVerdeClaroEstado"></i> fa fa-arrow-right-alt-circle-right.</li>
                        </ul>
                        <!-- FIM Marcadores -->




                        <br><br>
                        <h3 style="color: #92c56e; font-weight: 600;">Botões de Navegação</h3>
                        <hr>

                        <!-- Botões de navegação -->
                        <div class="text-center">
                            <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                            <a href="Referencias.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                        </div><br>

                    </div>
                </div>
            </div>
        </div>



        <!-- SCRIPT LIGHTBOX -->
        <script>
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
        </script>

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>