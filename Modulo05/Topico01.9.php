<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01.9';
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

                        <h2 class="Titulo">Mapas de Kernel</h2>
                        <hr>

                        <p>Mapas de calor são excelentes ferramentas para visualizar uma distribuição de pontos. O kernel é uma janela móvel de tamanho e forma específicos que se move sobre uma área de pontos para calcular sua densidade local. Além disso, o plug-in nos permite controlar o tamanho do raster do mapa de calor de saída nas células (usando as configurações de Linhas e Colunas), bem como o tamanho da célula.</p>

                        <p>Para criá-los, deve ser acessada a ferramenta de processamento clicando no ícone <img src="Imagens/Icone01.png" width="30"> . Em seguida, aparecerá no lado direito da tela a <strong class="TextoBold">Caixa de Ferramentas de Processamento</strong>. Digite <strong class="TextoBold">Mapa de Calor</strong> e clique sobre a ferramenta. A ferramenta oferece diferentes formatos de kernel para você escolher. A tela aparecerá conforme <strong class="TextoBold">Figura 16</strong>. Para esta prática, utilizaremos o shape <strong class="TextoBold">moradias.shp</strong> contido na pasta <strong class="TextoBold">Módulo 5 >> Dados</strong>.</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura16.png" alt="Figura 16" width="900">
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

                        <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <ol>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s">Na <strong class="TextoBold">Camada de Pontos</strong> selecione o arquivo moradias ou ou clicando no botão de navegação e navegando até o arquivo;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s">Em <strong class="TextoBold">Raio</strong> defina o valor do raio a ser utilizado pelo algoritmo (7000 metros). Este valor define a distância de cada célula até a qual o QGIS irá procurar por características vizinhas e levar sua presença em consideração. Geralmente, um raio de pesquisa maior fornece um resultado mais generalizado, pois o número de feições encontradas será dividido por uma área maior. Um raio menor fornece resultados mais precisos, mas se esse valor for muito pequeno, podemos não encontrar nenhum padrão de distribuição. O raio de pesquisa pode ser definido em metros, quilômetros, pés, milhas e jardas. Manteremos metros. </li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s">Em <strong class="TextoBold">Output Raster Size</strong> vamos inserir ou valores de linhas e colunas ou valores de tamanho da célula. Neste caso iremos apenas inserir valores no campo de <strong class="TextoBold">tamanho do pixel: 30</strong>. Basta inserir o valor no campo X e os demais campos serão atualizados automaticamente.<br>
                                        <br><strong class="TextoBold">Linhas e colunas</strong> permitem definir as dimensões do raster de saída. Dimensões maiores resultarão em um tamanho de arquivo de saída maior, enquanto dimensões menores resultarão em uma saída áspera e pixelizada. Os campos de entrada estão vinculados uns aos outros, portanto, alterar o valor no campo Linhas (por exemplo, dividi-lo pela metade) também causará a alteração correspondente no valor no campo Colunas e vice-versa. Além disso, esses valores têm uma influência direta no tamanho da célula raster (veja o próximo ponto). Vale destacar que a extensão do raster é preservada ao alterar as dimensões do raster.<br>
                                        <br><strong class="TextoBold">Tamanho da célula X e tamanho da célula Y (tamanho do pixel)</strong> O tamanho do pixel determina quão grosseira ou detalhada será a exibição dos padrões de distribuição. Um tamanho de célula menor fornecerá resultados mais suaves, mas o tempo de processamento e a memória necessários para a análise aumentarão. Células grandes serão processadas mais rapidamente, mas o raster resultante será pixelado. Se as células forem realmente grandes, alguns padrões se tornarão invisíveis, portanto, pode ser necessário executar a análise várias vezes, tentando diferentes tamanhos de células para obter resultados que satisfaçam seus requisitos.<br>
                                        <br>O tamanho da célula depende e está vinculado às dimensões raster. Aumentá-lo diminuirá o número de linhas e colunas e vice-versa.
                                    </li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.2s"><strong class="TextoBold">Kernel Shape</strong> essa opção controla como a influência do ponto muda com as mudanças na distância deste ponto. Mantenha a opção <strong class="TextoBold">QUÁRTICO</strong>. O QGis oferece atualmente os seguintes kernels:</li>
                                </ol>

                                <ul class="circle">
                                    <li class="wow fadeInLeft" data-wow-delay="1.5s">Quártico;</li>
                                    <li class="wow fadeInLeft" data-wow-delay="1.8s">Triangular;</li>
                                    <li class="wow fadeInLeft" data-wow-delay="2.1s">Uniforme;</li>
                                    <li class="wow fadeInLeft" data-wow-delay="2.4s">Tri Ponderado;</li>
                                    <li class="wow fadeInLeft" data-wow-delay="2.7s">Epanechnikov.</li>
                                </ul>
                            </div>
                        </div>

                        <p class="text-center">A <strong class="TextoBold">Figura 17</strong> mostra a distribuição da influência do ponto para diferentes kernels:</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura17.png" data-bs-toggle="modal" data-bs-target="#Imagem17">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura17.png" alt="Figura 17" width="900">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 17</strong></p>
                        </div>

                        <!-- Imagem 17 - MODAL -->
                        <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura17.png" alt="Figura 17">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <!-- Imagem 17 - End -->

                        <p> Para salvar o resultado, clique no botão de navegação no final da caixa de texto <strong class="TextoBold">Heatmap</strong> e escolha para <strong class="TextoBold">salvar em arquivo (3)</strong>. Salve o arquivo na pasta <strong class="TextoBold">Módulo 5 >> Resultados</strong> com o nome <strong class="TextoBold">heatmap_7000</strong>. Clique em <strong class="TextoBold">Executar (4)</strong>. O resultado é mostrado na <strong class="TextoBold">Figura 18</strong>.</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura18.jpg" data-bs-toggle="modal" data-bs-target="#Imagem18">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura18.jpg" alt="Figura 18" width="400">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 18</strong></p>
                        </div>

                        <!-- Imagem 18 - MODAL -->
                        <div class="modal fade text-center" id="Imagem18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura18.jpg" alt="Figura 18">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <!-- Imagem 18 - End -->

                        <p>Para melhorar a legibilidade e fazer com que pareça um mapa de calor real, precisamos mudar seu estilo. Para fazer isso, siga as próximas etapas. Para obter informações mais detalhadas sobre como estilizar camadas raster, consulte a seção 2.4.2 - Estilo de Camada – Banda Simples Cinza / Banda Simples Falsa Cor.</p><br>

                        <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <ol>
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s">Clique com o botão direito na camada do mapa de calor no painel de camadas do QGIS. No menu de contexto, selecione <strong class="TextoBold">Propriedades</strong>;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s">Acesse a guia <strong class="TextoBold">Simbologia</strong> e selecione <strong class="TextoBold">Banda Simples Falsa-Cor</strong> tipo de renderização;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s">Na opção <strong class="TextoBold">Configurações de Mín / Máx</strong>., ative a opção Mín / máx. Defina Extensão das Estatísticas como <strong class="TextoBold">Raster Inteiro</strong> e Precisão como <strong class="TextoBold">Real</strong> (mais lento);</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.2s">Em <strong class="TextoBold">Gradiente de Cores</strong> acesse a opção <strong class="TextoBold">Todos os Gradientes de Cores</strong> e selecione <strong class="TextoBold">uma rampa de cor</strong>, como por exemplo, <strong class="TextoBold">YlOrRd</strong> (que usa diferentes tons de vermelho). Se necessário, altere o número de classes e clique no botão <strong class="TextoBold">Aplicar</strong>;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.5s">Clique em <strong class="TextoBold">OK</strong> para aplicar as alterações e fechar a caixa de diálogo de propriedades.</li>
                                </ol>
                            </div>
                        </div>

                        <p class="text-center">O resultado é mostrado na <strong class="TextoBold">Figura 19</strong>:</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura19.png" data-bs-toggle="modal" data-bs-target="#Imagem19">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura19.png" alt="Figura 19" width="400">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 19</strong></p>
                        </div>

                        <!-- Imagem 19 - MODAL -->
                        <div class="modal fade text-center" id="Imagem19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura19.png" alt="Figura 19">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <!-- Imagem 19 - End -->

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Quer saber mais sobre? </p>
                                <p>Mais informações sobre as formas do Kernel podem ser encontradas no link:<a href="http://en.wikipedia.org/wiki/Kernel_(statistics)#Kernel_functions_in_common_use"> http://en.wikipedia.org/wiki/Kernel_(statistics)#Kernel_functions_in_common_use</a></p>
                            </div>
                        </div><br>
                        <!-- Fim Saiba Mais -->

                        <p>Dependendo da forma do kernel, obteremos um mapa de calor mais suave ou hotspots mais claramente expostos. Por exemplo, o kernel triweight fornecerá pontos ativos mais claros e nítidos do que o kernel Epanechnikov, porque o kernel Epanechnikov tem menor influência perto do centro do ponto ativo. Além disso, em diferentes campos científicos, diferentes kernels são preferidos. Por exemplo, na análise de crimes, o kernel quártico é normalmente usado.</p>
                        <p>Também é possível usar um raio de pesquisa variável para cada ponto marcando a caixa de seleção <strong class="TextoBold">raio do campo</strong> e selecionando o campo de atributo com valor de raio na caixa de combinação. Se você precisar ponderar os pontos (em outras palavras, aumentar ou diminuir sua influência) por algum atributo numérico, ative a caixa de seleção <strong class="TextoBold">Weight for Field</strong> e selecione o campo correspondente. Em nosso exemplo, não usaremos essa funcionalidade, mas você pode experimentá-la.</p><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Quer saber mais sobre? </p>
                                <p>Acesse ao vídeo abaixo para acompanhar o procedimento de criação de um <strong class="TextoBold">Mapa de calor</strong>.</p>
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
                <a href="Topico01.8.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Referencias.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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