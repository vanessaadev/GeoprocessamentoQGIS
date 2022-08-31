<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01';
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

        <div class="main-content container-fluid" id="#Apresentacao">
            <!-- Begin main-content -->
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title Texto">

                        <h2 class="Titulo">Compositor de Impressão</h2>
                        <hr><br>

                        <div class="col-md-12">

                            <!-- Importante -->
                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <div class="ImportanteTexto">
                                    <p>Para esta prática, serão usados os seguintes arquivos: <strong class="TextoBold">mapa de uso e ocupação do solo</strong>; <strong class="TextoBold">mde_centro_sul</strong>; <strong class="TextoBold">mapa do nordeste</strong>. Criar novo projeto e salvar com nome Modulo04.</p>
                                </div>
                            </div><br>

                            <p>No QGIS, os mapas de impressão são elaborados no compositor de impressão. Um projeto QGIS pode conter vários compositores, portanto, é importante que cada compositor de mapa criado tenha um nome específico. Os compositores são salvos automaticamente sempre que salvamos o projeto. Para ver uma lista de todas as composições disponíveis em um projeto acesse <strong class="TextoBold">Projeto >> Gerenciador de Layout</strong>.</p>
                            <p>Você pode abrir um novo compositor acessando <strong class="TextoBold">Projeto >> Novo Compositor de Impressão</strong> ou acessando o ícone na barra de ferramentas de arquivos. Atribua um título ao compósito e clique em OK (<strong class="TextoBold">Figura 01</strong>).</p>
                        </div><br>

                        <!-- Início Figura 01 -->
                        <div class="text-center">
                            <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Figura 01." width="400">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 01</strong>. </p>
                        </div>
                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura01.png" alt="Figura 01.">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold"> Fonte:</strong> EGPCE. </p>
                                    </div>
                                </div>

                            </div>
                        </div><br>
                        <!-- Fim Figura 01 -->

                        <p>Será aberta a tela mostrada na <strong class="TextoBold">Figura 02</strong>. Uma área de visualização para a composição do mapa exibindo uma página em branco quando um novo compositor é criado, painéis para configurar a composição, barras de ferramentas para gerenciar, salvar e exportar composições; navegação na área de visualização, bem como adição e organização de diferentes itens do compositor.</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura02.png" alt="Figura 02." width="80%">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 02</strong></p>
                        </div>

                        <!-- Imagem 02 - MODAL -->
                        <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura02.png" alt="Figura 02.">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold"> Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>

                            </div>
                        </div><br>
                        <!-- Imagem 02 - End -->

                        <p class="text-center"><strong class="TextoBold"> Barra de Ferrametas </strong></p>

                        <!-- Titulo Tabela 01 -->
                        <div class="text-center">
                            <a href="imagens/Tabela01.png" data-bs-toggle="modal" data-bs-target="#Tabela01">
                                <img src="imagens/Tabela01.png" alt="Tabela 01." width="700">
                            </a>
                        </div>

                        <!-- Tabela 01 - MODAL -->
                        <div class="modal fade text-center" id="Tabela01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Tabela01.png" alt="Tabela 01.">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold"> Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>

                            </div>
                        </div><br>
                        <!-- Tabela 01 - End -->

                        <!-- Titulo Tabela 02 -->
                        <div class="text-center">
                            <a href="imagens/Tabela02.png" data-bs-toggle="modal" data-bs-target="#Tabela02">
                                <img src="imagens/Tabela02.png" alt="Tabela 02.">
                            </a>
                        </div>

                        <!-- Tabela 02 - MODAL -->
                        <div class="modal fade text-center" id="Tabela02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Tabela02.png" alt="Tabela 02.">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold"> Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Tabela 02 - End -->

                        <br><br><br>

                        <!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });

                            $(function() {
                                $('[data-toggle="tooltip"]').tooltip()
                            })
                        </script>



                    </div> <!-- End page-title -->
                </div> <!-- End page-title -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Topico01.1.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- End main-content -->


        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>