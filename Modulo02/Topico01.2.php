<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01.2';
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

                        <h2 class="Titulo">Trabalhando com Sistemas de Referência de Coordenadas – SRC</h2>
                        <hr>

                        <p>Sempre que carregamos uma fonte de dados, o QGIS procura por informações SRC utilizáveis, por exemplo, no arquivo <strong class="TextoBold">.prj</strong> do shapefile. Se o QGIS não conseguir encontrar nenhuma informação utilizável, por padrão, ele pedirá que você especifique o CRS manualmente. Esta opção pode ser alterada em <strong class="TextoBold">Configurações >> Opções >> CRS</strong> para sempre usar o SRC do projeto ou um SRC padrão.</p>

                        <p>O Seletor do Sistema de Referência de Coordenadas QGIS oferece um filtro que facilita a localização de um CRS. Ele pode filtrar por nome ou ID (por exemplo, o código EPSG). Basta começar a digitar e observar como a lista de possíveis SRC fica mais curta. Na verdade, existem duas listas separadas; a lista superior contém o SRC que usamos recentemente, enquanto a lista inferior é muito mais longa e contém todos os SRC disponíveis. Para o arquivo focos.shp, selecionamos SIRGAS 2000 / UTM zone 24S. Com o SRC correto, a camada de focos será exibida conforme mostrado na <strong class="TextoBold">Figura 03.</strong></p><br>

                        <!-- Início Figura 03 -->
                        <div class="text-center">
                            <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura03.png" alt="Abertura dos arquivos shapefiles." width="800" max-width="80%">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 03</strong>: Abertura dos arquivos shapefiles. </p>
                        </div>
                        <!-- Imagem 03 - MODAL -->
                        <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura03.png" alt="Abertura dos arquivos shapefiles.">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold"> Fonte:</strong> EGPCE. </p>
                                    </div>
                                </div>

                            </div>
                        </div><br>
                        <!-- Fim Figura 03 -->

                        <p>Se quisermos verificar o CRS de uma camada, podemos encontrar essas informações na seção Geral das propriedades da camada, que pode ser acessada em <strong class="TextoBold">Camada >> Camada Propriedades ou clicando duas vezes no nome da camada na lista de camadas</strong> (mais rápido). Se você acha que o QGIS escolheu o SRC errado ou cometeu um erro ao especificar o SRC, você pode corrigir as configurações do CRS usando a opção Especificar SRC.</p><br>

                        <!-- Início Figura 04 -->
                        <div class="text-center">
                            <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura04.png" alt="Propriedade da camada com opção de configuração de SRC." width="700" max-width="80%">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 04</strong>: Propriedade da camada com opção de configuração de SRC. </p>
                        </div>
                        <!-- Imagem 04 - MODAL -->
                        <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura04.png" alt="Propriedade da camada com opção de configuração de SRC.">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold"> Fonte:</strong> EGPCE. </p>
                                    </div>
                                </div>

                            </div>
                        </div><br>
                        <!-- Fim Figura 04 -->

                        <p>Clicando no ícone
                            <a href="imagens/botao2.png" data-bs-toggle="modal" data-bs-target="#botao">
                            <a href="https://docs.qgis.org/2.8/pt_BR/docs/gentle_gis_introduction/coordinate_reference_systems.html" target="_blank">
                                <img src="imagens/botao2.png" alt="Botão 2" max-width="80%">
                            </a>
                            , será aberto o seletor de sistema de coordenadas de referência (SRC). Conforme vimos anteriormente, o Seletor do Sistema de Referência de Coordenadas QGIS oferece um filtro que facilita a localização de um CRS. Ele pode filtrar por nome ou ID (por exemplo, o código EPSG). Basta começar a digitar e observar como a lista de possíveis SRC fica mais curta. Na verdade, existem duas listas separadas; a lista superior contém o SRC que usamos recentemente, enquanto a lista inferior é muito mais longa e contém todos os SRC disponíveis (<strong class="TextoBold">Figura 05</strong>).
                        </p><br>

                        <!-- Início Figura 05 -->
                        <div class="text-center">
                            <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura05.png" alt="Seletor do Sistema de Referência de Coordenadas QGIS." width="600" max-width="80%">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 05</strong>: Seletor do Sistema de Referência de Coordenadas QGIS. </p>
                        </div>
                        <!-- Imagem 05 - MODAL -->
                        <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura05.png" alt="Seletor do Sistema de Referência de Coordenadas QGIS.">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold"> Fonte:</strong> EGPCE. </p>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <!-- Fim Figura 05 -->

                        <p>No Quadro abaixo são elencados os principais Sistemas de referência de Coordenadas utilizados no Brasil. Assim, para localizá-los, basta digitar o seu código no campo <strong class="TextoBold">FILTRO</strong>, na tela mostrada na <strong class="TextoBold">Figura 04</strong>.</p><br>

                        <!-- Inicio Tabela -->
                        <div class="text-center">
                            <a href="imagens/Tabela01.png" data-bs-toggle="modal" data-bs-target="#Tabela01">
                                <img class="img-fluid wow fadeInRight" src="imagens/Tabela01.png" alt="Tabela">
                            </a>
                            <p class="TituloFigura"><strong class="TextoBold">Quadro 01:</strong> Códigos EPSG UTM mais utilizados no Brasil. Em negrito os SRC do Ceará.</p>
                        </div>

                        <!-- Tabela 01 - MODAL -->
                        <div class="modal fade text-center" id="Tabela01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Tabela01.png" alt="Tabela">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong class="TextoBold">Fonte:</strong> https://spatialreference.org/</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fim Tabela -->

                        <br><br>
                        
                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Quer saber mais sobre? </p>
                                <p>Acesse ao vídeo abaixo para acompanhar o procedimento de <strong class="TextoBold">Trabalho com sistemas de referência de coordenadas no QGIS</strong>.</p>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1-xzxob8Sg2jPbrMQTSK7Gl4F03PYSvvL/preview"></iframe>
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
                <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Topico01.3.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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