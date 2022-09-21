<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

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

        <div class="main-content container-fluid" id="#Apresentacao">
            <!-- Begin main-content -->
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title Texto">

                        <h2 class="Titulo">Rótulos de Dados</h2>
                        <hr><br>

                        <div class="col-md-12">
                            <p>Podemos ativar a rotulagem acessando com o botão direito sobre a camada, no painel de camadas, o caminho <strong class="TextoBold">Propriedades >> Rótulos</strong>, selecionando Rótulos individuais para esta camada e selecionando o campo de atributo com o qual queremos rotular. Isso é tudo que precisamos fazer para exibir os rótulos com as configurações padrão. Embora os rótulos padrão sejam ótimos para uma visualização rápida, geralmente queremos personalizar os rótulos e criar visualizações melhores. Um bom caminho é o uso de <strong class="TextoBold">Expressões</strong>, com as quais podemos formatar o texto do rótulo para atender às nossas necessidades. </p>
                            <p>Por exemplo, usando o arquivo <strong class="TextoBold">sedes_municipais.shp</strong>, que contém na sua tabela de atributos dados de <strong class="TextoBold">Nome</strong> e <strong class="TextoBold">Altitude</strong> das sedes municipais. Caso queiramos representar no mesmo rótulo ambos os dados, combinando o nome e a elevação entre parênteses, podemos usar o operador de concatenação (||), da seguinte maneira:</p>
                            <p>"Nome" || ' - alt.' || "Altitude" || ' m)' [Traduzir analiticamente] Insira o dado da coluna Nome, em seguida adicione o termo “ – alt.”, depois o campo Altitude, seguido da letra “m”</p>
                            <p>As aspas simples referem-se à instrução ao sistema de que a feição se trata de um nome. As aspas duplas referem-se a uma coluna da tabela de atributos. A caixa de diálogo será semelhante à mostrada na <strong class="TextoBold">Figura 01</strong>:</p>
                        </div><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Figura 01">
                                <p class="FonteFigura"><strong class="TextoBold">Figura 01</strong></p>
                            </a>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura01.png" alt="Figura 01">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>

                            </div>
                        </div><br>
                        <!-- Imagem 01 - End -->

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 01.1</strong></p>
                        </div>

                        <!-- Imagem 02 - MODAL -->
                        <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <!-- Imagem 02 - End -->

                        <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <ol>
                                    <li>Escolha a opção <strong class="TextoBold">Rótulos individuais</strong>;</li><br>
                                    <li>Clique no ícone e será aberta a caixa de <strong class="TextoBold">diálogo expressão</strong>;</li><br>
                                    <li>Na caixa aberta, no campo Expressão, digite a expressão que aparece. O resultado será mostrado conforme a <strong class="TextoBold">Figura 02</strong>. Conforme pode ser visto, aparecerão os rótulos dos pontos contendo o nome do município e sua altitude. </li>
                                </ol><br>
                            </div>
                        </div><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 02</strong></p>
                        </div>

                        <!-- Imagem 03 - MODAL -->
                        <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>

                            </div>
                        </div><br>
                        <!-- Imagem 03- End -->

                        <p>A área de visualização na parte superior da caixa de diálogo, intitulada Amostra de texto / buffer, mostra uma visualização das configurações atuais. A cor de fundo pode ser ajustada para testar a legibilidade em diferentes fundos. Na área de visualização, encontramos as diferentes configurações de rótulos, que serão descritas em detalhes nas seções a seguir.</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 03</strong></p>
                        </div>

                        <!-- Imagem 04 - MODAL -->
                        <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <!-- Imagem 04 - End -->

                        <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <ol>
                                    <li>Escolha a opção <strong class="TextoBold">Rótulos individuais</strong>;</li><br>
                                    <li>Área para escolha da coluna que contém o <strong class="TextoBold">rótulo a ser mostrado</strong>;</li><br>
                                    <li>Área para modificação do <strong class="TextoBold">tipo de fonte</strong>, <strong class="TextoBold">seu estilo</strong>, <strong class="TextoBold">cor </strong>, <strong class="TextoBold">tamanho </strong> e <strong class="TextoBold">opacidade</strong>. </li>
                                </ol>
                            </div>
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
            <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
            <a href="Topico01.1.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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