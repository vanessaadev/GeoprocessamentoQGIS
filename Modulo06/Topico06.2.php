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
                    <p class="SubTitulo">Menu “Extração”</p>
                            <hr>

                            <p>Frequentemente, principalmente por questões de processamento, pode ser necessário trabalhar apenas em uma área pequena ou específica de uma imagem raster, como por exemplo, um único município. Para isto, podemos utilizar a ferramenta de recorte da raster. No QGis esta operação pode ser feita pela extensão ou pela camada de máscara. </p>
                            <p>No caso do <strong> recorte pela extensão</strong>, você poderá utilizar a extensão da tela, poderá com o mouse desenhar a extensão ou utilizar a extensão de uma outra camada que esteja carregada no painel de camadas. Nesses casos, a camada resultante terá sempre a forma de um quadrado ou retângulo.</p>
                            <p>Na opção de  <strong>recorte pela camada máscara</strong> , você escolherá um arquivo vetorial que será utilizado para delimitar os limites da nova imagem. Nesse caso, <strong>a imagem recortada terá a forma do shapefile utilizado para o recorte</strong> . </p>
                            <p>Para esta prática, utilizaremos os seguintes arquivos localizados na pasta Modulo6. O arquivo de imagem <strong>L8_B6_repro</strong>  está localizado na pasta <strong>Resultados</strong>  e o arquivo vetorial <strong>mucambo</strong> , localizado na pasta <strong>Dados</strong> . Como fizemos a reprojeção do item 6.1, pode ser que seja apenas necessário abrir o arquivo mucambo.shp. </p>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">Recortar Raster pela Extensão</p>
                            <hr>

                            <p>Acesse <strong>Raster >> Extração >> Recortar raster pela extensão</strong> R. Será aberta a tela da Figura 03.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                    <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="TituloFigura headline1"><strong>Figura 03</strong></p>
                            </div>

                            <!-- Imagem 03 - MODAL -->
                            <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 03 - End -->

                            <p class="wow fadeInLeft" data-wow-delay="0.3s">1. Defina a Camada de entrada por meio do menu suspenso ou do botão do navegador;</p>
                            <p class="wow fadeInLeft" data-wow-delay="0.6s">2. Defina a <strong>extensão de recorte</strong> . Isso pode ser feito por meio do botão de opções no final do campo e escolhendo a opção <strong>Selecionar extensão na tela</strong> . Você poderá então desenhar um retângulo na tela do mapa, definindo a extensão em que deseja clicar. Você também pode escolher a extensão da tela, que será o que você vê na área do mapa ou poderá utilizar a extensão de uma camada que esteja no painel de camadas. Isso será traduzido em valores numéricos na caixa de texto de extensão do recorte;</p>
                            <p class="wow fadeInLeft" data-wow-delay="0.9s">3. Defina o campo Recortado (extensão) no local, nome e tipo de arquivo a ser armazenado. Em seguida clique em <strong>Executar.</strong> </p>
                            <p>O resultado será uma imagem recortada, conforme os parâmetros que foram aplicados.</p><br>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">Recortar Raster pela Camada de Máscara</p>
                            <hr><br>

                            <p><strong>Acesse Raster >> Extração >> Recortar raster pela camada de máscara</strong> . Será aberta a tela da Figura 04.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                    <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="TituloFigura headline"><strong>Figura 04</strong> </p>
                            </div>

                            <!-- Imagem 04 - MODAL -->
                            <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 04 - End -->
                            <br>
                            <p class="wow fadeInLeft" data-wow-delay="0.3s">1. Defina a Camada de entrada por meio do menu suspenso ou do botão do navegador;</p>
                            <p class="wow fadeInLeft" data-wow-delay="0.6s">2. <strong>Camada Máscara</strong> : será a camada que cortará o raster. Escolha a camada <strong>mucambo</strong> ;</p>
                            <p class="wow fadeInLeft" data-wow-delay="0.9s">3. Defina o campo Recortado (máscara) no local, nome e tipo de arquivo a ser armazenado. Em seguida clique em <strong>Executar</strong> .</p>
                            <p > O resultado será uma imagem recortada, conforme os parâmetros que foram aplicados.</p><br>

                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa headline">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <div class="SaibaMaisTexto">
                                    <p><strong>Extrair Máscara</strong></p>
                                <center><h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique no vídeo abaixo para mais informações</h6></center><br>
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
            <a href="Topico06.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
            <a href="Topico06.3.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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