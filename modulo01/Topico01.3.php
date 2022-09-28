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

<!--INÍCIO CONTEUDO PARTE 01-->
<section id="pt01">
        <div class="main-content container-fluid">
            <div class="page-title">
                <div class="row">
                    <!-- LINHA pt01 -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <!-- INICIO colunas 10 de 12-->


                        <!-- Sub Título -->
                        <p class="SubTitulo">Complementos (Plugins) no QGIS</p>
                        <hr>

                        <p>
                            Desde o início, o QGIS possui uma arquitetura modular que facilita a adição de novos recursos ou funções. A maioria das funções no QGIS são implementadas nos chamados <em>plugins</em>, que são divididos nos seguintes tipos:
                        </p>

                        <ul class="none Texto">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Plugins principais:</strong> São incluídos no QGIS por padrão e são mantidos pela equipe de desenvolvimento. Para serem usados, eles devem ser ativados pelo usuário.</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Plugins externos:</strong> Estão localizados em um repositório externo e são mantidos pelos autores. Para serem usados, eles devem primeiro ser instalados pelo usuário. Com o passar do tempo, alguns dos <em>plugins</em> mais úteis e populares são incorporados à funcionalidade central do QGIS.</li>
                        </ul>

                        <p>
                            O gerenciamento de <em>plugins</em> envolve sua ativação, instalação, atualização e remoção, que são realizadas navegando até <strong>Complementos >> Gerenciar e Instalar Complementos</strong>. Existem vários guias na janela de diálogo. Quando você clica em um <em>plugin</em> individual em qualquer uma dessas guias são mostradas as seguintes informações detalhadas: se o <em>plugin</em> é experimental ou não, a funcionalidade, avaliação, autor, versão e alguns <em>links</em> para sua página inicial, repositório de código e rastreador.
                        </p>

                        <br>
                        <div class="text-center">
                            <a href="imagens/figurateste.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong>Figura 02: </strong>Tela de complementos.</p>
                        </div>

                        <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 02:</strong> Tela de complementos. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <br>
                        <ul class="none Texto">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><strong>1. Tudo:</strong> Esta guia contém a lista completa de plugins disponíveis, instalados e não instalados;</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="0.6s"><strong>2. Instalados:</strong> Este guia mostra os plug-ins que já estão instalados no QGIS. Para ativar/desativar um plugin, basta marcar/desmarcar o botão de alternância ao lado dele;</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="0.9s"><strong>3. Não instalados:</strong> Esta guia contém uma lista de todos os plugins disponíveis que não estão instalados em seu QGIS.</li>
                        </ul>

                        <p>As seguintes guias não são permanentes e são mostradas apenas se houver plugins que atendam a algumas condições:</p>

                        <ul class="none Texto">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><strong>4. Atualizável:</strong> Esta guia fica visível apenas quando versões mais recentes dos plugins instalados estão disponíveis nos repositórios;</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="0.6s"><strong>5. Novo:</strong> Esta guia contém novos complementos que podem ser instalados;</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="0.9s"><strong>6. Inválido:</strong> Esta guia é mostrada quando há plugins instalados que estão quebrados ou incompatíveis com sua versão do QGIS. Se você clicar em um plugin nesta guia, serão mostradas as informações sobre a possível causa da invalidez;</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="1.0s"><strong>7. Instalar a partir do ZIP:</strong> nesta guia, se você tiver um plugin compactado e desejar realizar a instalação manual, basta selecionar o arquivo na pasta que ele estiver salvo e clicar no botão <strong>instalar complemento</strong>. Esta funcionalidade não se aplica à maioria dos plugins, que são disponibilizados nas guias 1 e 3;</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="1.3s"><strong>8. Opções:</strong> esta guia permite definir com que frequência as atualizações serão verificadas e se usar plugins experimentais ou obsoletos. Embora não seja recomendado usar plugins experimentais para fins de produção, você ainda pode ativar a opção de explorar toda a gama de ferramentas disponíveis. Por padrão, apenas o QGIS <em>Official Plugin Repository</em> está conectado, mas você pode conectar repositórios adicionais se os conhecer clicando no botão <strong>Adicionar</strong>. </li>
                        </ul><br>

                        <p>Neste vídeo serão <strong>instalados os seguintes complementos: SCP, Elevation Profile, QGis Threejs</strong>.</p>

                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://drive.google.com/file/d/1aIBjNZ1tQytjZsWwvHhxf_cKKSnhtzs4/preview" width="640" height="480" allow="autoplay"></iframe>
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>

                        <br><br><!-- Saiba Mais 
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <p class="SaibaMaisTexto">
                                <a href="https://drive.google.com/file/d/1-KgR75DfCM3C-0IHv9s74saMb5nVls4I/view?usp=sharing" target="_blank">Clique aqui</a> e veja a <strong>instalação dos seguintes dos seguintes complementos: SCP, Elevation Profile, QGis Threejs</strong>.
                            </p>
                        </div> -->

                        <br><br>
                </div>

                <br><br>
                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico01.2.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico01.4.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- FIM COL MD-10 -->


            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<!--FIM CONTEUDO PARTE 03-->


    <!-- SCRIPT LIGHTBOX -->
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>