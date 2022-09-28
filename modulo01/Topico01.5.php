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

                        <!-- Sub Título -->
                        <p class="SubTitulo">Interagindo com Dados</p>
                        <hr>

                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Barra de Ferramentas e de Navegação</p>
                        <hr>

                        <p>
                           Essas ferramentas são o carro-chefe do QGIS. Elas nos permitem mover, inspecionar, medir e selecionar dados. Todos são essenciais em qualquer Sistema de Informações Geográficas. Comece clicando no ícone <img src="imagens/Icone11.png" width="4%"> deslocar mapa. Quando esta opção é selecionada, ela será destacada em um tom diferente, assim como qualquer outro botão interativo no QGIS. Isso é demonstrado na figura que mostra a barra de ferramentas de navegação. 
                        </p>

                        <center><p><strong>Barra de ferramentas e de navegação</strong></p></center>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Icone12.png" data-bs-toggle="modal" data-bs-target="#Icone12">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Icone12.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Tabela01.png" data-bs-toggle="modal" data-bs-target="#Tabela01">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Tabela01.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="TituloFigura"><strong>Tabela 01</strong></p>
                        </div>

                        <!-- Tabela 01 - MODAL -->
                        <div class="modal fade text-center" id="Tabela01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Tabela01.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Tabela 01</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tabela 01 - End -->

                        <p><strong>Barra de Ferramentas e de Navegação.</strong></p>

                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://drive.google.com/file/d/1sKpC07rsP9kXuCViKqa_3Y5JT3t1mLyf/preview" width="640" height="480" allow="autoplay"></iframe>
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div><br>

                        <br><!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Barra de Atributos</p>
                        <hr>

                        <p>A barra de Ferramentas de Atributos contém ferramentas para inspecionar, medir e selecionar dados, entre outras ferramentas. Para poder usar essas ferramentas, precisamos ter uma camada selecionada na janela de camadas. </p>

                        <center><p><strong>Barra de Ferramentas de Atributos</strong></p></center>

                        <!-- Icone 34 -->
                        <div class="text-center">
                            <a href="imagens/Icone34.png" data-bs-toggle="modal" data-bs-target="#Icone34">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Icone34.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Tabela02.png" data-bs-toggle="modal" data-bs-target="#Tabela02">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="600" src="imagens/Tabela02.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="TituloFigura"><strong>Tabela 02</strong></p>
                        </div>

                        <!-- Tabela 02 - MODAL -->
                        <div class="modal fade text-center" id="Tabela02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Tabela02.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Tabela 02</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tabela 02 - End -->

                        <br><br><!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Seleção de Feições por Áreas ou Simples Clique</p>
                        <hr>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 08 - MODAL -->
                        <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 8:</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 08 - End -->

                        <br><br><!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Seleção de Feições por Expressão</p>
                        <hr>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 09 - MODAL -->
                        <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 9:</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 09 - End -->

                        <p><strong> Barra de Atributos. </strong></p>

                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://drive.google.com/file/d/1vN4zffQpwtUB_RiRyvYElOd_yWBvJzC3/preview" width="640" height="480" allow="autoplay"></iframe>
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div><br>


                        <br><!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Tabela de Atributos</p>
                        <hr>

                        <p>A tabela de atributos é onde estão contidas as informações dos arquivos. É a partir dos dados constantes desta tabela que poderemos gerar informações para análise. </p> 

                        <center><p>Barra da Tabela de Atributos</p></center>

                        <!-- Icone 47 -->
                        <div class="text-center">
                            <a href="imagens/Icone34.png" data-bs-toggle="modal" data-bs-target="#Icone47">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Icone47.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Tabela03.png" data-bs-toggle="modal" data-bs-target="#Tabela03">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Tabela03.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="TituloFigura"><strong>Tabela 03</strong></p>
                        </div>

                        <!-- Tabela 03 - MODAL -->
                        <div class="modal fade text-center" id="Tabela03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Tabela03.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Tabela 03</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tabela 03 - End -->

                        <p><strong> Tabela de Atributos.</strong></p>

                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://drive.google.com/file/d/15LE5ypDSLORvcbxaapAH4Fc2iBEpxW74/preview" width="640" height="480" allow="autoplay"></iframe>
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div><br>

                        
                        <br><!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Calculadora de Campo</p>
                        <hr>

                        <br><p>Se quisermos alterar os atributos de vários ou todos os recursos em uma camada, editá-los manualmente geralmente não é uma opção viável. Nesse caso, entra em campo a calculadora de campo. Podemos acessá-lo usando o botão Abrir calculadora de campo na tabela de atributos do dado ou selecionando o dado no painel de camadas e clicando no ícone    . Na calculadora de campo, podemos escolher atualizar apenas os recursos selecionados ou atualizar todos os recursos na camada. Além de atualizar um campo existente, também podemos criar um novo campo. A lista de funções é a mesma que exploramos quando selecionamos recursos por expressão. Podemos usar qualquer uma das funções e variáveis nesta lista para preencher um novo campo ou atualizar um existente. Aqui estão alguns exemplos de expressões que são frequentemente usadas:</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="500" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="TituloFigura"><strong>Figura 08:</strong> Calculadora de Campo.</p>
                        </div>

                        <!-- Imagem 10 - MODAL -->
                        <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte:</strong> Calculadora de Campo</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 10 - End -->

                        <br><ol class="Texto">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><strong>Criar novo campo:</strong> nessa área é possível informar a estrutura da coluna que será criada na tabela de atributos, com informações como nome do campo, tipo do novo campo (número inteiro, número decimal, texto, data), bem como a extensão dos dados a serem inseridos nessa coluna (comprimento do campo de saída), ou seja, a quantidade de caracteres que caberá em cada célula. </li>
                            <br><li class="wow fadeInLeft" data-wow-delay="0.6s">Caso você não deseje criar novo campo, esse campo <strong>Atualiza um campo existente.</strong> Para isso, basta marcar a caixa que fica ao lado da opção e depois escolher qual coluna será atualizada na lista suspensa que ficará ativa;</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="0.9s"><strong>Campo de expressão:</strong> neste campo serão inseridos os comandos dados pelo usuário, visando a geração de informação na tabela de atributos;</li>
                            <br><li class="wow fadeInLeft" data-wow-delay="1.2s"><strong>Campo de funções:</strong> este campo contém as funções e operadores para a geração dos comandos dados no campo de expressão. O item “CAMPOS E VALORES” contém as colunas da tabela de atributos.</li>
                        </ol>

                        <br><p><strong>Calculadora de campo.</strong></p>

                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://drive.google.com/file/d/1O5j5n8_iI-IAKyr0Qm0hvPPFu8KyHjAM/preview" width="640" height="480" allow="autoplay"></iframe>
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div><br>

                        <br><br>


                </div>

                <br><br>
                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico01.4.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico01.6.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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