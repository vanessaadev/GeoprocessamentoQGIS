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
                    <p class="SubTitulo">Menu “Conversão”</p>
                            <hr>

                    <p>As ferramentas para conversão entre formatos raster e vetoriais podem ser acessadas através do menu <strong>Raster >> Conversão</strong> , que mostrará, entre outras opções, as ferramentas de conversão de raster para vetor e de conversão de vetor para raster. Veremos essas opções nos itens 6.4.1 e 6.4.2.</p>
                    <p>Em um novo projeto QGIS, acesse a pasta <strong>Módulo 6 >> Dados </strong>e carregue a camada raster <strong>uso_cobertura_crato.tif</strong></p>

                    <!--  Sub Título -->
                    <p class="SubSubTitulo">Conversão de raster para vetor</p>
                    <hr>

                    <p>Acesse <strong>Raster >> Conversão >> Raster para vetor (poligonizar)</strong>. Será aberta a seguinte tela:</p><br>

                    <!-- Titulo Figura -->
                    <div class="text-center">
                        <a href="imagens/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                            <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura10.png" alt="Alt da imagem fica aqui" width="500">
                        </a>
                        <p class="TituloFigura headline1"><strong>Figura 10</strong> </p>
                    </div>

                    <!-- Imagem 10 - MODAL -->
                    <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer text-center">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Imagem 10 - End -->
                    <br>
                    <p class="wow fadeInLeft" data-wow-delay="0.3s"> 1. Escolha a Camada de Entrada por meio do menu suspenso ou do botão Navegador. Selecione o arquivo <strong>uso_cobertura_crato</strong> .</p>
                    <p class="wow fadeInLeft" data-wow-delay="0.6s"> 2. No campo <strong>Nome do campo a criar</strong> ,  O padrão é DN, mas você pode alterar o nome do campo a ser criado, que conterá o valor da Banda, se desejar, bastando escrever o nome desejado. Vamos deixar o padrão. </p>
                    <p class="wow fadeInLeft" data-wow-delay="0.9s">3. Defina a localização, nome e tipo de arquivo vetorizado, se necessário; caso contrário, deixe em branco e grave o arquivo como um arquivo temporário. No nosso caso, salve o arquivo na pasta <strong>Módulo 6 >> Resultados com o nome uso_cobertura_crato_vetor</strong> .</p>
                    <p class="wow fadeInLeft" data-wow-delay="1.3s">4. Clique em <strong> Executar</strong>. O resultado será como na tela seguinte:</p>

                    <!-- Titulo Figura -->
                    <div class="text-center">
                        <a href="imagens/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                            <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura11.png" alt="Alt da imagem fica aqui" width="450">
                        </a>
                        <p class="TituloFigura headline1"><strong>Figura 11</strong> </p>
                    </div>

                    <!-- Imagem 11 - MODAL -->
                    <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer text-center">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Imagem 11 - End -->

                    <p>Como você pode observar, cada classe que a imagem tinha tornou-se uma classe no vetor. Você pode ver melhor o resultado alterando as configurações visuais do seu dado vetorial através da simbologia <strong> categorizada</strong> usando a coluna DN para classificar. </p>
                    <p>ocê também pode fazer a mesma alteração no seu dado raster, alterando a simbologia através da opção simbologia, tipo de renderização <strong>Paletizado/Valores Únicos.</strong></p><br>

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
                                <iframe src="https://drive.google.com/file/d/12VNIS8FgcdsfBpwhHr2teRSD4eFbLehP/preview" width="640" height="480" allow="autoplay"></iframe>
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                    </div><br><br>

                    <!--  Sub Título -->
                    <p class="SubSubTitulo">Conversão de vetor para raster</p>
                    <hr>

                    <p>Para converter de vetor para raster, o QGis utiliza a tabela de atributos do arquivo vetorial a ser convertido, que deve estar em formato numérico. </p>
                    <p>Em um novo projeto QGIS, acesse a pasta <strong>Módulo 6 >> Dados</strong>  e carregue a camada vetorial salva a partir do passo anterior (6.4.1)<strong>uso_cobertura_crato.shp</strong> . Acesse a tabela de atributos e verá que existe uma coluna com diversos números. Como o arquivo se trata de uma classificação de tipologias de uso e cobertura, cada número na coluna da tabela de atributos equivale a uma tipologia de uso. Então vamos criar um raster com esses valores. </p>
                    <p>Para acessar a ferramenta de rasterização, acesse o menu <strong>Raster >> Conversão >> Converter de vetor para raster (rasterizar)</strong> . Será aberta a seguinte tela:</p><br>

                    <!-- Titulo Figura -->
                    <div class="text-center">
                        <a href="imagens/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                            <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura12.png" alt="Alt da imagem fica aqui"width="650">
                        </a>
                        <p class="TituloFigura headline1"><strong>Figura 12</strong> </p>
                    </div>

                    <!-- Imagem 12 - MODAL -->
                    <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer text-center">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Imagem 12 - End -->
                    <br>


                    <p class="wow fadeInLeft" data-wow-delay="0.3s">1. Escolha a Camada de Entrada por meio do menu suspenso ou do botão Navegador. Selecione o arquivo <strong>uso_cobertura_crato.shp;</strong> </p>
                    <p class="wow fadeInLeft" data-wow-delay="0.6s">2. No <strong>campo a usar para o valor burn-in</strong>, escolha DN que é a coluna onde estão as classes de uso e cobertura do arquivo; </p>
                    <p class="wow fadeInLeft" data-wow-delay="0.9s">3. <strong>Unidades de tamanho de saída</strong>: escolha unidades georreferenciadas; </p>
                    <p class="wow fadeInLeft" data-wow-delay="1.3s">4. <strong>Resolução</strong>: tanto para a horizontal como para a vertical, atribui valor 30. Esse será o tamanho do pixel da sua imagem, ou seja, 30 x 30, com área de 900m²; </p>
                    <p class="wow fadeInLeft" data-wow-delay="1.6s">5. <strong>Extensão de saída</strong>: clique no botão de opção no final do campo e escolha a opção <strong>usar extensão da camada</strong> e escolha a camada <strong>uso_cobertura_crato.shp</strong>. Isso garantirá que ambas as imagens possuam as mesmas características em termos de extensão;</p>
                    <p class="wow fadeInLeft" data-wow-delay="1.9s">6. Defina a localização, nome e tipo de arquivo vetorizado, se necessário; caso contrário, deixe em branco e grave o arquivo como um arquivo temporário. No nosso caso, salve o arquivo na pasta <strong>Modulo6 >> Resultados com o nome uso_cobertura_crato_raster</strong>.</p>
                    <p class="wow fadeInLeft" data-wow-delay="2.3s">7. Clique em <strong>Executar</strong>. </p>
                    <br>
                    <p >O resultado deverá ser idêntico à imagem que foi vetorizada no item 6.4.1. Você pode fazer a alteração no seu dado raster, alterando a simbologia através da opção simbologia, tipo de renderização <strong>Paletizado/Valores Únicos</strong> e visualizará as classes de maneira mais diferenciada entre si. </p><br>

                    
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
                                <iframe src="https://drive.google.com/file/d/1WHG_vG7rQ_1sqfdc9wqskqzPW1-4uv4n/preview" width="640" height="480" allow="autoplay"></iframe>
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
            <a href="Topico06.3.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
            <a href="Topico06.5.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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