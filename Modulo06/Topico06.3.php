<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico06';
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

                    <!-- Sub Título -->
                    <p class="SubTitulo">Menu “Miscelânea”</p>
                            <hr>

                            <p>Na maioria dos casos, as imagens são adquiridas em blocos contendo diferentes cenas e bandas. Isso quer dizer que para gerar informações você precisa unir essas imagens, seja para gerar uma composição colorida, seja para adequar o seu tamanho à área de estudo. Nesses casos, a melhor medida prática para fazer isso é mesclar os rasters em um único arquivo. Isso pode apresentar algumas complicações, normalmente em termos do tamanho da saída raster mesclada.</p>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">Mesclagem de cenas</p>
                            <hr>

                            <p>Em um novo projeto QGIS, carregue as camadas raster <strong>AP_10560.tif</strong>  e <strong>AP_04944.tif</strong> disponíveis na pasta <strong>Módulo 6 >> Dados</strong> . Para acessar a ferramenta, navegue até o menu<strong> Raster >> Miscelânea >> Mesclar</strong>. Será aberta a seguinte tela:</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                    <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura05.png" alt="Alt da imagem fica aqui" width="750">
                                </a>
                                <p class="TituloFigura headline1"><strong>Figura 05</strong> </p>
                            </div>

                            <!-- Imagem 05 - MODAL -->
                            <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 05 - End -->

                            <p>Na janela Mesclar, escolha os arquivos que deseja mesclar no botão do navegador Camadas de entrada <strong>(AP_10560.tif e AP_04944.tif)</strong> .</p>
                            <p>2. Marque a opção <strong>Escolher tabela de pseudocores da primeira camada</strong>. Isso garantirá que as faixas de cores corretas sejam aplicadas em todos os arquivos mesclados, ou seja, a imagem não conterá diferenças entre as diferentes cenas, como por exemplo uma ficar mais clara que a outra. Mantenha todos os outros valores e configurações conforme listado.</p>
                            <p>3. Defina o campo Mesclado como o local, nome e tipo de arquivo para salvar o novo raster de mesclagem. Salve na pasta <strong> Módulo 6 >> Resultados</strong> com o nome <strong>mde_mosaico</strong>. Você também pode deixar em branco para escrever uma camada temporária chamada Mesclada, mas não faremos isso nessa prática.</p>
                            <p> Lembrando que nem sempre ao usar as ferramentas raster (conforme descrito neste item), você precisa ter as camadas raster carregadas na tela do mapa. Usando o botão Navegador, que está localizado no final do arquivo de Entrada da Camada, você pode selecionar um arquivo a ser trabalhado que não foi carregado na tela do mapa.</p>

                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa headline">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <div class="SaibaMaisTexto">
                                <center><h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6></center><br>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                        <iframe src="https://drive.google.com/file/d/1lZys-R6g4u9VOLaVommX_LLICnqe5TjW/preview" width="640" height="480" allow="autoplay"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                </div>
                            </div>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">Composição de Bandas</p>
                            <hr>

                            <p>Composição de banda é o termo que os profissionais de sensoriamento remoto usam para se referir à atribuição de cores para representar o brilho em diferentes regiões do espectro eletromagnético. Embora existam muitas maneiras de atribuir cores para representar diferentes regiões do espectro, a experiência mostra que algumas provaram ser mais úteis do que outras. </p>
                            <p>A imagem abaixo mostra as bandas do satélite Landsat 8 OLI, suas descrições, comprimento de onda e suas resoluções espaciais. </p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura06.png" data-bs-toggle="modal"  data-bs-target="#Imagem06">
                                    <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura06.png" alt="Alt da imagem fica aqui" width="550">
                                </a>
                                <p class="TituloFigura headline1"><strong>Figura 06</strong> </p>
                            </div>

                            <!-- Imagem 06 - MODAL -->
                            <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                        
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 06 - End -->

                            <p>A seguir são mostradas as composições mais comuns entre as bandas dos satélites Landsat 4, 5, 7 e 8. Essas informações foram obtidas do site do Serviço Geológico Americano (USGS).</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                    <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura07.png" alt="Alt da imagem fica aqui" width="550">
                                </a>
                                <p class="TituloFigura headline1"><strong>Figura 07</strong></p>
                            </div>

                            <!-- Imagem 07 - MODAL -->
                            <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte:</strong> https://www.usgs.gov/media/images/common-landsat-band-rgb-composites </p>                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 07 - End -->

                            <p><strong>Infravermelho colorido (5, 4, 3):</strong>  Essa combinação de bandas também é chamada de composto de infravermelho próximo (NIR). Ele usa infravermelho próximo (5), vermelho (4) e verde (3). Como a clorofila reflete a luz infravermelha próxima, essa composição de banda é útil para analisar a vegetação. Em particular, as áreas em vermelho apresentam melhor saúde da vegetação. As áreas escuras são de água e as urbanas são brancas.</p>
                            <p> <strong>Cor natural (4, 3, 2):</strong> O composto de cor natural usa uma combinação de bandas de vermelho (4), verde (3) e azul (2). Ele se reproduz perto do que nossos olhos humanos podem ver. Enquanto a vegetação saudável é verde, a vegetação seca é marrom. As características urbanas aparecem em branco e cinza e a água é azul escura ou preta.</p>
                            <p><strong>Falsa cor (6,5,2 ou 6,5,4):</strong> Esta combinação de bandas usa SWIR-1 (6), infravermelho próximo (5) e azul (2). É comumente usado para monitoramento de safra devido ao uso de ondas curtas e infravermelho próximo. A vegetação saudável parece verde escura. Áreas com solo exposto e urbanização têm uma tonalidade magenta.</p>
                            <p><strong>Falsa cor 7, 6, 4:</strong> A combinação da banda infravermelha de ondas curtas (SWIR) usa SWIR-2 (7), SWIR-1 (6) e vermelho (4). Este composto exibe a vegetação em tons de verde. Enquanto tons mais escuros de verde indicam vegetação mais densa, a vegetação esparsa tem tons mais claros. As áreas urbanas apresentam tons entre o branco e o azul e os solos têm vários tons de marrom.</p>
                            <p><strong>Falsa cor 7,5,3:</strong> Esta combinação da banda infravermelha de ondas curtas usa SWIR-2 (7), SWIR-1 (6) e verde (3). Este composto exibe a vegetação em tons de verde. Enquanto tons mais claros de verde indicam vegetação mais densa, a vegetação esparsa tem tons mais escuros. As áreas urbanas apresentam tons entre o branco e o vermelho e os solos têm vários tons de marrom. (Traduzido e adaptado de https://gisgeography.com/landsat-8-bands-combinations/)</p>
                            <p>Diversas combinações podem ser feitas utilizando as bandas de satélites. Abaixo, seguem mais algumas possibilidades de combinação de bandas:</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                    <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                </a>
                                
                                <p class="TituloFigura headline1"><strong>Figura 08</strong></p>
                            </div>

                            <!-- Imagem 08 - MODAL -->
                            <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="FonteFigura"><strong>Fonte:</strong> https://georsgisn.blogspot.com
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 08 - End -->

                            <p>Em um novo projeto QGIS, carregue as camadas raster disponível na pasta <strong>Módulo 6 >> Dados</strong> , nomeadas: </p>

                            <ul class="none">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><strong></strong> L8_B3_crato;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"><strong></strong> L8_B5_crato;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"><strong></strong> L8_B7_crato.</li>
                            </ul>

                            <p>Iremos criar uma composição em Falsa Cor usando as bandas 7, 5 e 3, ou seja, no canal do vermelho será usada a banda 7, no verde a banda 5 e no azul a banda 3. Assim, teremos uma combinação/composição de <strong>bandas R7G5B3</strong> . </p>
                            <p>Para acessar a ferramenta, navegue até o menu <strong>Raster >> Miscelânea >> Mesclar. Será aberta a seguinte tela</strong>:</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                    <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura09.png" alt="Alt da imagem fica aqui" width="750">
                                </a>
                                <p class="TituloFigura headline1"><strong>Figura 09 </strong>  </p>
                            </div>

                            <!-- Imagem 09 - MODAL -->
                            <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 09 - End -->

                            <p class="wow fadeInLeft" data-wow-delay="0.3s">1. Na janela Mesclar, escolha os arquivos que deseja mesclar no botão do navegador Camadas de entrada <strong>(L8_B3_crato, L8_B5_crato e L8_B7_crato)</strong>. A ordem de seleção deverá ser primeiro a banda 7, em seguida a banda 5 e por último a banda 3 para que associemos a banda 7 ao vermelho, a banda 5 ao verde e a banda 3 ao azul. </p>
                            <p class="wow fadeInLeft" data-wow-delay="0.6s">2. Marque a opção <strong>Coloque cada arquivo de entrada em uma banda separada</strong> . Isso garantirá que cada banda seja anexada a um canal diferente.</p>
                            <p class="wow fadeInLeft" data-wow-delay="0.9s">3. <strong>Tipo de dado de saída</strong>: UInt16, pois as imagens do Landsat8 são de 16bits.</p>
                            <p class="wow fadeInLeft" data-wow-delay="1.3s">4. Nos <strong>parâmetros avançados</strong>, no campo <strong>atribuir valor “sem dados” à saída</strong>, atribua valor 0 (zero).</p>
                            <p class="wow fadeInLeft" data-wow-delay="1.6s">5. Defina o campo Mesclado como o local, nome e tipo de arquivo para salvar o novo raster de mesclagem. Salve na pasta <strong>Módulo 6 >> Resultados</strong> com o nome <strong>Comp_RGB753_crato</strong>. Você também pode deixar em branco para escrever uma camada temporária chamada Mesclada, mas não faremos isso nessa prática.</p>
                            <p class="wow fadeInLeft" data-wow-delay="1.9s"> Lembrando que nem sempre ao usar as ferramentas raster (conforme descrito neste item), você precisa ter as camadas raster carregadas na tela do mapa. Usando o botão Navegador, que está localizado no final do arquivo de Entrada da Camada, você pode selecionar um arquivo a ser trabalhado que não foi carregado na tela do mapa.</p>

                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa headline">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <div class="SaibaMaisTexto">
                                <center><h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6></center><br>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                        <iframe src="https://drive.google.com/file/d/1rAIsfJoeqis6_5Aw0u8mqW4hFXnt7Ym0/preview" width="640" height="480" allow="autoplay"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                </div>
                            </div>

                            

                    <br><br><br><!-- SCRIPT LIGHTBOX -->
                    <script>
                        ScrollReveal().reveal('.headline',{reset: true });
                        ScrollReveal().reveal('.headline1', { delay: 500 , reset: true })
                        ScrollReveal().reveal('.headline2', { delay: 1000 , reset: true })
                        ScrollReveal().reveal('.headline3', { delay: 1500 , reset: true })

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
            <a href="Topico06.2.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
            <a href="Topico06.4.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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