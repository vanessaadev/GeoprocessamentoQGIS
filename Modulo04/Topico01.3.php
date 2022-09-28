<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01.3';
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

                        <h2 class="SubTitulo">Adicionar Um Título ao Mapa</h2>
                        <hr>

                        <p>Para adicionar texto ao mapa, podemos usar o botão <strong class="TextoBold">Adicionar rótulo </strong> <img src="Imagens/Icone40.png" width="30"> ou acessar <strong class="TextoBold">Adicionar item >> Adicionar rótulo</strong>. O ponteiro do mouse se tornará uma cruz, e você deverá clicar no local do mapa onde deseja inserir o rótulo (<strong class="TextoBold">Figura 07</strong>).  Rótulos simples exibem todo o texto usando a mesma fonte. </p><br>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura07.png" alt="Figura 07">
                                </a>
                                <p class="FonteFigura"><strong class="TextoBold">Figura 07</strong></p>
                            </div>

                            <!-- Imagem 07 - MODAL -->
                            <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura07.png" alt="Figura 07">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 07 - End -->

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
                <a href="Topico01.2.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Topico01.4.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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