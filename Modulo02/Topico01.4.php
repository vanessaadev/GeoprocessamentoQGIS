<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01.4';
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

                        <h2 class="SubTitulo">Estilizando Camadas Raster</h2>
                        <hr>

                        <p>Em um novo projeto, carregue os arquivos <strong class="TextoBold">L8_composicao_crato.tif, mde_crato.tif e uso_cobertura_crato.tif</strong> da pasta <strong class="TextoBold">Modulo2 >> Dados</strong>.</p><br>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <p class="ImportanteTexto">Caso as imagens apareçam com espaços em preto, basta que você dê um duplo clique sobre a imagem e, na tela que abrir, clique na aba transparência. No item sem valor de dados, atribua valor 0 (zero) e clique em ok. Faça isso em todas as imagens que aparecerem com espaços pretos. </p>
                        </div><br>

                        <p>Ative o painel Estilização de Camadas <strong class="TextoBold">(Exibir >> Painéis >> Estilização de Camadas)</strong>, caso ainda não esteja ativado. </p>
                        <p>Sua tela deve ficar similar à tela mostrada na Figura 06, com as três camadas raster carregadas no painel de camadas, bem como com o painel de estilos ativado à direita.</p>
                        <p>Na janela do mapa, agora temos três dos tipos mais comuns de conjuntos de dados Raster: uma imagem de satélite (Landsat 8), um conjunto de dados de Terreno (Modelo de Digital de Elevação) e um conjunto de dados de uso e cobertura vegetal que foi carregado como uma imagem da paleta por padrão. </p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura06.png" alt="Arquivos raster carregados na tela do QGIS." width="800" max-width="80%">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 06: </strong> Arquivos raster carregados na tela do QGIS.</p>
                        </div>

                        <!-- Imagem 06 - MODAL -->
                        <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura06.png" alt="Arquivos raster carregados na tela do QGIS.">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>

                            </div>
                        </div><br>
                        <!-- Imagem 06 - End -->

                        <p>No QGIS 3, existem cinco métodos para estilizar seu raster. Esses métodos consistem no seguinte:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Cor multibanda:</strong> este estilo é usado se o raster tiver várias bandas. Isso geralmente acontece com imagens de satélite com várias bandas.</li><br>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Paletizado/Valores Únicos:</strong> Este estilo é usado se um raster de banda única vier com uma paleta indexada.</li><br>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Banda Simples Cinza:</strong> se um raster não tiver bandas múltiplas nem indexado à paleta (como é o caso dos modelos de elevação), eles serão renderizados usando este estilo.</li><br>
                            <li class="wow fadeInLeft" data-wow-delay="1.2s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Banda Simples Falsa-cor:</strong> em vez de ser limitado a cinza, este estilo nos permite renderizar uma banda raster usando um mapa de cores de nossa escolha.</li><br>
                            <li class="wow fadeInLeft" data-wow-delay="1.5s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Sombreamento:</strong> isso é útil para quaisquer rasters derivados de DEM. Isso nos dá a capacidade de alterar o ângulo em que esses conjuntos de dados são exibidos.</li><br>
                        </ul><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Quer saber mais sobre? </p>
                                <p>Acesse ao vídeo abaixo para acompanhar o procedimento de <strong class="TextoBold">Paletização</strong>.</p>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1zedmD1s0bzw6NrZzCcDVQbEHWwPOZyFX/preview"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <!-- FIM VÍDEO -->
                            </div>
                        </div><br>

                        <!-- Sub Título -->
                        <p class="SubTitulo">Estilo de Camada – Paletizado / Valores Únicos</p>
                        <hr>
                        <!-- Fim Sub Título -->

                        <p>Utilizamos a opção paletizada <strong class="TextoBold">(Figura 07)</strong> quando estamos trabalhando com dados categóricos, ou seja, dados que representam categorias individuais, como por exemplo, uso e cobertura do solo, onde cada valor único representa uma categoria. A paleta é renderizada automaticamente. Essa opção pode ser usada para todos os tipos de bandas raster, atribuindo uma cor a cada valor raster único.</p><br>

                        <div class="row">
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura07.png" width="400" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 07 - MODAL -->
                                <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Figura 07</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 07 - End -->
                            </div>
                            <div class="col-md-6">
                                <br><br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura07_1.png" data-bs-toggle="modal" data-bs-target="#Imagem07_1">
                                        <img class="img-fluid wow fadeInRight" src="imagens/Figura07_1.png" width="300" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 07.1 - MODAL -->
                                <div class="modal fade text-center" id="Imagem07_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura07_1.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Figura 07.1</strong></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Imagem 07.1 - End -->
                            </div>
                        </div><br>

                        <p class="TituloFigura text-center"><strong class="TextoBold">Figura 07 e 07.1:</strong> Estilização paletizada/valores únicos</p><br>

                        <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <ul class="none">
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Escolha o dado <strong class="TextoBold">uso_cobertura_crato;</strong></li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Escolha a opção <strong class="TextoBold">Paletizado/Valores únicos;</strong></li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Clique em <strong class="TextoBold">Classificar</strong>.</li>
                                </ul>
                            </div>
                        </div><br>

                        <p>Sua imagem terá o aspecto mostrado na imagem ao lado, não necessariamente com as mesmas cores, já que o QGIS define as cores aleatoriamente. Cada cor está associada a um número, que representa uma classe de uso e cobertura do solo. </p>
                        <p>Se você deseja alterar uma cor, basta clicar duas vezes na cor e a caixa de diálogo <strong class="TextoBold">Selecionar cor</strong> aparecerá. Também é possível atribuir rótulos às cores. O rótulo aparecerá na legenda da camada raster. Para isso, basta dar um duplo clique na coluna de <strong class="TextoBold">rótulo</strong> e atribuir a informação desejada. </p>
                        <p>Você também pode clicar com o botão direito sobre as linhas selecionadas na tabela de cores, que irá mostrar um menu contextual para mudar a cor, opacidade ou o rótulo.</p><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Quer saber mais sobre? </p>
                                <p>Acesse ao vídeo abaixo para acompanhar o procedimento de <strong class="TextoBold">Estilização de camadas por valores únicos</strong>.</p>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1jZdfYFiY83_CMZbZ2_6IQ-h3Vpa-6GX-/preview"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <!-- FIM VÍDEO -->
                            </div>
                        </div><br>

                        <!-- Sub Título -->
                        <p class="SubTitulo">Estilo de Camada – Banda Simples Cinza / Banda Simples Falsa Cor</p>
                        <hr>
                        <!-- Fim Sub Título -->

                        <p>Utilizados a opção <strong class="TextoBold">Banda Simples Cinza</strong> (Figura 08) quando o raster não tiver bandas múltiplas nem indexado à paleta (como é o caso dos modelos de elevação). O aspecto visual do dado será uma imagem variando do preto ao branco, ou seja, do menor ao maior nível de cinza.</p>

                        <div class="row">
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 08 - MODAL -->
                                <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Figura 08</strong> </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Imagem 08 - End -->
                            </div>
                            <div class="col-md-6">
                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura08_1.png" data-bs-toggle="modal" data-bs-target="#Imagem08_1">
                                        <img class="img-fluid wow fadeInRight" src="imagens/Figura08_1.png" width="300" right="300" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 08.1 - MODAL -->
                                <div class="modal fade text-center" id="Imagem08_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura08_1.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Figura 08.1</strong></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Imagem 08.1 - End -->
                            </div>
                        </div>
                        <br>

                        <p class="TituloFigura text-center"><strong class="TextoBold">Figura 08 e 08.1:</strong> Estilização banda simples cinza</p><br>

                        <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <ul class="none">
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Escolha o <strong class="TextoBold">dado mde_crato;</strong></li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Escolha a opção <strong class="TextoBold">Banda simples cinza;</strong></li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Tipo de <strong class="TextoBold">Gradiente.</strong></li>
                                </ul>
                            </div>
                        </div><br>

                        <p>No caso da opção <strong class="TextoBold">Banda Simples Falsa-cor (Figura 09)</strong>, ao invés de se limitar aos níveis de cinza, este estilo nos permite renderizar uma banda raster usando um conjunto de cores de nossa escolha. Sua imagem terá o aspecto colorido.</p><br>

                        <div class="row">
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura09.png" alt="Estilização banda simples falsa cor">
                                    </a>
                                    <p class="FonteFigura"><strong class="TextoBold">Figura 09:</strong> Estilização banda simples falsa cor</p><br>
                                </div>

                                <!-- Imagem 09 - MODAL -->
                                <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura09.png" alt="Estilização banda simples falsa cor">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Imagem 09 - End -->
                            </div>

                            <div class="col-md-6">
                                <br><br><br>
                                <br><br><br>
                                <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                                    <div class="card-header">
                                    </div>
                                    <div class="card-body">
                                        <ol>
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"> Escolha a opção <strong class="TextoBold">mde_crato; </strong></li>
                                            <br>
                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"> Escolha a opção <strong class="TextoBold">Banda simples falsa-cor;</strong></li>
                                            <br>
                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"> Esta opção lista o tipo de interpolação. Mantenha a opção <strong class="TextoBold">linear;</strong></li>
                                            <br>
                                            <li class="wow fadeInLeft" data-wow-delay="1.0s"> <strong class="TextoBold">Gradiente de cores:</strong> nesta opção estão as cores que podem ser atribuídas ao seu dado. Escolha a paleta <strong class="TextoBold">Spectral</strong> e na mesma aba aberta clique em <strong class="TextoBold">inverter gradiente de cores.</strong></li>
                                            <br>
                                            <li class="wow fadeInLeft" data-wow-delay="1.3s"> Nesta área aparecerão as classes escolhidas conforme as configurações feitas nos itens 6 e 7;</li>
                                            <br>
                                            <li class="wow fadeInLeft" data-wow-delay="1.6s"> Nesta opção pode ser escolhida a forma de classificação dos intervalos de classes. Escolha o <strong class="TextoBold">intervalo igual;</strong></li>
                                            <br>
                                            <li class="wow fadeInLeft" data-wow-delay="1.9s"> Defina <strong class="TextoBold">6 classes; </strong></li>
                                            <br>
                                            <li class="wow fadeInLeft" data-wow-delay="2.0s"> Esta opção aplica as configurações escolhidas. </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Quer saber mais sobre? </p>
                                <p>Acesse ao vídeo abaixo para acompanhar o procedimento de <strong class="TextoBold"> Estilização de camadas por Bandas Simples Cinza / Banda Simples Falsa Cor</strong>.</p>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1K95KUsNO-J-go9-V6w6AaAhUeuMRH_GT/preview"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <!-- FIM VÍDEO -->
                            </div>
                        </div><br>
                        <!-- Fim Saiba Mais -->

                        <!-- Sub Título -->
                        <p class="SubTitulo">Sombreamento</p>
                        <hr>
                        <!-- Fim Sub Título -->

                        <p>Renderize uma camada raster usando o sombreamento. Essa ferramenta mostra o sombreamento básico da imagem, com as áreas iluminadas e suas sombras.</p>

                        <div class="row">
                            <div class="col-md-6">
                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura10.png" alt="Figura 10">
                                    </a>
                                </div>

                                <!-- Imagem 10 - MODAL -->
                                <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura10.png" alt="Figura 10">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Imagem 10 - End -->
                            </div>
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura10_1.png" data-bs-toggle="modal" data-bs-target="#Imagem10_1">
                                        <img class="img-fluid wow fadeInRight" src="imagens/Figura10_1.png" width="200" alt="Figura 10.1">
                                    </a>
                                </div>

                                <!-- Imagem 10.1 - MODAL -->
                                <div class="modal fade text-center" id="Imagem10_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura10_1.png" alt="Figura 10.1">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 10.1 - End -->
                            </div>
                        </div>

                        <p class="TituloFigura text-center"><strong class="TextoBold">Figura 10 e 10.1</strong> </p><br>

                        <br>
                        <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <ol>
                                    <li> Escolha o raster <strong class="TextoBold">mde_crato</strong>;</li><br>
                                    <li> Escolha a opção <strong class="TextoBold">sombreamento</strong>;</li><br>
                                    <li> A banda a ser utilizada. Como o raster só tem uma banda, será apenas ela;</li><br>
                                    <li> Ângulo de elevação da fonte de luz (sol). Padrão é 45º;</li><br>
                                    <li> Azimute: é a direção angular da fonte de luz. Padrão é 315º.</li><br>
                                    <li> Fator Z: exagero vertical. Quanto maior, mais serão notadas diferenças no terreno. Padrão é 1.</li><br>
                                    <li> Multidirecional: Especifica se o sombreamento multidirecional deve ser usado (o padrão é desativado).</li>
                                </ol>
                            </div>
                        </div><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Quer saber mais sobre? </p>
                                <p>Acesse ao vídeo abaixo para acompanhar o procedimento de <strong class="TextoBold">Estilização de camadas por sombreamento</strong>.</p>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1_9NStFlb13k8kjs670dx9XDggTkR-Z_6/preview"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <!-- FIM VÍDEO -->
                            </div>
                        </div><br>
                        <!-- Fim Saiba Mais -->

                        <!-- Sub Título -->
                        <p class="SubTitulo">Estilo de Camada - Multibanda Colorida</p>
                        <hr>
                        <!-- Fim Sub Título -->

                        <p>Com o renderizador de cores multibanda, três bandas selecionadas da imagem serão usadas como o componente vermelho, verde ou azul da imagem colorida. O QGIS busca automaticamente os valores Min e Max para cada banda do raster e dimensiona a coloração de acordo. Você pode controlar os intervalos de valores na seção <strong class="TextoBold">Configurações de valor mínimo / máximo</strong>. Ative a camada <strong class="TextoBold">L8_composicao_crato</strong>. Deverá aparecer na tela, a imagem da área, bem como a tela de estilização de camada (Figura 11).</p>
                        <p>Um método de aprimoramento de contraste pode ser aplicado aos valores: 'Sem realce', 'Estender para MinMax', 'Estender e cortar para MinMax' e 'Cortar para MinMax'.</p><br>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <p class="ImportanteTexto"><u><strong class="TextoBold">Aprimoramento de contraste</strong></u>
                                <br>Ao adicionar rasters, a opção <strong class="TextoBold">“Melhorar Contraste”</strong> sempre será definida automaticamente para <strong class="TextoBold">“estender para MinMax”</strong>, mesmo se isso for definido para outro valor nas opções gerais do QGIS.
                            </p>
                        </div><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura11.png" alt="Imagem de satélite e painel de estilização multibanda colorida.">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 11:</strong> Imagem de satélite e painel de estilização multibanda colorida.</p>
                        </div>

                        <!-- Imagem 11 - MODAL -->
                        <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura11.png" alt="Imagem de satélite e painel de estilização multibanda colorida.">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>

                            </div>
                        </div><br>
                        <!-- Imagem 11 - End -->

                        <p>A imagem que compõe a camada <strong class="TextoBold">L8_composicao_crato</strong> é composta por diversas bandas, mais especificamente 6 bandas. Essas bandas combinadas geram diversas informações, cada uma com uma possibilidade diferente. Vamos fazer diversas combinações de três em três bandas, obtendo resultados diferentes, seguindo o descrito na Figura 12.</p>

                        <div class="row">
                            <div class="col-md-6">
                                <br><br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura12.png" alt="Estilização banda simples cinza">
                                    </a>
                                    <p class="FonteFigura"><strong class="TextoBold">Figura 12:</strong> Estilização banda simples cinza.</p>
                                </div>

                                <!-- Imagem 12 - MODAL -->
                                <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura12.png" alt="Estilização banda simples cinza">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Imagem 12 - End -->
                            </div>
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura12_1.png" data-bs-toggle="modal" data-bs-target="#Imagem12_1">
                                        <img class="img-fluid wow fadeInRight" src="imagens/Figura12_1.png" width="300" alt="Estilização banda simples cinza">
                                    </a>
                                    <p class="FonteFigura"><strong class="TextoBold">Figura 12.1:</strong> Estilização banda simples cinza</p>
                                </div>

                                <!-- Imagem 12.1 - MODAL -->
                                <div class="modal fade text-center" id="Imagem12_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura12_1.png" alt="Estilização banda simples cinza">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Imagem 12.1 - End -->
                            </div>
                        </div>

                        <br>
                        <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <ol>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"> Escolha a opção <strong class="TextoBold">L8_composição_crato</strong>; </li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"> Escolha a opção <strong class="TextoBold">Multibanda colorida</strong>;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s"> Área de combinação de bandas.</li>
                                </ol>
                            </div>
                        </div><br>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <p class="ImportanteTexto"><u><strong class="TextoBold">Visualizando uma única banda de um raster multibanda</strong></u>
                                <br><br>Se você deseja visualizar <em>uma única banda de uma imagem multibanda</em> (por exemplo, vermelho), você deve definir o tipo de imagem como <strong class="TextoBold">Banda Simples Cinza</strong> e, em seguida, selecionar a banda do Vermelho como a banda cinza a ser usada.
                            </p>
                        </div><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Quer saber mais sobre? </p>
                                <p>Acesse ao vídeo abaixo para acompanhar o procedimento de <strong class="TextoBold">Estilização de camadas por multibanda colorida</strong>.</p>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/1JGd5UXyJpirzszsK4U3U903lpmbalTB2/preview"></iframe>
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
                <a href="Topico01.3.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Topico01.5.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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