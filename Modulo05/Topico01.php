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

                        <h2 class="Titulo">Buffer (distância fixa e variável)</h2>
                        <hr>

                        <div class="col-md-12">
                            <p>A ferramenta Buffer é uma ferramenta muito utilizada em SIG e é usada para produzir uma nova camada de polígono vetorial que representa uma distância específica a partir da camada de entrada. Pode ser usado para identificar a proximidade de um elemento. </p>
                            <p> Carregue no painel de camadas os arquivos <strong class="TextoBold">drenagens.shp</strong> e <strong class="TextoBold">açude.shp</strong> que estão alocados na pasta Módulo 5 >> Dados. Para acessar a ferramenta de buffer, acesse o menu <strong class="TextoBold">Vetor >> Geoprocessamento >> Buffer</strong>. </p>
                        </div>

                        <!-- Início Figura 01 -->
                        <div class="text-center">
                            <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Tela de União de Informações de Tabela na Tabela de Atributos de um Shapefile." width="800" max-width="80%">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 01</strong>.</p>
                        </div>
                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura01.png" alt="Tela de União de Informações de Tabela na Tabela de Atributos de um Shapefile.">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>

                            </div>
                        </div><br>
                        <!-- Fim Figura 01 -->

                        <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <ol>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s">Escolha a <strong class="TextoBold">camada de entrada (açude.shp)</strong> na lista suspensa ou clique no botão de navegação e carregue a camada que deseja armazenar em buffer. Observe que você pode criar buffer sobre <strong class="TextoBold">pontos</strong>, <strong class="TextoBold">linhas</strong> e <strong class="TextoBold">polígonos</strong>;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><strong class="TextoBold">Defina a distância</strong> – é muito importante que seja definido em metros, enquanto unidade de medida, já que existe a opção de escolher km. Defina <strong class="TextoBold">100 metros</strong>;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s">Mantenha padrão os seguintes campos: <strong class="TextoBold">segmentos</strong>, <strong class="TextoBold">estilo da cobertura do fim</strong>, <strong class="TextoBold">estilo da união</strong>, <strong class="TextoBold">limite do mitre</strong>.</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.2s"><strong class="TextoBold">Dissolver resultado</strong>: se marcado, isso mesclará os buffers que se sobrepõem e os colocará em um único polígono.</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.5s">Para salvar a camada a ser criada, clique no botão de navegação no final da caixa de texto e escolha salvar em arquivo e salve na pasta Módulo 5 >> Resultados, com o nome <strong class="TextoBold">acude_buff_100m</strong>. </li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.8s">Clique no botão <strong class="TextoBold">Executar</strong> para iniciar a ferramenta Buffer. O resultado será mostrado na Figura X, com uma cor que pode ser diferente da mostrada.</li>
                                </ol>
                            </div>
                        </div><br>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <p class="FiqueAtentoTexto">Repita o procedimento usando a camada <strong class="TextoBold">drenagens.shp</strong>.<br>
                                Salve na pasta Modulo5 >> Resultados, com o nome <strong class="TextoBold">drenagem_buff_100m</strong>.
                            </p>

                        </div><br>

                        <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                        <img class="img-fluid  wow fadeInLeft" data-wow-delay="0.5s" width="500" src="imagens/Figura02.png" alt="Figura 02">
                                    </a>
                                    <p class="FonteFigura"><strong class="TextoBold">Figura 02</strong></p>
                                </div>

                                <!-- Imagem 02 - MODAL -->
                                <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura02.png" alt="Figura 02">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 02 - End -->
                            </div>
                        </div><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Quer saber mais sobre? </p>
                                <p>Acesse ao vídeo abaixo para acompanhar o procedimento de <strong class="TextoBold">Geração de buffer</strong>.</p>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1bjEXGzXWvnyJsHAQj_tOWlLAvOowMvZ3/preview"></iframe>
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
                <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Topico01.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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