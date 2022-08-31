<?php
$page = 'Topico01';
include('layout/header.php');
?>

<html>
<meta charset="utf-8">
<!-- PLUGIN DO FADE IN -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<body>


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


                            <h2 class="Titulo">Apresentando o QGIS </h2>
                            <hr><br>

                            <!-- Sub Título -->
                            <p class="SubTitulo">Instalando o QGIS</p>
                            <hr>

                            <p>QGIS é um Sistema de Informações Geográficas - SIG desktop de código aberto e gratuito cujo desenvolvimento começou em 2002. Desde 2007 o projeto tem se desenvolvido sob a orientação da <em>Open Source Geospatial Foundation (OSGeo)</em>. Apesar de relativamente recente, o QGIS está ganhando cada vez mais popularidade entre usuários individuais, empresas privadas e organizações em todo o mundo pelos seguintes motivos:</p>
                            
                            <ul class="none">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Distribuição sob a GNU General Public License (GPL), que garante aos usuários a liberdade de usar, estudar, compartilhar e modificar o software;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Suporte multiplataforma, o que significa que o QGIS pode ser executado em sistemas operacionais Linux, Unix, Mac OS, Windows e Android;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Suporte a múltiplos formatos de dados vetoriais e raster, bem como formatos de banco de dados e outras funcionalidades;</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.2s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Melhoria permanente da funcionalidade central, que engloba a criação, edição, manipulação, análise, armazenamento e representação visual de dados;</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.5s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Crescimento permanente da funcionalidade externa disponível a partir dos chamados <em>plugins</em> com suporte da comunidade internacional de desenvolvedores.</li>
                            </ul><br>

                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto">
                                <strong>Mais informações sobre o QGIS podem ser encontradas:</strong><br>
                                No site oficial: <a href="http://qgis.org/" target="_blank">qgis.org/</a><br>
                                No site de documentações: <a href="https://www.qgis.org/pt_BR/docs/index.html" target="_blank">qgis.org/pt_BR/docs/index.html</a></p>
                            </div>


                            <p>Para proceder a instalação do QGIS em seu computador, siga as instruções no vídeo.</p>

                            <div class="row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-8">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe src="https://drive.google.com/file/d/18oItQJWYWP1pSEX290v6ZFt2Ujj987Nb/preview" width="640" height="480" allow="autoplay"></iframe>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                </div>
                            </div>
                        
                <br><br>
                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico01.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- FIM COL MD-10 -->
        
        <!--FIM CONTEUDO PARTE 03-->


        <!-- SCRIPT LIGHTBOX -->
        <script>

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