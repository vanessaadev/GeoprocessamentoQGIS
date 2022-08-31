<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01.6';
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

                        <h2 class="Titulo">Salvando estilos</h2>
                        <hr>

                        <p>Depois de definir toda a paleta de cores, em ordem para evitar a necessidade de recodificar todas as cores nesta camada ou outra camada que tenha a mesma classificação (nomes de cobertura do solo em nosso caso), podemos salvar nosso estilo para um arquivo. Para fazer isso, clique na parte inferior da janela <strong class="TextoBold">Estilo >> Salvar Estilo</strong> e escolha o <strong class="TextoBold">Modulo2 >> Resultados</strong> com nome <strong class="TextoBold">estilo_uso</strong>. Depois de salvar, um arquivo de estilo (qml.) aparecerá em na pasta. Desta forma, ao abrir um projeto em outro computador, podemos carregar imediatamente a paleta de cores sem ter que inserir os códigos de cores a cada vez. </p>

                        <p>A paleta de cores criada irá acelerar nosso trabalho no futuro. Estilos e paletas de cores podem ser criados para camadas vetoriais e raster, graças às quais podemos manter a uniformidade da cor ao usar diferentes bases raster (por exemplo, hipsometria). </p><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Quer saber mais sobre? </p>
                                <p>Acesse ao vídeo abaixo para acompanhar o procedimento de <strong class="TextoBold">Salvando Estilos</strong>.</p>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src=""></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <!-- FIM VÍDEO -->
                            </div>
                        </div><br>
                        
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
                <a href="Topico01.5.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
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