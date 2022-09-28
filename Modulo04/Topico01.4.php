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

                        <h2 class="SubTitulo">Adicionando Grades e Quadros de Mapas</h2>
                        <hr>

                        <p>Outras características comuns dos mapas são grades e quadros. Cada item do mapa pode ter uma ou mais grades. Selecione o mapa e aparecerá à direita da tela as suas propriedades. Vá até o menu <strong class="TextoBold">Grades</strong>, e clique no ícone para adicionar uma grade. Em seguida, selecione a grade criada e clique em modificar a grade. Na tela seguinte, aparecerão três itens: aparência, moldura e desenhar coordenadas. </p>
                        <p>No menu <strong class="TextoBold">aparência</strong>, os valores de intervalo e deslocamento devem ser especificados em unidades de mapa. Podemos escolher entre os seguintes tipos de grades:</p>

                        <br>
                        <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <ul class="none">
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Sólida</strong>, uma grade normal sólida com linhas personalizáveis;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Cruz</strong> em intervalos especificados com estilos personalizáveis;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Marcadores</strong> personalizáveis em intervalos especificados;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="1.2s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Molduras e anotações</strong> apenas irão ocultar a grade enquanto ainda exibe o quadro e as anotações de coordenadas.</li>
                                </ul>
                            </div>
                        </div>

                        <p>No menu <strong class="TextoBold">moldura</strong>, podemos selecionar um dos seguintes estilos:</p>

                        <br>

                        <div class="card text-black border-success" style="box-shadow: 1px 1px 10px 3px #44833d !important;">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <ul class="none">
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Zebra</strong>, com linhas personalizáveis e cores de preenchimento, conforme mostrado na imagem a seguir;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Marcas</strong> internas, externas ou internas e externas para marcas que apontam dentro do mapa, fora dele ou em ambas as direções;</li><br>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong class="TextoBold">Borda de linha</strong> para um quadro de linha simples.</li>
                                </ul>
                            </div>
                        </div>

                        <p>No menu <strong class="TextoBold">desenhar coordenadas</strong>, podemos rotular a grade com as coordenadas correspondentes. Os rótulos podem ser alinhados horizontalmente ou verticalmente e colocados dentro ou fora da moldura, conforme mostrado na <strong class="TextoBold">Figura 08</strong>:</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura08.png" alt="Figura 08">
                            </a>
                            <p class="FonteFigura"><strong class="TextoBold">Figura 08</strong></p>
                        </div>

                        <!-- Imagem 08 - MODAL -->
                        <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura08.png" alt="Figura 08">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong class="TextoBold">Fonte:</strong> EGPCE.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Imagem 08 - End -->

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