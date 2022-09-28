<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01.1';
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

                        <h2 class="SubTitulo">Criação de Um Mapa Básico</h2>
                        <hr>

                        <p>Neste exemplo, criaremos um mapa básico com uma <strong class="TextoBold">barra de escala</strong>, uma <strong class="TextoBold">seta norte</strong>, <strong class="TextoBold">texto explicativo</strong> e uma <strong class="TextoBold">legenda</strong>. Quando iniciamos o compositor de impressão, primeiro vemos o painel <strong class="TextoBold">Composição</strong> no lado direito. Este painel nos dá acesso às opções de papel, como <u>tamanho, orientação e número de páginas</u>. É também o local para configurar o comportamento de ajuste e a resolução de saída.</p>
                        <p>Primeiro, adicione um item do mapa ao papel usando o botão <img src="Imagens/Icone37.png" width="30"> (<strong class="TextoBold">Adicionar um novo mapa ao compositor</strong>) e desenhe o retângulo do mapa no papel. Clique no papel, mantenha o botão esquerdo do mouse pressionado e arraste o retângulo para abrir. Podemos mover e redimensionar o mapa usando o mouse e a ferramenta <strong class="TextoBold">Selecionar / Mover item</strong> <img src="Imagens/Icone49.png" width="30">. Alternativamente, é possível definir todas as configurações do mapa no painel de propriedades do item (lado direito da tela).</p>
                        <p>O conteúdo do painel de propriedades do item depende do item de composição atualmente selecionado. Se um item do mapa for selecionado, podemos ajustar a escala e as extensões do mapa, bem como a ferramenta Posição e tamanho do próprio item do mapa. Em uma escala de 1.000.000 (com o CRS definido como EPSG: 31984), podemos mais ou menos ajustar um mapa da região Centro-Sul do Ceará em um papel tamanho A4, conforme mostrado na <strong class="TextoBold">Figura 03</strong>. Para mover a área exibida dentro do item do mapa e alterar a escala do mapa, podemos usar a ferramenta <strong class="TextoBold">Mover conteúdo do item</strong> <img src="Imagens/Icone34.png" width="30">.</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura03.png" alt="Figura 03">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 03</strong></p>
                        </div>

                        <!-- Imagem 03 - MODAL -->
                        <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura03.png" alt="Figura 03">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>

                            </div>
                        </div><br>
                        <!-- Imagem 03 - End -->

                        <p class="SubTitulo">Adicionando Uma Barra de Escala</p>
                        <hr>
                        <p>Depois que o mapa estiver na posição e aspecto visual que queremos, podemos adicionar uma barra de escala usando o botão <strong class="TextoBold">Adicionar nova barra de escala</strong> ou acessando o menu <strong class="TextoBold">Adicionar Item >> Adicionar Barra de Escala</strong>. O ponteiro do mouse se tornará uma cruz, e você deverá clicar no local do mapa onde deseja inserir a escala. Observe que o painel de propriedades do item agora exibe as propriedades da barra de escala, conforme você pode visualizar na <strong class="TextoBold">Figura 04</strong>. Como podemos adicionar vários itens de mapa a uma composição, é importante especificar a qual mapa a escala pertence. A segunda propriedade principal é o estilo da barra de escala, que nos permite escolher entre diferentes tipos de barra de escala, ou um tipo Numérico para uma representação textual simples, como 1: 1.000.000. Usando as propriedades das unidades, podemos converter as unidades do mapa em metros para algo mais gerenciável, como quilómetros. As propriedades de Segmentos controlam o número de segmentos e o tamanho de um único segmento na barra de escalas. Além disso, as propriedades controlam a cor, a fonte, o plano de fundo da barra de escala e assim por diante.</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura04.png" alt="Figura 04">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 04</strong></p>
                        </div>

                        <!-- Imagem 04 - MODAL -->
                        <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura04.png" alt="Figura 04">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>

                            </div>
                        </div><br>
                        <!-- Imagem 04 - End -->

                        <br><!-- Sub Sub Título -->
                        <p class="SubTitulo">Adicionando Uma Imagem de Seta do Norte</p>
                        <hr>
                        <p>As setas norte podem ser adicionadas a uma composição usando o botão <strong class="TextoBold">Adicionar Seta Norte </strong><img src="Imagens/Icone43.png" width="30"> ou indo para o menu <strong class="TextoBold">Adicionar item >> Adicionar seta</strong>. O ponteiro do mouse se tornará uma cruz, e você deverá clicar no local do mapa onde deseja inserir a seta (Figura 05). Para usar um dos SVGs que fazem parte da instalação do QGIS, abra a seção <strong class="TextoBold">Pesquisar diretórios no painel de propriedades do item</strong>. Pode demorar um pouco para o QGIS carregar as visualizações das imagens na pasta SVG. Você pode escolher uma seta do Norte na lista de imagens ou selecionar sua própria imagem clicando no botão próximo à entrada Fonte de imagem. Mais decorações de mapa, como setas ou retângulo, triângulo e formas de elipse podem ser adicionadas usando os botões apropriados da barra de ferramentas: Adicionar seta, Adicionar retângulo e assim por diante. O mecanismo é o mesmo. </p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura05.png" alt="Figura 05">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 05</strong></p>
                        </div>

                        <!-- Imagem 05 - MODAL -->
                        <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura05.png" alt="Figura 05">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Imagem 05 - End -->

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