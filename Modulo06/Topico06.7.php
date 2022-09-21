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

                        <!-- Sub Título -->
                        <p class="SubTitulo">Reclassificação de um raster</p>
                            <hr>

                        <p>Muito frequentemente, em nosso trabalho, precisamos realizar divisões em nossos dados por categorias. O objetivo é transformar variáveis contínuas em variáveis categóricas. Em um novo projeto, abra o arquivo <strong>decliv_centro_sul.tif</strong>  localizado na pasta <strong>Módulo 6 >> Resultados</strong> .  Sua tela ficará como na imagem abaixo:</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura18.png" data-bs-toggle="modal" data-bs-target="#Imagem18">
                                <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura18.png" alt="Alt da imagem fica aqui" width="700">
                            </a>
                            <p class="TituloFigura headline1"><strong>Figura 18</strong> </p>
                        </div>

                        <!-- Imagem 15 - MODAL -->
                        <div class="modal fade text-center" id="Imagem18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 15 - End -->
                        <br><br>

                        <p>Caso você não visualize o ícone das ferramentas de processamento, acesse o menu <strong>Complementos >> Gerenciar e Instalar Complementos</strong>. Será aberta a tela abaixo:</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura19.png" data-bs-toggle="modal" data-bs-target="#Imagem19">
                                <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura19.png" alt="Alt da imagem fica aqui" width="700">
                            </a>
                            <p class="TituloFigura headline1"><strong>Figura 19</strong> </p>
                        </div>

                        <!-- Imagem 15 - MODAL -->
                        <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 15 - End -->
                        <br><br>

                        <p>Na aba <strong>Buscar digite processing</strong>  e marque a caixinha branca que aparece ao lado do nome do complemento na lista de complementos. Feche a tela e repita o procedimento mostrado na figura anterior. Seu tela terá mais um elemento adicionado: <strong>a caixa de ferramentas</strong> , conforme figura abaixo:</p>
                        <br><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura20.png" data-bs-toggle="modal" data-bs-target="#Imagem20">
                                <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura20.png" alt="Alt da imagem fica aqui" width="700">
                            </a>
                            <p class="TituloFigura headline1"><strong>Figura 20 </strong>  </p>
                        </div>

                        <!-- Imagem 15 - MODAL -->
                        <div class="modal fade text-center" id="Imagem20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura20.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 15 - End -->
                        <br><br>

                        <p>No lado direito da tela, no campo <strong> Buscar</strong>, digite a palavra <strong>reclassificar</strong> . Clique na ferramenta reclassificar por tabela. </p>
                        <p>Classificaremos o nosso dado de declividade da seguinte forma:</p>

                        <ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><strong>Menor ou igual a 3%;</strong> </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><strong>Maior que 3% e menor ou igual a <img src="imagens/Figura21.png" alt=""> 8%;</strong></li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><strong>Maior que 8% e menor ou igual a 20%;</strong></li>
                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><strong>Maior que 20% e menor ou igual a 45%;</strong></li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><strong>Maior que 45% e menor ou igual a 75%;</strong></li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><strong>Maior que 75%.</strong></li>
                        </ol>

                        <p>Com ferramenta de reclassificação por tabela aberta, você verá a seguinte tela:</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura22.png" data-bs-toggle="modal" data-bs-target="#Imagem22">
                                <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura22.png" alt="Alt da imagem fica aqui" width="700">
                            </a>
                            <p class="TituloFigura headline1"><strong>Figura 22</strong></p>
                        </div>

                        <!-- Imagem 22 - MODAL -->
                        <div class="modal fade text-center" id="Imagem22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura22.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 22 - End -->
                        <br>

                        <ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Escolha a Camada de Entrada por meio do menu suspenso ou do botão Navegador. Selecione o arquivo <strong>decliv_centro_sul.tif</strong>;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">No campo <strong>Tabela de reclassificação</strong> clique no botão ao final do campo e será aberta a seguinte tela:</li>
                        </ol>
                        <br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura23.png" data-bs-toggle="modal" data-bs-target="#Imagem23">
                                <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura23.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="TituloFigura headline1"><strong>Figura 23</strong> </p>
                        </div>

                        <!-- Imagem 23 - MODAL -->
                        <div class="modal fade text-center" id="Imagem23" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura23.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 23 - End -->
                        <br>

                        <ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Adicione 6 linhas (comando adicionar linha) que é o número de linhas da nossa regra descrita acima;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Preencha os campos de maneira que fiquem como na tela abaixo:</li>
                        </ol>
                        <br>
                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura24.png" data-bs-toggle="modal" data-bs-target="#Imagem24">
                                <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura24.png" alt="Alt da imagem fica aqui">
                            </a>
                            
                            <p class="TituloFigura headline1"><strong>Figura 24</strong> </p>
                        </div>

                        <!-- Imagem 24 - MODAL -->
                        <div class="modal fade text-center" id="Imagem24" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura24.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 24 - End -->
                        <br>

                        <ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><strong>Mínimo:</strong> valores mínimos da classe a ser criada;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><strong>Máximo:</strong> valor máximo da classe a ser criada;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><strong>Valor:</strong> valor atribuído a todas os pixels da imagem que esteja inseridos naquele intervalo descrito.</li>
                        </ol><br>



                        <!-- diminuir texto --> <p>*Quando deixamos a célula vazia ele entende como ≤, <, > ou ≥ a depender dos intervalos limites  escolhidos. *</p>
                        <p>3. No campo intervalo de limites você encontrará as seguintes opções:</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura25.png" data-bs-toggle="modal" data-bs-target="#Imagem25">
                                <img class="img-fluid hradline1" data-wow-delay="0.5s" src="imagens/Figura25.png" alt="Alt da imagem fica aqui"width="200">
                            </a>
                            <p class="TituloFigura hradline1"><strong>Figura 25</strong> </p>
                        </div>

                        <!-- Imagem 25 - MODAL -->
                        <div class="modal fade text-center" id="Imagem25" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura25.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 25 - End -->
                        <br>

                        <p>Considerando a regra acima descrita, <strong>escolheremos a primeira opção na lista</strong>. </p>
                        <p>4. Defina a localização, nome e tipo de arquivo, se necessário; caso contrário, deixe em branco e grave o arquivo como um arquivo temporário. No nosso caso, salve o arquivo na pasta <strong>Módulo 6 >> Resultados</strong> com o nome <strong>decliv_centro_sul_reclass</strong>.</p>
                        <p>5. Clique em <strong>Executar</strong>. O resultado será como mostrado na tela a seguir:</p>
                        <p>Observe que foi gerado um novo arquivo com valores variando entre 1 e 6. </p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura26.png" data-bs-toggle="modal" data-bs-target="#Imagem26">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura26.png" alt="Alt da imagem fica aqui" width="750">
                            </a>
                            <p class="TituloFigura"><strong>Figura 26 </strong>  </p>
                        </div>

                        <!-- Imagem 26 - MODAL -->
                        <div class="modal fade text-center" id="Imagem26" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura26.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 26 - End -->
                        <br>
                        <p><strong>O próximo passo será melhorar o aspecto visual do dado gerado. Acesse as propriedades do seu dado dando um duplo clique sobre ele.</strong></p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura27.png" data-bs-toggle="modal" data-bs-target="#Imagem27">
                                <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura27.png" alt="Alt da imagem fica aqui" width="600">
                            </a>
                            <p class="TituloFigura headline1"><strong>Figura 27</strong> </p>
                        </div>

                        <!-- Imagem 27 - MODAL -->
                        <div class="modal fade text-center" id="Imagem27" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura27.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 27 - End -->
                        <br>

                        <p>Acesse a aba de <strong>Simbologia (1)</strong> e clique em <strong>Estilo (2) >> Carregar Estilo (3)</strong>. Navegue até a pasta <strong>Módulo 6 >> Dados</strong> e escolha o arquivo <strong>Declividade_Embrapa.qml</strong> e clique em <strong>OK</strong>. Sua tela mudará, conforme a imagem a seguir:</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura28.png" data-bs-toggle="modal" data-bs-target="#Imagem28">
                                <img class="img-fluid headline1" data-wow-delay="0.5s" src="imagens/Figura28.png" alt="Alt da imagem fica aqui" width="600">
                            </a>
                            <p class="TituloFigura headline1"><strong>Figura 28</strong> </p>
                        </div>

                        <!-- Imagem 28 - MODAL -->
                        <div class="modal fade text-center" id="Imagem28" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura28.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 28 - End -->
                        <br><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">                                
                                <center><h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6></center><br>
                                <!-- VÍDEO -->
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="embed-responsive embed-responsive-16by9">
                                        <iframe src="https://drive.google.com/file/d/1Oh8DmJwZrIvnOabqew3MhNxfo5rcengF/preview" width="640" height="480" allow="autoplay"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
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
            <a href="Topico06.6.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
            <a href="Topico06.8.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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