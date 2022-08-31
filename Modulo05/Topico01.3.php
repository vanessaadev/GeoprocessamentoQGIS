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

                        <h2 class="Titulo">Recortar</h2>
                        <hr>

                        <p>Normalmente utilizamos essa ferramenta quando os dados vão além dos limites de sua área de estudo. Nessa situação, você pode usar a ferramenta <strong class="TextoBold">Recortar</strong> para limitar os dados à extensão de sua área de estudo. A ferramenta utiliza uma camada vetorial de entrada e usa uma segunda camada como a camada de corte para produzir um novo conjunto de dados que é recortado na extensão da camada de corte. Para acessar a ferramenta, vá em Vetor >> Geoprocessamento >> Recortar. Para esta prática, utilizaremos os shapes drenagens.shp e acude.shp.</p>
                        <p>Para acessar a ferramenta, vá em <strong class="TextoBold">Vetor >> Geoprocessamento >> Recortar</strong>. Para esta prática, utilizaremos os shapes <strong class="TextoBold">drenagens.shp</strong> e <strong class="TextoBold">acude.shp</strong>.</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                <img class="img-fluid  wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura04.png" alt="Figura 04">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 04</strong></p>
                        </div>

                        <!-- Imagem 04 - MODAL -->
                        <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura04.png" alt="Figura 04">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> SEPLAG/CE</p>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <!-- Imagem 04 - End -->

                        <p>Na janela recorte, defina a <strong class="TextoBold">camada de entrada (1)</strong>, <strong class="TextoBold">drenagens.shp</strong>, a ser processada selecionando-a na lista suspensa ou clicando no botão de navegação e navegando até o arquivo. Esta camada será a camada a ser recortada. A <strong class="TextoBold">camada de sobreposição (2)</strong>, <strong class="TextoBold">acude.shp</strong>, será a camada que será usada para aplicar o corte. Para salvar o resultado, clique no botão de navegação no final da caixa de texto <strong class="TextoBold">Recortado</strong> e escolha para <strong class="TextoBold">salvar em arquivo (3)</strong>. Salve o arquivo na pasta <strong class="TextoBold">Módulo 5 >> Resultados</strong> com o nome <strong class="TextoBold">drenagem_rec</strong>. Clique em <strong class="TextoBold">Executar (4)</strong>. O resultado será conforme o mostrado na <strong class="TextoBold">Figura 05</strong>. Para melhor visualização, desmarque no painel de camadas a feição drenagens.shp.</p>

                        <br>

                        <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                        <img class="img-fluid  wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura05.png" alt="Figura 05">
                                    </a>
                                    <p class="FonteFigura"><strong class="TextoBold">Figura 05</strong></p>
                                </div>

                                <!-- Imagem 05 - MODAL -->
                                <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura05.png" alt="Figura 05">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> SEPLAG/CE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 05 - End -->
                            </div>
                        </div><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Quer saber mais sobre? </p>
                                <p>Acesse ao vídeo abaixo para acompanhar o procedimento de <strong class="TextoBold">Recortar dados vetoriais (Operação de Recorte)</strong>.</p>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1YzcJL4zSyY5c5VGxQzVcJ9PdLCRyg9V1/preview"></iframe>
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