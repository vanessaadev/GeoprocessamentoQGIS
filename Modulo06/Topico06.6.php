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

                        <!--  Sub Título -->
                        <!--  Sub Título -->
                        <p class="SubTitulo">Menu “Análise de Terreno”                            
                        </p>
                        <hr>

                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Extração de curvas de nível</p>
                        <hr>


                        <p>Esta ferramenta gera um arquivo vetorial contendo dados de elevação de um modelo digital de elevação.</p>
                        <p> Em um novo projeto, abra o arquivo <strong>mde_centro_sul.tif</strong>  localizado na pasta <strong>Módulo 6 >> Dados</strong> . Feito isso, acesse a ferramenta de extração de curvas de nível localizada no menu <strong>Raster >> Extração >> Contorno</strong> . Será aberta a seguinte tela:</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                <img class="img-fluid wow headline1" data-wow-delay="0.5s" src="imagens/Figura13.png" alt="Alt da imagem fica aqui" width="750">
                            </a>
                            <p class="TituloFigura headline1"><strong>Figura 13</strong> </p>
                        </div>

                        <!-- Imagem 13 - MODAL -->
                        <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <!-- Imagem 13 - End -->

                        <p class="wow fadeInLeft" data-wow-delay="0.3s">1. Escolha a Camada de Entrada por meio do menu suspenso ou do botão Navegador. Selecione o arquivo <strong>mde_centro_sul.tif</strong>;</p>
                        <p class="wow fadeInLeft" data-wow-delay="0.6s">2. No campo <strong>Equidistância entre contornos</strong> defina o valor de 50. </p>
                        <p class="wow fadeInLeft" data-wow-delay="0.9s">3. <strong>Nome do atributo</strong>: será o nome dado à coluna na tabela de atributos do shape gerado. Mantenha o padrão. </p>
                        <p class="wow fadeInLeft" data-wow-delay="1.3s">4. Defina a localização, nome e tipo de arquivo vetorizado, se necessário; caso contrário, deixe em branco e grave o arquivo como um arquivo temporário. No nosso caso, salve o arquivo na pasta <strong>Módulo 6 >> Resultados</strong> com o nome <strong>elev_centro_sul</strong>.</p>
                        <p class="wow fadeInLeft" data-wow-delay="1.6s">5. Clique em <strong>Executar</strong>. O resultado será como mostrado na tela a seguir:</p><br><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura14.png" alt="Alt da imagem fica aqui" width="650">
                            </a>
                            <p class="TituloFigura headline1"><strong>Figura 14</strong> </p>
                        </div>

                        <!-- Imagem 14 - MODAL -->
                        <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 14 - End -->
                        <br><br>
                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">                                
                                <center><h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6></center><br>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                        <iframe src="https://drive.google.com/file/d/1tmcnmYCIbL6O-OO-csQVWlD0dUkKMJwJ/preview" width="640" height="480" allow="autoplay"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                </div>
                            </div>
                        </div><br><br>

                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Geração de mapa de Declividade</p>
                        <hr>


                        <p>omo é do nosso conhecimento, a declividade é calculada por meio da tangente da inclinação da superfície do terreno em relação à horizontal, ou seja, é a relação entre a diferença de altura entre dois pontos e a distância horizontal entre esses pontos. É dada pelo ângulo de inclinação (zenital) da superfície do terreno em relação à horizontal. Os valores de declividade podem variar de 0° a 90° e podem também ser expressos em porcentagem. Assim, calcula-se a declividade como sendo: </p>
                        <p><strong>dh</strong>  = diferença de altura (equidistância vertical)</p>
                        <p><strong>dh</strong> = distância horizontal (distância entre os pontos)</p>
                        <p>a declividade <strong>D</strong> é dada pela seguinte relação:</p>
                        <p><strong>D = dh/dH</strong></p>
                        <p>Ou, expressa em percentagem:</p>
                        <p><strong>D = (dh/dH) x 100</strong></p><br>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <p class="ImportanteTexto">Recomenda-se converter os dados DEM com os quais você está trabalhando para um sistema de coordenadas projetadas, pois estas são expressas em metros. Nosso dado já está no sistema de projeção UTM, que nos permite realizar os cálculos sem problemas.</p>
                        </div>
                        <br>

                        <p>Em um novo projeto, abra o arquivo <strong>mde_centro_sul.tif</strong>  localizado na pasta <strong>Módulo 6 >> Dados</strong> . Para realizar o cálculo da declividade, acesse o menu <strong>Raster >> Análise >> Declividade</strong>. Será aberta a seguinte tela:</p><br><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura15.png" alt="Alt da imagem fica aqui" width="750">
                            </a>
                            <p class="TituloFigura headline1" ><strong>Figura 15</strong> </p>
                        </div>

                        <!-- Imagem 15 - MODAL -->
                        <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 15 - End -->
                        <br><br>

                        <p><strong>1.</strong> Escolha a Camada de Entrada por meio do menu suspenso ou do botão Navegador. Selecione o arquivo <strong>mde_centro_sul.tif</strong> ;</p>
                        <p><strong>2.</strong> No campo <strong>Razão entre unidades verticais e horizontais</strong> defina o valor de 1;</p>
                        <p><strong>3.</strong> <strong>Marque o campo declividade expressa em porcentagem</strong>; </p>
                        <p><strong>4.</strong> Defina a localização, nome e tipo de arquivo, se necessário; caso contrário, deixe em branco e grave o arquivo como um arquivo temporário. No nosso caso, salve o arquivo na pasta <strong>Modulo6 >> Resultados</strong> com o nome <strong>decliv_centro_sul</strong>.</p>
                        <p><strong>5.</strong> Clique em <strong>Executar</strong>. O resultado será como mostrado na tela a seguir:</p><br><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura16.png" alt="Alt da imagem fica aqui" width="650">
                            </a>
                            <p class="TituloFigura headline1"><strong>Figura 16</strong> </p>
                        </div>

                        <!-- Imagem 15 - MODAL -->
                        <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 15 - End -->
                        <br><br>

                        <p>Você pode alterar as configurações da imagem nas suas configurações, escolhendo a opção de simbologia, o tipo de renderização falsa-cor e escolher uma paleta de cores que representa bem sua variação de declividade. No caso da imagem abaixo, foi aplicada a <strong>paleta Magma</strong>  invertida. </p><br><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura17.png" data-bs-toggle="modal" data-bs-target="#Imagem17">
                                <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura17.png" alt="Alt da imagem fica aqui" width="650">
                            </a>
                            <p class="TituloFigura headline1"><strong>Figura 17</strong> </p>
                        </div>

                        <!-- Imagem 15 - MODAL -->
                        <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura17.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 15 - End -->
                        <br><br>
                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>Sobre o item do campo 2.</p>                            
                                <p>A ferramenta chama de <strong>razão entre unidades verticais e horizontais</strong>  o fator de exagero vertical, denominado Fator Z. É um elemento importante em todas as ferramentas de análise de terreno é o fator Z. Este fator é usado se as unidades x (horizontal) / y (vertical) forem diferentes da unidade <strong>z</strong>  (elevação). Por exemplo, se tentarmos criar um relevo a partir de dados de elevação onde <strong>x / y</strong>  estão em graus e z está em metros, o relevo resultante parecerá extremamente exagerado.</p> 
                                <div class="ImportanteTexto">Os valores para o fator z são os seguintes:
                                    <p >1. Se x / y e z estiverem em metros ou em pés, use o Z padrão fator = 1,0</p>
                                    <p >2. Se x / y estão em graus e z está em metros, use o fator Z = 111.120 (aprox. 1º)</p>                                    
                                </div><br>
                                <p>Por isso utilizamos o nosso dado mde em coordenadas projetadas.</p>
                            </div>
                        </div>
                        <br><br>
                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">                                
                                <center><h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6></center><br>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe src="https://drive.google.com/file/d/1LszieT-uCkwuXmYvzd0QV9hXNIZdUFaE/preview" width="640" height="480" allow="autoplay"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                </div>
                            </div>
                        </div><br><br>

                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Geração de mapa Hipsométrico</p>
                        <hr>

                        <p>O mapa hipsométrico caracteriza o relevo através de curvas de nível, associadas ao nível médio das águas do mar, com o intervalo de altitudes discriminadas com diferentes cores. Os mapas hipsométricos representam a elevação do relevo. Em um novo projeto, abra o arquivo <strong> mde_centro_sul.tif</strong> localizado na pasta <strong>Módulo 6 >> Dados</strong>. </p>
                        <p>Como você já deve saber, o raster aberto já representa a altitude do relevo. O mapa hipsométrico nada mais é do que a modificação dos aspectos visuais do mapa para representar essa variação por meio de classes de altitude, cada uma representada por uma cor, por meio de uma paleta de cores. </p>                        
                        <br><br>
                        
                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">                                
                                <center><h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6></center><br>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe src="https://drive.google.com/file/d/1F40PvNxsVU86yBokBSAGTDzwpCf6zORX/preview" width="640" height="480" allow="autoplay"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
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
            <a href="Topico06.5.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
            <a href="Topico06.7.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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