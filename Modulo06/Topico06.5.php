<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico06';
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

                        <!--  Sub Título -->
                        <p class="SubTitulo">Menu “Georreferenciador”</p>
                                <hr>


                        <p>Mapas e fotografias aéreas no formato impresso contém muitos dados valiosos. Quando esses dados precisam ser trazidos para um GIS, eles são digitalizados para produzir imagens raster. A saída de um scanner digital possui um sistema de coordenadas, mas é um sistema de coordenadas local criado pelo processo de digitalização. As imagens digitalizadas precisam ser georreferenciadas para um sistema de coordenadas do mundo real antes de poder ser usado em um SIG.</p>
                        <p>O georreferenciamento é o processo de transformar o sistema de referência de coordenadas (CRS) de um conjunto de dados raster em um novo sistema de referência de coordenadas. Frequentemente, o processo transforma o CRS de um conjunto de dados espaciais para um sistema de coordenadas do mundo real. Independentemente dos sistemas de coordenadas envolvidos, chamaremos o sistema de coordenadas do raster a ser georreferenciado de CRS de origem, e o sistema de coordenadas de saída de CRS de destino. A transformação pode envolver deslocamento, rotação, inclinação ou dimensionamento do raster de entrada das coordenadas de origem para as coordenadas de destino. Uma vez que um conjunto de dados foi georreferenciado, ele pode ser trazido para um GIS e alinhado com outras camadas.</p>
                        <p>O georreferenciamento é realizado através da identificação de pontos de controle no solo (GCP). Esses pontos são localizações no raster de referência onde o sistema de coordenadas de destino é conhecido. Os pontos de controle no solo podem ser identificados de uma das seguintes maneiras:</p><br>
                        <p class="wow fadeInLeft" data-wow-delay="0.3s"><strong>1.</strong>  Usando outro conjunto de dados cobrindo a mesma extensão espacial que está no sistema de coordenadas do raster a ser georreferenciado. Isso pode ser um vetor ou um conjunto de dados raster. Nesse caso, os GCPs serão identificados em ambos os conjuntos de dados.</p>
                        <p class="wow fadeInLeft" data-wow-delay="0.6s"><strong>2.</strong> Usando datums ou outros locais com coordenadas impressas ou coordenadas que podem ser consultadas. Neste caso, os locais são identificados e as coordenadas do alvo são inseridas.</p>
                        <p>Após a coleta dos pontos de controle e inserção na imagem a ser georreferenciada, uma equação de transformação será usada para transformar o raster do SRC de origem para o SRC de destino.</p>
                        <br>
                        <p>O ideal é que os GCPs sejam bem distribuídos no raster a ser georreferenciado. Você deve se esforçar para criar GCPs perto dos quatro cantos da imagem, além de vários localizados no meio da imagem. Isso nem sempre é possível, mas resultará em uma transformação melhor.</p>
                        <br><br>
                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Acesse o link do vídeo abaixo para acompanhar o procedimento de georreferenciamento usando outro conjunto de dados cobrindo a mesma extensão espacial que está no sistema de coordenadas do raster a ser georreferenciado. Georreferenciamento a partir de uma outra imagem</p>
                                <center><h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6></center><br>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                        ?
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        
                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Acesse o link do vídeo abaixo para acompanhar o procedimento de georreferenciamento usando datums ou outros locais com coordenadas impressas ou coordenadas que podem ser consultadas. Georreferenciamento a partir de coordenadas impressas</p>
                                <center><h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6></center><br>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                        ?
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                </div>
                            </div>
                        </div>

                                

                        <br><br><br><!-- SCRIPT LIGHTBOX -->
                        <script>
                            ScrollReveal().reveal('.headline',{reset: true });
                            ScrollReveal().reveal('.headline1', { delay: 500 , reset: true })
                            ScrollReveal().reveal('.headline2', { delay: 1000 , reset: true })
                            ScrollReveal().reveal('.headline3', { delay: 1500 , reset: true })

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
            <a href="Topico06.4.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
            <a href="Topico06.6.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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