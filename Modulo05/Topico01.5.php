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

                        <h2 class="SubTitulo">Diferença simétrica</h2>
                        <hr>

                        <p>A ferramenta <strong class="TextoBold">diferença simétrica</strong> <u>preserva apenas as áreas que não se cruzam</u>. O resultado dessa operação contém atributos de ambas as camadas de entrada. Para acessar a ferramenta, vá em <strong class="TextoBold">Vetor >> Geoprocessamento >> Diferença Simétrica</strong>. Para esta prática, utilizaremos também os shapes <strong class="TextoBold">drenagens.shp</strong> e <strong class="TextoBold">acude.shp</strong>.</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura08.png" alt="Figura 08" width="900">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 08</strong></p>
                        </div>

                        <!-- Imagem 08 - MODAL -->
                        <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura08.png" alt="Figura 08">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>

                            </div>
                        </div><br>
                        <!-- Imagem 08 - End -->

                        <p>Na janela diferença simétrica, defina a <strong class="TextoBold">camada de entrada (1)</strong>, <strong class="TextoBold">drenagens.shp</strong> a ser processada selecionando-a na lista suspensa ou clicando no botão de navegação e navegando até o arquivo. Esta camada será a camada a ser recortada. A <strong class="TextoBold">camada de sobreposição (2)</strong>, <strong class="TextoBold">acude.shp</strong> será a camada que será usada para aplicar a diferença simétrica. Para salvar o resultado, clique no botão de navegação no final da caixa de texto <strong class="TextoBold">Diferença simétrica</strong> e escolha para <strong class="TextoBold">salvar em arquivo (3)</strong>. Salve o arquivo na pasta <strong class="TextoBold">Módulo 5 >> Resultados</strong> com o nome <strong class="TextoBold">drenagem_dif_sim</strong>. Clique em <strong class="TextoBold">Executar (4)</strong>. O resultado será conforme o mostrado na Figura 09. Para melhor visualização, desmarque no painel de camadas a feição drenagens.shp. Observe que o resultado é idêntico à ferramenta <strong class="TextoBold">diferença</strong>. Porém, a tabela de atributos contém informações de ambas as feições utilizadas no processamento.</p><br>

                        <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura09.png" alt="Figura 09" width="600">
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
                            </div>
                        </div><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Quer saber mais sobre? </p>
                                <p>Acesse ao vídeo abaixo para acompanhar o procedimento de <strong class="TextoBold">Diferença simétrica sobre dados vetoriais.</strong>.</p>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1OEw08GJTU-A6PhgGU_JQoG02N8fAz87p/preview"></iframe>
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
                <a href="Topico01.6.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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