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

                    <h2 class="Titulo">Operações de Análise Espacial com Dados Matriciais</h2>
                    <hr>

                    <br>

                    <!-- Sub Título -->
                    <p class="SubTitulo">Menu “Projeções”</p>
                    <hr>

                    <p>Projeta uma camada raster em outro Sistema de Referência de Coordenadas (CRS). A resolução do arquivo de saída e o método de reamostragem podem ser escolhidos pelo usuário. Para esta prática, utilizaremos uma imagem do sensor Landsat8, nomeada <strong>RT_LO82180632017296CUB00_B6</strong> , representando a banda 6, localizada na pasta Módulo 6 >> Dados. Acesse o arquivo e importe para o painel de camadas. A ferramenta de reprojeção pode ser acessada através do acesso ao menu <strong> Raster >> Projeções >> Reprojetar Coordenadas.</strong >  Será aberta a tela mostrada na Figura 01.</p><br>

                    <!-- Titulo Figura -->
                    <div class="text-center">
                        <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                            <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                        </a>
                        <p class="TituloFigura headline1"><strong>Figura 01</strong> </p>
                        
                    </div>

                    <!-- Imagem 01 - MODAL -->
                    <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer text-center">
                                <p class="FonteFigura "><strong></strong> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Imagem 01 - End --> <br>

                    <ol>
                        <li class="wow fadeInLeft" data-wow-delay="0.3s"> <strong>Camada de Entrada:</strong> imagem a ser processada selecionando-a na lista suspensa ou clicando no botão de navegação e navegando até o arquivo.</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.6s"> <strong>SRC original:</strong> é o sistema de referência de coordenadas original da imagem. A ferramenta mostra o sistema ao lado da imagem na aba de camada de entrada. Escolha o SRC da camada: EPSG 32624, que indica que a imagem está usando o sistema WGS 84 UTM zona 24N, ou seja, está no hemisfério norte.</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.9s"><strong>SRS destino:</strong> é o sistema de referência que se deseja mudar na imagem. Escolha o SRC 31984 que se refere ao sistema SIRGAS 2000 UTM zona 24S.</li>
                        <li class="wow fadeInLeft" data-wow-delay="1.3s"> <strong>Método de reamostragem a ser utilizado:</strong> mantenha o método vizinho mais próximo. Existem vários métodos de reamostragem disponíveis no QGIS, dentre os quais, os principais são: </li>
                    </ol><br>

                    <p><strong>Vizinho mais próximo:</strong>  Neste método, cada célula rasterizada recebe o valor da célula mais próxima (medida entre os centros das células). . Este é o método mais rápido e não mudará os valores dos pixels durante a transformação. É uma ótima escolha quando o raster representa dados discretos e categóricos, já que nenhum novo valor é criado.</p>
                    <p><strong>Bilinear:</strong> este método usa os quatro valores da célula de entrada mais próximos para determinar o valor da célula de saída. O novo valor da célula é uma média ponderada dos quatro valores da célula de entrada. Ele produz uma saída uniforme porque os valores altos e baixos da célula de entrada podem ser eliminados na saída, ou seja, suavizará os dados e pode nivelar picos e preencher vales. É recomendado para conjuntos de dados contínuos. Não deve ser usado em dados categóricos porque as categorias de entrada podem não ser mantidas na saída.</p>
                    <p><strong>Cúbico:</strong> é semelhante ao Linear, mas usa a entrada 16 mais próxima às células para determinar o valor da célula de saída. É melhor preservar bordas, e a saída é mais nítida do que a reamostragem linear. Isto é frequentemente usado com fotografia aérea ou imagens de satélite e também é recomendado para dados contínuos. Isso não deve ser usado para dados categóricos pelas mesmas razões que foram dadas para a reamostragem linear.</p>
                    <p>Média: Neste método, cada célula rasterizada recebe um valor médio com base nas células adjacentes com os valores originais. Este método suavizará os dados e pode nivelar picos e preencher vales.</p>
                    <p><strong>Cúbico Suavizado:</strong> Este algoritmo é baseado em uma função spline e produz uma saída suave.</p>
                    <p><strong>Lanczos:</strong> Este algoritmo produz uma saída nítida. Deve ser usado com cuidado porque pode resultar em valores de saída que são tanto mais baixos quanto mais altos do que os da entrada.</p>
                    <p><strong>5.</strong> Para salvar o resultado, clique no botão de navegação no final da caixa de texto <strong>Reprojetado(a)</strong> e escolha <strong>salvar em arquivo.</strong> Salve o arquivo na pasta <strong>Módulo 6 >> Resultados</strong> com o nome <strong>L8_B6_repro.</strong> Clique em <strong>Executar.</strong> </p>
                    <p><strong></strong>O resultado será a mesma imagem, porém com as informações alteradas, conforme os comandos dados pelo usuário. Acessando as propriedades da imagem, na aba informações, você poderá usar o novo sistema de referência. </p><br>

                    <!-- Titulo Figura -->
                    <div class="text-center">
                        <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                            <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                        </a>
                        <p class="TituloFigura headline1"><strong>Figura 02</strong> </p>
                        
                    </div>

                    <!-- Imagem 02 - MODAL -->
                    <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer text-center">
                                <p class="FonteFigura "><strong></strong> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Imagem 02 - End -->
                    <br><br>

                    
                            

                    <br><br><!-- SCRIPT LIGHTBOX -->
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
            <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
            <a href="Topico06.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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