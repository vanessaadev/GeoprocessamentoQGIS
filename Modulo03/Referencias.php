<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>
<?php
$page = 'Referencias';
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
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">

                        <div class="bd-callout bd-callout-success">
                        
                            <!-- adicionei o texto de referências -->
                            <h2 class="Titulo">REFERÊNCIAS</h2>
                            <p>Parabéns! Você concluiu o módulo 03 do curso de Cartografia Básica e Introdução ao Geoprocessamento com QGIS . Agora você já pode responder a avaliação do módulo. Clique em “Realizar Avaliação”. Boa sorte e até o próximo módulo!</p>
                           
                            <p class="Texto"></p>

                            <p class="Texto"></p>

                            <p class="Texto"></p>

                            <p class="Texto"></p>

                            <p class="Texto"></p>

                            <p class="Texto"></p>

                        </div>

                        <br><br><br>

                        <!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });
                        </script>

                    </div> <!-- CLASS PAGE TITLE FIM -->
                </div> <!-- End col-md-10 -->

                <div class="col-md-1"></div>
            </div> <!-- End row-->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico01.1.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="http://cursos.egp.ce.gov.br/mod/quiz/view.php?id=730" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-tasks"></i> Realização Avaliação 03 </a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>


    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>