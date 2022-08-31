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

                        <h2 class="Titulo">Carregando arquivos vetoriais</h2>
                        <hr>

                        <div class="col-md-12">
                            <p>Nesta seção, falaremos sobre o carregamento de dados vetoriais de formatos de arquivo SIG, como shapefiles, bem como de arquivos de texto. Os procedimentos para importação desses dados já foram abordados no módulo anterior, mas recapitularemos. Podemos carregar arquivos vetoriais indo para <strong class="TextoBold">Camada >> Adicionar camada >> Adicionar Camada Vetorial</strong>. Podemos também usar o botão da barra de ferramentas <strong class="TextoBold">Adicionar Camada Vetorial</strong>. Na caixa de diálogo <strong class="TextoBold">Adicionar camada vetorial</strong>, que é mostrado na Figura 01, encontramos uma lista suspensa que nos permite especificar a codificação do arquivo de entrada. Esta opção é importante se estivermos lidando com arquivos que contêm caracteres especiais, como cedilhas, acentos gráficos ou letras de alfabetos diferentes dos latinos padrão. Mantenha a codificação UTF-8.</p><br>
                        </div>

                        <!-- Início Figura 01 -->
                        <div class="text-center">
                            <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Tela de União de Informações de Tabela na Tabela de Atributos de um Shapefile." width="800" max-width="80%">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 01</strong>: Tela de união de informações de tabela na tabela de atributos de um shapefile. </p>
                        </div>
                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura01.png" alt="Tela de União de Informações de Tabela na Tabela de Atributos de um Shapefile.">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold"> Fonte:</strong> EGPCE. </p>
                                    </div>
                                </div>

                            </div>
                        </div><br>
                        <!-- Fim Figura 01 -->

                        <p>O que mais nos interessa agora é o botão Fonte – Base(s) de Vetores
                            <a href="imagens/botao.png" data-bs-toggle="modal" data-bs-target="#botao">
                                <img src="imagens/botao.png" alt="Botão Fonte" max-width="80%">
                            </a>
                            , que abre a caixa de diálogo de abertura de arquivo. Observe a lista suspensa de filtros de tipo de arquivo no canto inferior direito da caixa de diálogo. Podemos abri-lo para ver uma lista de tipos de arquivos vetoriais suportados. Este filtro é útil para encontrar arquivos específicos mais rapidamente ocultando todos os arquivos de um tipo diferente, mas esteja ciente de que as configurações do filtro são armazenadas e serão aplicadas novamente na próxima vez que você abrir a caixa de diálogo de abertura de arquivo. Isso pode ser uma fonte de confusão se você tentar encontrar um arquivo diferente posteriormente e ele estiver oculto pelo filtro, portanto, lembre-se de verificar as configurações do filtro se tiver problemas para localizar um arquivo.
                        </p>

                        <p>Podemos carregar mais de um arquivo de uma vez, selecionando vários arquivos de uma vez (mantendo pressionada a tecla Ctrl e clicando com o mouse nos arquivos.</p><br>

                        <ol type="1">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Na pasta <strong class="TextoBold">CURSO_QGIS >> Modulo2 >> Dados</strong>, primeiro, selecionamos centro_sul.shp e focos.shp nos shapefiles contidos na referida pasta; </li><br>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Em seguida, confirmamos nossa seleção clicando em Abrir e somos levados de volta à caixa de diálogo Adicionar camada vetorial; </li><br>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Depois de clicarmos em Abrir mais uma vez, os arquivos selecionados são carregados. </li>
                        </ol><br>

                        <p>Você notará que cada camada vetorial é exibida em uma cor aleatória, que provavelmente é diferente da cor que você vê na Figura 02. Não se preocupe com isso agora, pois lidaremos com estilos de camada posteriormente neste módulo.</p><br>

                        <!-- Início Figura 02 -->
                        <div class="text-center">
                            <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura02.png" alt="Abertura dos arquivos shapefiles." width="800" max-width="80%">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 02</strong>: Abertura dos arquivos shapefiles. </p>
                        </div>
                        <!-- Imagem 02 - MODAL -->
                        <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura02.png" alt="Abertura dos arquivos shapefiles.">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold"> Fonte:</strong> EGPCE. </p>
                                    </div>
                                </div>

                            </div>
                        </div><br>
                        <!-- Fim Figura 02 -->

                        <p>Mesmo sem usarmos nenhuma ferramenta de análise espacial, essas etapas simples de visualização de conjuntos de dados espaciais nos permitem encontrar, por exemplo, os focos de calor mais ao sul do estado do Ceará.</p><br>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>Existem vários truques que tornam o carregamento de dados ainda mais rápido; por exemplo, você pode simplesmente arrastar e soltar arquivos a partir da pasta de arquivos do sistema operacional para o QGIS.</p>

                                <p>Outra maneira de acessar rapidamente seus dados espaciais é usando o navegador de arquivos embutido do QGIS. Se você configurou o QGIS conforme mostrado no Módulo 01, você encontrará o navegador no lado esquerdo, logo abaixo da lista de camadas. Navegue até sua pasta de dados e você pode novamente arrastar e soltar arquivos do navegador para o mapa.</p>

                                <p>Além disso, você pode marcar uma pasta como favorita clicando nela com o botão direito e selecionando Adicionar como favorita. Desta forma, você pode acessar suas pastas de dados ainda mais rápido, pois elas são adicionadas na seção Favoritos logo no topo da lista do navegador.</p>
                            </div>
                        </div><br>
                        <!-- Fim Importante -->

                        <p>Outra fonte popular de dados espaciais são os arquivos de texto delimitado (CSV), conforme já visto no item Importando Valores Separados por Vírgula (.CSV). O QGIS pode carregar arquivos CSV usando a opção <strong class="TextoBold">Adicionar Camada de Texto Delimitado</strong> disponível através da entrada do menu indo para <strong class="TextoBold">Camada >> Adicionar camada >> Adicionar Camada de Texto Delimitado</strong> ou o botão da barra de ferramentas correspondente. Os arquivos CSV vêm com todos os tipos de delimitadores. O plugin permite que você escolha entre os mais comuns (vírgula, tabulação e assim por diante), mas você também pode especificar qualquer outro delimitador de expressão simples ou regular.</p>
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