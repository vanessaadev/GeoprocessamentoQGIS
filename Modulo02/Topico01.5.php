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

                        <h2 class="Titulo">Estilizando camadas vetoriais.</h2>
                        <hr>

                        <p>Como vimos quando carregamos as camadas vetoriais, o QGIS as renderizar usando um estilo padrão e uma cor aleatória. Nessa prática, definiremos o estilo das camadas de ponto, linha e polígono. Você também se acostumará com as opções de estilo vetorial mais comuns. Independentemente do tipo de geometria da camada, sempre encontramos uma lista suspensa com as opções de estilo disponíveis no canto superior esquerdo da caixa de diálogo Estilo. As seguintes opções de estilo abaixo estão disponíveis para camadas vetoriais. Por ora, abordaremos as opções de simbologia <strong class="TextoBold">simples, categorizado</strong> e <strong class="TextoBold">graduado:</strong> </p><br>

                        <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <ul class="none">
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Símbolo simples:</strong> esta é a opção mais simples. Quando usamos um estilo de símbolo único, todos os pontos são exibidos com o mesmo símbolo;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Categorizado:</strong> este é o estilo de escolha se uma camada contiver pontos de categorias diferentes. Por exemplo, uma camada que contém os locais de diferentes atividades produtivas;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Graduado:</strong> Este estilo usado para visualizar valores numéricos, como por exemplo, medições de temperatura;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.2s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Baseado em regra:</strong> esta é a opção mais avançada. Os estilos baseados em regras são muito flexíveis porque nos permitem escrever várias regras para uma camada;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.5s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Deslocador de ponto:</strong> esta opção está disponível apenas para camadas de pontos. Esses estilos são úteis se você precisar visualizar camadas de pontos com vários pontos nas mesmas coordenadas. Por exemplo, alunos que moram no mesmo endereço;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.8s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Ponto de aglomeração:</strong> como ocorre com o deslocamento de pontos, esta opção está disponível apenas para camadas de pontos. Por padrão, o cluster de pontos mostra um rótulo numérico se os pontos se sobrepõem à contagem dos pontos;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="2.1s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Polígonos invertidos:</strong> esta opção está disponível apenas para camadas de polígonos. Ao usar esta opção, a simbologia definida será aplicada à área fora das bordas do polígono em vez de preencher a área dentro do polígono;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="2.4s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Mapa de calor:</strong> esta opção está disponível apenas para camadas de pontos. Nos permite criar um estilo de mapa de calor dinâmico;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="2.7s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">2.5D:</strong> Esta opção está disponível apenas para camadas de polígono. Ele nos permite criar polígonos extrudados em 2,5 dimensões.</li>
                                </ul>
                            </div>
                        </div><br>

                        <!-- Sub Título -->
                        <p class="SubTitulo">Símbolo Simples: estilos de ponto, linhas e polígonos</p>
                        <hr>
                        <!-- Fim Sub Título-->

                        <p>Em um novo projeto, carregue no painel de camadas os dados <strong class="TextoBold">focos.shp</strong> e <strong class="TextoBold">mde_centro_sul.tif</strong> localizados na pasta <strong class="TextoBold">Modulo2 >> Dados</strong>. Ambos serão mostrados no painel de camadas. A imagem será usada apenas para que possamos contextualizar os dados pontuais numa região, que será representada pelo raster. Configure a imagem conforme a opção de <strong class="TextoBold">sombreamento</strong> (seção 2.4.3).</p><br>

                        <!-- SubSub Título -->
                        <p class="SubSubTitulo">Pontos</p>
                        <hr>
                        <!-- Fim SubSub Título-->

                        <p>Nesta seção trabalharemos a ferramenta de <strong class="TextoBold">Símbolo Simples</strong>. Usaremos a caixa de diálogo Propriedades da camada que pode ser acessada através de um duplo clique sobre a camada ou com o botão direito do mouse na camada no painel Camadas, selecionando-se Propriedades. As opções disponíveis para marcadores simples incluem cores, tamanho, rotação e forma. No entanto, às vezes, um símbolo que você deseja não está disponível. Se for esse o caso, você pode criar seus próprios arquivos SVG ou importar um existente. Por ora, vamos usar os dados existentes no QGIS. </p><br>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <p class="ImportanteTexto"><strong class="TextoBold"><u>Baixando ícones .svg</u></strong>
                                <br><br>No link <a href="https://labs.mapbox.com/maki-icons/" target="_blank">https://labs.mapbox.com/maki-icons/</a> você pode acessar o site MAKI, que é um conjunto de ícones feito para designers de mapas. Maki inclui ícones de pontos de interesse comuns, como parques, museus, igrejas, etc. Cada ícone está disponível como um SVG em dois tamanhos: 11px por 11px e 15px por 15px. Maki é <em>open source</em> e tem licença <em>Creative Commons</em>.
                        </div><br>

                        <p class="text-center">Dê um duplo clique no arquivo <strong class="TextoBold">focos.shp</strong>. A tela mostrada na Figura 13 aparecerá em seguida: </p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                <img class="img-fluid wow fadeInRight" width="600" src="imagens/Figura13.png" alt="Figura 13">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 13</strong></p>
                        </div>

                        <!-- Imagem 13 - MODAL -->
                        <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura13.png" alt="Figura 13">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Imagem 13 - End -->

                        <br>
                        <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <br>
                                <ol>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s">Menu de escolha da opção de edição do estilo. No caso, manteremos <strong class="TextoBold">Símbolo simples</strong>;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s">Nesse espaço, existem os níveis de alteração da simbologia. Na imagem, podemos ver que a opção escolhida foi clicar sobre a opção <strong class="TextoBold">Marcador</strong> (em seguida iremos tratar da segunda opção – marcador simples);</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s">Unidade de medida do símbolo. Mantenha <strong class="TextoBold">milímetros</strong>;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.2s">Este item se refere à transparência do dado. Quanto mais próximo de zero, mais transparente;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.5s">Cor do ícone;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.8s">Tamanho do ícone;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="2.1s">Rotação do ícone;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="2.4s">Símbolos que podem ser atribuídos aos pontos. </li>
                                </ol>
                            </div>
                        </div><br>

                        <p class="text-center">Ainda na tela de propriedades, clicando em <strong class="TextoBold">Marcador Simples</strong>, a tela apresentada será a seguinte (Figura 14):</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                <img class="img-fluid wow fadeInLeft" width="700" src="imagens/Figura14.png" alt="Figura 14">
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

                        <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <ol>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"> No Tipo da Camada Símbolo, escolha a opção <strong class="TextoBold">Marcador SVG</strong>;</strong></li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"> Clique no <strong class="TextoBold">ícone</strong> que representa fogo;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s"> <strong class="TextoBold">Defina largura 5;</strong></li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.2s"> <strong class="TextoBold">Defina altura 5;</strong></li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.5s"> <strong class="TextoBold">Escolha a cor de sua preferência;</strong></li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.8s"> <strong class="TextoBold">Defina a largura do traço 0,2 e clique em OK.</strong></li>
                                </ol>
                            </div>
                        </div>

                        <p class="text-center">Os dados de focos de calor serão representados conforme a Figura 15:</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                <img class="img-fluid wow fadeInRight" width="400" src="imagens/Figura15.png" alt="Figura 15">
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
                        </div><br><br>
                        <!-- Imagem 15 - End -->

                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Linhas</p>
                        <hr>

                        <p>Carregue no painel de camadas o dado <strong class="TextoBold">estradas.shp</strong> localizado na pasta <strong class="TextoBold">CURSO_QGIS >> Modulo2 >> Dados</strong>. Usaremos esses dados para criar um estilo de linha que consiste em duas cores: uma cor de preenchimento e uma cor de contorno. Para fazer isso, <strong class="TextoBold">abra o painel Estilização de Camadas</strong> e selecione a opção <strong class="TextoBold">Símbolo Simples</strong>. Abaixo desta simbologia, clique no ícone para adicionar uma nova linha Simples. Agora você deve ter duas linhas aparecendo, que se parecem com a Figura 16:</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura16.png" alt="Figura 16" width="700<br><br>">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 16</strong></p>
                        </div>

                        <!-- Imagem 16 - MODAL -->
                        <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura16.png" alt="Figura 16">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <!-- Imagem 16 - End -->

                        <p>A linha inferior será a linha com a cor de contorno e a superior será a cor de preenchimento. Selecione a linha simples superior e altere a cor para vermelha e a largura para 0,5 mm. Em seguida, selecione a linha simples inferior e mude sua cor para preta e a largura para 0,8 milímetros, que é um pouco mais largo que a outra linha. Verifique a visualização e selecione Aplicar para testar a aparência do estilo quando aplicado à camada das estradas. Observe que o estilo ainda não parece perfeito, pois cada linha é desenhada separadamente, uma após a outra, e isso leva a uma aparência um tanto desconectada. Para alterar isso, selecione a entrada <strong class="TextoBold">(1) Linha</strong> na lista de camadas de símbolos e clique na caixa de diálogo >> <strong class="TextoBold">(2) Avançado</strong> (botão no canto inferior direito da caixa de diálogo de estilo) >> <strong class="TextoBold">(3) Níveis de símbolo</strong> e depois marque a opção <strong class="TextoBold">(4) Habilitar níveis de símbolos</strong> e clique em aplicar, conforme mostrado na Figura 17:</p><br>

                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-4">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura17.png" data-bs-toggle="modal" data-bs-target="#Imagem17">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura17.png" width="400" alt="Estilização banda simples falsa cor.">
                                    </a>
                                    <p class="FonteFigura"><strong class="TextoBold">Figura 17:</strong> Estilização banda simples falsa cor.</p>
                                </div>

                                <!-- Imagem 17 - MODAL -->
                                <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura17.png" alt="Estilização banda simples falsa cor.">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Imagem 17 - End -->
                            </div>

                            <div class="col-md-4">
                                <div class="col-sm-12">
                                    <br><br><br><br><br>
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura18.png" data-bs-toggle="modal" data-bs-target="#Imagem18">
                                            <img class="img-fluid wow fadeInUp" src="imagens/Figura18.png" alt="Estilização banda simples falsa cor">
                                        </a>
                                        <p class="FonteFigura"><strong class="TextoBold">Figura 18:</strong> Estilização banda simples falsa cor.</p>
                                    </div>

                                    <!-- Imagem 18 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura18.png" alt="Estilização banda simples falsa cor">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Imagem 18 - End -->


                                    <br><!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura19.png" data-bs-toggle="modal" data-bs-target="#Imagem19">
                                            <img class="img-fluid wow fadeInDown" src="imagens/Figura19.png" alt="Estilização banda simples falsa cor.">
                                        </a>
                                        <p class="FonteFigura"><strong class="TextoBold">Figura 19:</strong> Estilização banda simples falsa cor.</p>
                                    </div>

                                    <!-- Imagem 19 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura19.png" alt="Estilização banda simples falsa cor.">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div><br>
                                    <!-- Imagem 19 - End -->
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div><br>

                        <p class="text-center">O resultado será um arquivo com todas as linhas unidas continuamente. </p><br><br>

                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Polígonos</p>
                        <hr>

                        <p>Adicione ao painel de camadas o dado centro_sul.shp localizado na pasta CURSO_QGIS >> Modulo2 >> Dados. Usaremos esse shape para definir a poligonal da área que trabalharemos. Abra o painel de estilização de camadas. Será aberta a tela da Figura 20. </p><br>

                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-4">

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura20.png" data-bs-toggle="modal" data-bs-target="#Imagem20">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura20.png" width="350" alt="Figura 20">
                                    </a>
                                    <p class="FonteFigura"><strong class="TextoBold">Figura 20</strong> </p>
                                </div>

                                <!-- Imagem 20 - MODAL -->
                                <div class="modal fade text-center" id="Imagem20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura20.png" alt="Figura 20">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Imagem 20 - End -->

                            </div>
                            <div class="col-md-4">

                                <!-- início card -->
                                <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                                    <div class="card-header">
                                    </div>
                                    <div class="card-body">
                                        <ol>
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"> Clique em Preenchimento simples;</li><br>
                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"> Estilo de preenchimento: sem pincel;</li><br>
                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"> Largura do traço: 0.5mm;</li><br>
                                            <li class="wow fadeInLeft" data-wow-delay="1.0s"> Estilo do traço: linha sólida.</li>
                                        </ol>
                                    </div>
                                </div>
                                <!-- fim card -->
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div><br>

                        <p class="text-center">O resultado na sua área do mapa deve ser similar ao mostrado na Figura 21.</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura21.png" data-bs-toggle="modal" data-bs-target="#Imagem21">
                                <img class="img-fluid wow fadeInRight" width="400" src="imagens/Figura21.png" alt="Figura 21">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 21</strong> </p>
                        </div>

                        <!-- Imagem 21 - MODAL -->
                        <div class="modal fade text-center" id="Imagem21" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura21.png" alt="Figura 21">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>

                            </div>
                        </div> <br>
                        <!-- Imagem 21 - End -->

                        <p>Desabilite a camada <strong class="TextoBold">mde_centro_sul.tif</strong> (Sombreamento) e adicione ao painel de camada as seguintes camadas: <strong class="TextoBold">acudes.shp</strong> e <strong class="TextoBold">vegetacao_centro_sul.shp</strong>. No painel de estilização de camadas, mantenha a opção <strong class="TextoBold">Símbolo simples</strong> e altere o estilo do dado <strong class="TextoBold">acudes.shp</strong> com o símbolo <strong class="TextoBold">topo water</strong> e o dado <strong class="TextoBold">vegetacao_centro_sul.shp</strong> com a simbologia <strong class="TextoBold">topo forest</strong>. Na Figura 22 você pode visualizar a localização dos estilos.</p><br><br>

                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura22.png" data-bs-toggle="modal" data-bs-target="#Imagem22">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura22.png" width="350" alt="Figura 22">
                                    </a>
                                    <p class="FonteFigura"><strong class="TextoBold">Figura 22</strong> </p>
                                </div>
                                <!-- Imagem 22 - MODAL -->
                                <div class="modal fade text-center" id="Imagem22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura22.png" alt="Figura 22">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Imagem 22 - End -->
                            </div>

                            <div class="col-md-4"><br><br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura23.png" data-bs-toggle="modal" data-bs-target="#Imagem23">
                                        <img class="img-fluid wow fadeInRight" src="imagens/Figura23.png" width="300" alt="Figura 23">
                                    </a>
                                    <p class="FonteFigura"><strong class="TextoBold">Figura 23</strong> </p>
                                </div>
                                <!-- Imagem 23 - MODAL -->
                                <div class="modal fade text-center" id="Imagem23" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura23.png" alt="Figura 23">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 23 - End -->
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                        <br><br>
                        <p>O resultado da modificação dos estilos deve estar conforme a imagem ao lado. Esse processo é bem simples, já que envolve apenas um comando. </p>
                        <p>O tipo de simbologia de preenchimento <strong class="TextoBold">Shapeburst</strong> é muito bom para simbolizar corpos d'água. Ele faz isso usando um preenchimento gradiente que flui da borda do polígono para dentro. Esta opção é mostrada para a camada <strong class="TextoBold">acudes.shp</strong> na Figura 31, atribuindo ao dado uma aparência de profundidade. </p>

                        <br><br>
                        <div class="row">
                            <div class="col-md-6">

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura24.png" data-bs-toggle="modal" data-bs-target="#Imagem24">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura24.png" alt="Figura 24">
                                    </a>
                                    <p class="TituloFigura"><strong class="TextoBold">Figura 24</strong> </p>
                                </div>

                                <!-- Imagem 24 - MODAL -->
                                <div class="modal fade text-center" id="Imagem24" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura24.png" alt="Figura 24">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Imagem 24 - End -->
                            </div>

                            <div class="col-md-6">
                                <!-- início card -->
                                <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                                    <div class="card-header">
                                    </div>
                                    <div class="card-body">
                                        <ol>
                                            <li class="wow fadeInRight" data-wow-delay="0.3s"> Clique em Preenchimento simples;</li>
                                            <li class="wow fadeInRight" data-wow-delay="0.6s"> Clique em Preenchimento simples;</li>
                                            <li class="wow fadeInRight" data-wow-delay="0.9s"> Tipo de camada símbolo: Preenchimento shapeburst;</li>
                                            <li class="wow fadeInRight" data-wow-delay="1.2s"> Cor 1: será a cor mais externa;</li>
                                            <li class="wow fadeInRight" data-wow-delay="1.5s"> Cor 2: será a cor mais interna.</li>
                                        </ol>
                                    </div>
                                </div>
                                <!-- fim card -->

                                <!-- Titulo Figura --><br>
                                <div class="text-center">
                                    <a href="imagens/Figura25.png" data-bs-toggle="modal" data-bs-target="#Imagem25">
                                        <img class="img-fluid wow fadeInRight" src="imagens/Figura25.png" width="300" alt="Figura 25">
                                    </a>
                                    <p class="FonteFigura"><strong class="TextoBold">Figura 25</strong> </p>
                                </div>

                                <!-- Imagem 25 - MODAL -->
                                <div class="modal fade text-center" id="Imagem25" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura25.png" alt="Figura 25">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Imagem 25 - End -->

                            </div>
                        </div><br>

                        <p>O aspecto da estilização shapeburst no seu dado deve ficar como o da figura apresentada ao lado, na qual, ao passo que se aproxima do centro, tem-se uma noção de maior profundidade.</p>
                        <p>Agora você pode ver o poder das camadas e do controle de camadas. No painel de camadas, para efeito de visualização dos dados, mantenha os pontos no topo, seguidos pelas linhas e depois pelos polígonos. Os dados raster devem ficar abaixo de todas as camadas. </p><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Quer saber mais sobre? </p>
                                <p>Assista aos vídeos abaixo para acompanhar o procedimento de<strong class="TextoBold"> Estilização de camadas símbolo simples (pontos, linhas e polígonos)</strong>.</p><br>
                                <p class="text-center"><strong class="TextoBold">Pontos:</strong></p>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1K24-lnGXmcRe_PKY9yqd1IFTDBXO9fUi/preview"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <!-- FIM VÍDEO --><br>
                                <p class="text-center"><strong class="TextoBold">Linhas:</strong></p>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1A4aHccqbEK5fth8XpXmoBXRVjPKJWuIH/preview"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <!-- FIM VÍDEO --><br>
                                <p class="text-center"><strong class="TextoBold">Polígonos:</strong></p>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1kj3_xVZT1B0vSNQRU_dAIL0iRhjpjj7D/preview"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <!-- FIM VÍDEO --><br>
                            </div>
                        </div><br><br>

                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Simbologia Categorizado</p>
                        <hr>

                        <p>A opção de simbologia categorizada é utilizada quando tratamos de dados cujas variáveis são categóricas, como por exemplo, tipo de vegetação, solo, existência ou não de uma característica, etc. No QGis, essa opção funciona da mesma forma para pontos, linhas e polígonos. Desabilite todas as camadas ativas no painel de camada. Acesse a pasta <strong class="TextoBold">Modulo2 >> Dados</strong> e abra o arquivo vetorial <strong class="TextoBold">centro_sul_municipios.shp</strong>. Clique sobre a camada aberta e observe que aparecerá as opções de estilos no painel de estilização de camadas, conforme Figura 27.</p><br>

                        <div class="row">
                            <div class="col-md-6">

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura26.png" data-bs-toggle="modal" data-bs-target="#Imagem26">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura26.png" width="300" alt="Figura 26">
                                    </a>
                                    <p class="FonteFigura"><strong class="TextoBold">Figura 26</strong> </p>
                                </div>

                                <!-- Imagem 26 - MODAL -->
                                <div class="modal fade text-center" id="Imagem26" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura26.png" alt="Figura 26">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 26 - End -->
                            </div>

                            <div class="col-md-6">

                                <!-- início card -->
                                <br>
                                <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                                    <div class="card-header">
                                    </div>
                                    <div class="card-body">
                                        <ol>
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"> Escolha a opção categorizado;</li><br>
                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"> Escolha o item “OMMA”;</li><br>
                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"> Clique em Classificar.</li>
                                        </ol>
                                    </div>
                                </div><br>
                                <!-- fim card -->

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura27.png" data-bs-toggle="modal" data-bs-target="#Imagem27">
                                        <img class="img-fluid wow fadeInRight" src="imagens/Figura27.png" width="390" alt="Figura 27">
                                    </a>
                                    <p class="FonteFigura"><strong class="TextoBold">Figura 27</strong> </p>
                                </div>

                                <!-- Imagem 27 - MODAL -->
                                <div class="modal fade text-center" id="Imagem27" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura27.png" alt="Figura 27">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Imagem 27 - End -->

                            </div>
                        </div><br>

                        <p>Observe que no painel em branco aparecerá as informações da coluna “OMMA” contendo “Sim” e “Não”. Esses dados se referem à existência ou não de órgão ambiental municipal. O aspecto da estilização categorizada retornará no seu dado deve ficar como o da figura apresentada ao lado. As cores podem não ser a mesma, mas as informações serão divididas por meio de cores. </p><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Quer saber mais?</p>
                                <p>Assista ao vídeo abaixo para acompanhar o procedimento de<strong class="TextoBold"> Estilização de camadas categorizado (pontos, linhas e polígonos)</strong>.</p><br>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1pIjPpEF9UXw8bFak6xS1LlbcTGNqNwb0/preview"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <!-- FIM VÍDEO -->
                            </div>
                        </div>

                        <br><!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Simbologia Graduado</p>
                        <hr>

                        <p>Neste tipo de simbologia as feições são representadas por um conjunto de cores relacionada às quantidades, ou seja, são variáveis numéricas, como por exemplo, população, área de uma classe ou população. No QGis, essa opção funciona da mesma forma para pontos, linhas e polígonos. Iremos trabalhar com a mesma base usada no item <u>Pontos</u> Clique sobre a camada centro_sul_municipios.shp. e observe que aparecerá as opções de estilos no painel de estilização de camadas, conforme Figura 27.</p><br>

                        <div class="row">
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura28.png" data-bs-toggle="modal" data-bs-target="#Imagem28">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura28.png" width="300" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong class="TextoBold">Figura 28</strong> </p>
                                </div>
                                <!-- Imagem 28 - MODAL -->
                                <div class="modal fade text-center" id="Imagem28" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura28.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Imagem 28 - End -->

                            </div>
                            <div class="col-md-6">

                                <!-- início card -->
                                <br>
                                <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                                    <div class="card-header">
                                    </div>
                                    <div class="card-body">
                                        <ol>
                                            <li class="wow fadeInRight" data-wow-delay="0.3s"> Escolha a opção categorizado;</li><br>
                                            <li class="wow fadeInRight" data-wow-delay="0.6s"> Escolha o item “OMMA”;</li><br>
                                            <li class="wow fadeInRight" data-wow-delay="0.9s"> Clique em Classificar.</li>
                                        </ol>
                                    </div>
                                </div><br>
                                <!-- fim card -->

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura29.png" data-bs-toggle="modal" data-bs-target="#Imagem29">
                                        <img class="img-fluid wow fadeInRight" src="imagens/Figura29.png" width="380" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong class="TextoBold">Figura 29</strong> </p>
                                </div>

                                <!-- Imagem 29 - MODAL -->
                                <div class="modal fade text-center" id="Imagem29" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura29.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Imagem 29 - End -->

                            </div>
                        </div><br>

                        <p>Observe que no painel em branco aparecerá as informações da coluna "Área" contendo os intervalos escolhidos, de acordo com o número de classes definido. Esses dados se referem à área dos municípios, estando em azul os menores e, em vermelho, os maiores. O aspecto da estilização categorizada retornará no seu dado deve ficar como o da figura apresentada ao lado. As cores podem não ser a mesma, mas as informações serão divididas por meio de cores.</p><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Quer saber mais sobre? </p>
                                <p>Acesse ao vídeo abaixo para acompanhar o procedimento de <strong class="TextoBold">Estilização de camadas: Graduado (Pontos, Linhas e Polígonos)</strong>.</p>
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