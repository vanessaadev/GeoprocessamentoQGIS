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

<!--INÍCIO CONTEUDO PARTE 01-->
<section id="pt01">
        <div class="main-content container-fluid">
            <div class="page-title">
                <div class="row">
                    <!-- LINHA pt01 -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <!-- INICIO colunas 10 de 12-->


                        <!-- Sub Título -->
                        <p class="SubTitulo">Criação e Edição de Dados no QGIS</p>
                        <hr>

                        <p>Os dados no GIS podem ser carregados como arquivos separados, bancos de dados ou fontes externas online. Além disso, existem diferentes modelos de dados usados no SIG para representar a geometria de objetos espaciais. </p>

                        <p>O modelo de <strong>dados vetoriais</strong> é usado principalmente para expressar características discretas, como pontos (por exemplo, árvores crescendo separadamente e pontos de interesse), linhas (estradas ou ferrovias) e polígonos (edifícios ou fronteiras administrativas). </p>

                        <p>Os <strong>dados raster</strong> são utilizados para expressar fenômenos contínuos que são melhor representados por imagens do que por pontos, linhas ou polígonos. As fontes de dados raster mais comuns são imagens de sensoriamento remoto, modelos digitais de elevação e mapas topográficos digitalizados e georreferenciados.</p>

                        <p>Um conjunto de dados matriciais é composto por linhas (dispostas na horizontal) e por colunas (dispostas na vertical) de pixels, que é a unidade representada pela interseção entre as linhas e colunas. Cada pixel representa uma região geográfica, e o valor nesse pixel representa uma característica dessa região.</p>

                        <p>O QGIS usa a biblioteca de dados espaciais GDAL / OGR para ler e gravar vários formatos de arquivo vetorial e raster. Nas seções a seguir, discutiremos brevemente os formatos de arquivo mais utilizados. Além disso, daremos uma olhada nas fontes de dados amplamente utilizadas, como arquivos CSV.</p>

                        <br><!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Carregando Shapefiles</p>
                        <hr>

                        <br><p>A maioria dos dados vetoriais que usamos está no formato <em>ESRI shapefile</em>, que é um dos formatos de arquivo de dados vetoriais mais comuns. Existem algumas maneiras de carregar um arquivo shape no QGIS. Você pode abrir a janela de diálogo acessando <strong>Camada >> Adicionar camada >> Adicionar camada vetorial</strong> ou clicando no ícone &nbsp;<img src="imagens/Icone07.png" width="4%">&nbsp; na barra de ferramentas de gerenciamento de camadas. Em seguida, será aberta a tela mostrada na Figura 03:</p>

                        <br>
                        <div class="text-center">
                            <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="TituloFigura"><strong>Figura 03: </strong>Caixa de diálogo de abertura de vetor.</p>
                        </div>
                         
                        <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte:</strong> Caixa de diálogo de abertura de vetor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br><ol class="Texto">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><strong>Formato Original:</strong> pode ser Arquivo, Diretório, Banco de dados ou Protocolo. Neste curso, iremos trabalhar com a opção de fonte de arquivo, pois nossos dados são arquivos individuais guardados em pastas. </li>
                            <br><li class="wow fadeInLeft" data-wow-delay="0.6s"><strong>Codificação:</strong> se os dados com os quais você trabalha contêm símbolos especiais ou o conjunto de caracteres de seus atributos textuais difere da simbologia latina convencional, você deve escolher um tipo de codificação apropriado na lista suspensa. No caso de nossos dados, podemos manter a codificação padrão do sistema.</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="0.9s"><strong>Fonte:</strong> este botão serve para navegar para o diretório onde estão localizados os arquivos que iremos trabalhar, bastando clicar no ícone &nbsp;<img src="imagens/icone08.png" width="4%">&nbsp; . Você pode escolher um ou vários arquivos (com a tecla Ctrl) para adicionar após clicar no botão Abrir e depois em Adicionar. </li>
                        </ol>

                        <br><!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <p class="ImportanteTexto">Um arquivo ESRI shapefile consiste em pelo menos 4 arquivos (.shp, .shx, .dbf e .prj) que compartilham o mesmo nome e, entre eles, o que possui a terminação <strong>.shp</strong> é o que você deve selecionar para carregar os dados no QGIS. Você vê todos os arquivos porque o filtro de tipo de arquivo no canto inferior direito da janela de acesso ao arquivo está definido como Todos os arquivos por padrão. Para ocultar todos os arquivos desnecessários, escolha o tipo de arquivo shapefiles ESRI. </p>
                        </div>

                        <br><div class="row">
                            <div class="col-md-6">
                                <p class="wow fadeInRight" data-wow-delay="0.5s">Outro caminho interessante para acessar o shapefile é usar o painel Navegador para navegar até a pasta onde estão os arquivos. Selecione os arquivos que deseja carregar (um ou vários, mantendo pressionada a tecla Ctrl) e, a seguir, apenas arraste e solte-os na área do mapa. Se você deseja simplificar a navegação, adicione a pasta com a qual está trabalhando atualmente aos favoritos a partir do atalho do menu do botão direito, conforme pode ser visto na Figura 04.</p>
                            </div>

                            <div class="col-md-6">
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura04.png" data-bs-toggle="modal"  data-bs-target="#Imagem04">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="200" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="TituloFigura wow fadeInLeft" data-wow-delay="0.5s"><strong>Figura 04: </strong>Navegador para acesso aos shapefiles.</p>
                                </div>

                                <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="FonteFigura"><strong>Fonte:</strong>  Navegador para acesso aos shapefiles. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p><strong>Carregando arquivos vetoriais no QGIS.</strong></p>

                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://drive.google.com/file/d/1cseLbCQOnj6P6Dyy-FaMuP3WY7uBF93T/preview" width="640" height="480" allow="autoplay"></iframe>
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div><br>

                        <!-- <br><br>
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <p class="SaibaMaisTexto"><strong>Carregando arquivos vetoriais no QGIS</strong>
                            <br><br>Disponível em: <a href="https://drive.google.com/file/d/1-N13W1Bt6j2FiNjAqk2QZnRlf96DHAbR/view?usp=sharing" target="_blank">Google Drive</a>
                            </p>
                        </div> -->
                                            

                        <br><!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Carregando Arquivos Raster (Imagem / Matricial)</p>
                        <hr>

                        <p>O procedimento de importação de arquivos raster é semelhante ao adotado para importar vetores. Vamos trabalhar com o formato mais comum de arquivo raster, o GeoTIFF:</p>
                        <p>Para carregar um arquivo raster acesse <strong>Camada >> Adicionar camada >> Adicionar Camada Raster</strong> ou clicando no ícone &nbsp;<img src="imagens/Icone09.png" width="4%">&nbsp; na barra de ferramentas de gerenciamento de camadas. Em seguida, será aberta a tela mostrada na <strong>Figura 05</strong>:</p>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" width="90%" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="TituloFigura"><strong>Figura 05:</strong> Caixa de diálogo de abertura de raster.</p>
                        </div>

                        <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte:</strong> Caixa de diálogo de abertura de raster.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 05 - End -->

                    <br><br><ul class="none Texto">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><strong>1. Tipo de Fonte:</strong> Pode ser Arquivo ou Protocolo. Neste curso, iremos trabalhar com a opção de fonte de arquivo, pois nossos dados são arquivos individuais guardados em pastas;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><strong>2. Fonte:</strong> este botão serve para navegar para o diretório onde estão localizados os arquivos que iremos trabalhar, bastando clicar no ícone &nbsp;<img src="imagens/Icone08.png" width="4%">&nbsp;  .Você pode escolher um ou vários arquivos (com a tecla Ctrl) para adicionar após clicar no botão Abrir e depois em Adicionar.</li>
                        </ul>

                        <br><p>Também pode ser utilizado o painel navegador para importar a camada raster, da mesma forma que se procede com os vetores, já mostrado no <strong>item: Importando Valores Separados por Vírgula (.csv)</strong>.</p>

                        <p><strong>Carregando arquivos matriciais no QGIS.</strong></p>

                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://drive.google.com/file/d/1AUWlwpMfeHCa-dFjMwlA290KAh8QmkO0/preview" width="640" height="480" allow="autoplay"></iframe>
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div><br>

                        <br><!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Importando Valores Separados por Vírgula (.csv)</p>
                        <hr>

                        <br><p>Um arquivo de valores separados por vírgula (CSV) é outro formato de arquivo de dados bastante popular. Na verdade, é apenas uma planilha com os valores dos campos delimitados por vírgulas. Existem vários delimitadores possíveis em vez de vírgulas, como por exemplo, tabulações, espaços, dois pontos e assim por diante. Muitas vezes, essas tabelas contêm dados espaciais na forma de atributos posicionais representados por coordenadas de longitude ou latitude (XY).</p>
                        <br><p>Acesse o menu <strong>Camada >> Adicionar camada >> Adicionar Camada de Texto Delimitado</strong> ou apenas clique no botão  &nbsp;<img src="imagens/Icone10.png" width="4%">&nbsp; na barra de ferramentas de gerenciamento de camadas. Em seguida, será aberta a tela mostrada na <strong>Figura 06</strong>:</p>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="90%" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="TituloFigura"><strong>Figura 06:</strong> Tela de importação de arquivos csv.</p>
                        </div>

                        <!-- Imagem 06 - MODAL -->
                        <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte:</strong> Tela de importação de arquivos csv.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 06 - End -->

                        <br><ol class="Texto">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Navegar até a pasta <strong>Curso_QGIS >> Módulo 1 >> Dados</strong> e aponte para o arquivo <em>focos_calor.csv</em>;</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="0.6s">O QGIS tentará analisá-lo usando o delimitador especificado. Por padrão, o delimitador usado é a vírgula, mas você pode especificar qualquer outro delimitador usando Delimitadores personalizados (vírgula, tabulação, espaço e assim por diante) ou delimitador de expressão regular;</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="0.9s">A caixa de diálogo também fornece acesso a várias outras configurações úteis. Por exemplo, ativar a opção <em>primeiro registro tem nomes de campo</em> criar cabeçalhos para os campos;</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="1.2s">Após definir a geometria como coordenadas de ponto, o campo X e o campo Y contendo os valores de longitude e latitude serão carregados do conjunto de dados <strong>automaticamente</strong>. Caso não seja, escolha manualmente;</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="1.5s">Escolha o <strong>Sistema de Referência de Coordenadas (SRC)</strong> para o arquivo. </li>
                        </ol>

                        <p>Como podemos ver nos valores das colunas Latitude e Longitude, as coordenadas do ponto foram originalmente registradas em graus decimais. Na janela Seletor do sistema de referência de coordenadas, insira o filtro de código EPSG: 4674 para especificar SIRGAS2000 em Sistemas de coordenadas geográficas como o SRC inicial (Figura 6). Após clicar em OK, você verá que os dados aparecerão na tela do mapa como pontos.</p>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="500" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="TituloFigura"><strong>Figura 07:</strong> Seletor de sistema de referência de coordenadas.</p>
                        </div>

                        <!-- Imagem 07 - MODAL -->
                        <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte:</strong> Seletor de sistema de referência de coordenadas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 07 - End -->

                        <br><p>O QGIS usa definições de SRC com base no conjunto de dados de parâmetros geodésicos do <em>European Petroleum Search Group (EPSG)</em>, que contém descrições estruturadas detalhadas de sistemas de referência de coordenadas e transformações de aplicações globais, regionais, nacionais e locais. O banco de dados de identificadores EPSG pode ser usado para especificar um CRS no QGIS. Você pode ler mais sobre o EPSG em <a href="http://www.epsg-registry.org/" target="_blank">www.epsg-registry.org/</a>.</p>

                        <p><strong>Importando arquivos csv.</strong></p>

                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://drive.google.com/file/d/1z2-EFUkqt29b0t4nDai-wmh0vBivVYS4/preview" width="640" height="480" allow="autoplay"></iframe>
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div><br>

                        <br><br> 
                </div>

                <br><br>
                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico01.3.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico01.5.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- FIM COL MD-10 -->


            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<!--FIM CONTEUDO PARTE 03-->


    <!-- SCRIPT LIGHTBOX -->
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>