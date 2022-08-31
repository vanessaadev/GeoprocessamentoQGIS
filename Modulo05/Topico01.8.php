<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01.8';
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

                        <h2 class="Titulo">Diagramas de Voronoy</h2>
                        <hr>

                        <p>Os polígonos de Voronoy representam a área de influência em torno de cada ponto. Eles têm o nome do matemático russo Georgy Voronoy, que inventou o algoritmo. Eles também são chamados de polígonos de Thiessen e são nomeados em homenagem a Alfred Thiessen, que criou independentemente o mesmo algoritmo. Para acessar a ferramenta, acesse <strong class="TextoBold">Vetor >> Ferramentas de Geometria >> Polígonos de Voronoy</strong>. Para esta prática, utilizaremos o shape <strong class="TextoBold">chuva média</strong> contido na pasta <strong class="TextoBold">Módulo 5 >> Dados</strong>. Será mostrada a tela da <strong class="TextoBold">Figura 14</strong>.</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura14.png" alt="Figura 14" width="900">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 14</strong></p>
                        </div>

                        <!-- Imagem 14 - MODAL -->
                        <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura14.png" alt="Figura 14">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>

                            </div>
                        </div><br>
                        <!-- Imagem 14 - End -->

                        <p>Na janela da ferramenta, defina a <strong class="TextoBold">camada de entrada (1)</strong>, <strong class="TextoBold">chuva_media.shp</strong> a ser processada selecionando-a na lista suspensa ou clicando no botão de navegação e navegando até o arquivo. Esta camada será usada para gerar o polígono de Voronoy. A <strong class="TextoBold">região de buffer (2)</strong> indica o tamanho da área do polígono gerado, sendo o incremento com base no percentual da área. Neste caso vamos manter o valor padrão. Para salvar o resultado, clique no botão de navegação no final da caixa de texto <strong class="TextoBold">Polígonos de Voronoy</strong> e escolha para <strong class="TextoBold">salvar em arquivo (3)</strong>. Salve o arquivo na pasta <strong class="TextoBold">Módulo 5 >> Resultados</strong> com o nome <strong class="TextoBold">Voronoy</strong>, Clique em <strong class="TextoBold">Executar (4)</strong>. O resultado será conforme o mostrado na <strong class="TextoBold">Figura 15</strong>. Observa-se na imagem, que cada ponto possui um polígono a ele associado, que é chamado de sua área de influência, ou seja, os valores dentro daquelas áreas são influenciados pelo valor do ponto que está dentro do polígono. </p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura15.png" alt="Figura 15" width="600">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 15</strong></p>
                        </div>

                        <!-- Imagem 15 - MODAL -->
                        <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura15.png" alt="Figura 15">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>

                            </div>
                        </div><br>
                        <!-- Imagem 15 - End -->

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Quer saber mais sobre? </p>
                                <p>Acesse ao vídeo abaixo para acompanhar o procedimento de criação de um <strong class="TextoBold">Polígono de Voronoy</strong>.</p>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1eHgc360xC0kq6ASo2nxW-ze5v0lwUfEo/preview"></iframe>
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
                <a href="Topico01.7.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Topico01.9.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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