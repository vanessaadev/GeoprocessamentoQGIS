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

                        <!-- Sub Título -->
                        <p class="SubTitulo">Conversão de DN para Reflectância para Geração de Índices (operações de bandas)</p>
                        <hr>
                        <br>

                        <p>Os sensores Landsat Thematic Mapper (TM) e Enhanced Thematic Mapper Plus (ETM +) capturam a energia solar refletida, convertem esses dados em radiância e, em seguida, redimensionam esses dados para um número digital (DN) de 8 bits com um intervalo entre 0 e 255. </p>
                        <p>O sensor Landsat 8 OLI é mais sensível, então esses dados são redimensionados em DNs de 16 bits com um intervalo de 0 e 65536.</p> <br><br>
                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">                               
                                <p>Em resumo, quando são baixadas, as imagens de satélite vêm codificadas em valores de Número Digital (DN), no caso dos Landsat, sensor TM e ETM+ elas são de 8 bits, o que significa que os DN têm valores de 0-255 e no caso do Landsat 8, sensor OLI, são de 16 bits, com valores de 0-65536.</p>
                            </div>
                        </div><br><br>
                        
                        <p>Para que possamos calcular Índices de Vegetação (EVI, NDVI, SAVI, etc.) é necessário que esses Valores de Número Digital sejam convertidos para Valores Físicos - Reflectância de Superfície.</p><br><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">                                
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
            <a href="Topico06.7.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
            <a href="Referencias.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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