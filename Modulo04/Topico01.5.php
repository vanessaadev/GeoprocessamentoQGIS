<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01.5';
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

                        <h2 class="SubTitulo">Criação de Mapas de Visão Geral</h2>
                        <hr>

                        <p>Antes de iniciarmos, retorne às propriedades principais do mapa, clicando sobre ele e clique em <strong class="TextoBold">travar camadas</strong>, no item <strong class="TextoBold">camadas</strong>. Isto deverá ser feito em razão de necessitarmos criar um segundo mapa com outros arquivos, o que pode modificar o aspecto visual do mapa já criado. </p>
                        <p>Normalmente, mapas que mostram uma área de perto são frequentemente acompanhados por um segundo mapa que informa ao leitor onde a área está localizada em um contexto mais amplo. Para criar esse mapa de visão geral, <strong class="TextoBold">adicionamos um segundo mapa</strong> e <strong class="TextoBold">uma visão geral</strong> clicando no botão <img src="Imagens/Icone50.png" width="30"> no item <strong class="TextoBold">Enquadramentos</strong>. Ao definir o quadro do Mapa, podemos definir qual extensão do mapa de detalhes deve ser destacada. Podem ser adicionados quantos mapas de visão geral forem desejados. A <strong class="TextoBold">Figura 09</strong> mostra um exemplo com um mapa de detalhes adicionado a um mapa de visão geral. Para distinguir entre os dois mapas, os destaques da visão geral são codificados por cores (alterando o estilo do quadro da visão geral) para corresponder às cores dos quadros dos mapas de detalhes. </p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura09.png" alt="Figura 09">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 09</strong></p>
                        </div>

                        <!-- Imagem 09 - MODAL -->
                        <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura09.png" alt="Figura 09">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <!-- Imagem 09 - End -->

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p class="text-center">Acesse o vídeo abaixo e assista à aula de <strong class="TextoBold">Compositor de Impressão</strong>:</p>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1nEzaB_rBxeitWRosiLmW4ERxGkD4tYQD/preview"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <!-- FIM VÍDEO -->
                            </div>
                        </div>


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
                <a href="Topico01.4.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="http://cursos.egp.ce.gov.br/mod/quiz/view.php?id=1895&forceview=1" class="btn btn-primary" role="button" aria-pressed="true">Realizar Atividade Avaliativa 04 <i class="fa fa-chevron-right"></i></a>
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