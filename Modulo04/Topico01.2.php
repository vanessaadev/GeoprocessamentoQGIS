<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01.2';
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

                        <h2 class="SubTitulo">Adicionando Uma Legenda</h2>
                        <hr>

                        <p>As legendas são outro elemento vital do mapa. Podemos usar o botão <strong class="TextoBold">Adicionar nova legenda <img src="Imagens/Icone41.png" width="30"></strong> ou acessar <strong class="TextoBold">Adicionar item >> Adicionar legenda</strong> para adicionar uma legenda padrão com entradas para todas as camadas de mapa visíveis no momento. O ponteiro do mouse se tornará uma cruz, e você deverá clicar no local do mapa onde deseja inserir a legenda (<strong class="TextoBold">Figura 06</strong>). As entradas de legenda podem ser reorganizadas (classificadas ou adicionadas a grupos), editadas e removidas das propriedades dos itens de legenda. Usando a opção <strong class="TextoBold">Quebrar texto</strong> podemos dividir rótulos longos em várias linhas. A Figura X mostra o menu de contexto que nos permite alterar o estilo (Oculto, Grupo ou Subgrupo) de uma entrada. A fonte, o tamanho e a cor correspondentes são configuráveis na seção Fontes.</p>
                        <p>Além disso, a legenda neste exemplo é dividida em três colunas, como você pode ver na seção inferior direita da <strong class="TextoBold">Figura 06</strong>. Por padrão, o QGIS tenta manter todas as entradas de uma camada em uma única coluna, mas podemos substituir este padrão habilitando <strong class="TextoBold">Dividir camadas</strong>.</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura06.png" alt="Figura 06">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 06</strong></p>
                        </div>

                        <!-- Imagem 06 - MODAL -->
                        <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura06.png" alt="Figura 06">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Imagem 06 - End -->

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
                <a href="Topico01.1.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Topico01.3.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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