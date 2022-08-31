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
                        <p class="SubTitulo">Rodando o QGIS Pela Primeira Vez</p>
                        <hr>

                        <p>
                           Quando você iniciar o QGIS verá a interface de usuário, conforme a Figura 01. Caso você deseje modificar o idioma, basta acessar <strong>Configurações >> Opções >> Geral >> Sobrepor Locale do Sistema</strong>, escolher as opções e reiniciar o sistema para que as modificações sejam aplicadas. 
                        </p>

                        <p>A interface do QGIS é composta por seis seções:</p>

                        <ol class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">1. <strong><u>Barra de Menus:</u></strong> a barra de menu permite o acesso a todas as funcionalidades do QGIS na forma padrão de menu suspenso;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">2. <strong><u>Painel Navegador:</u></strong> através desse painel é possível localizar rapidamente e ter acesso a diversos locais, servidores ou fontes de dados on-line. Você pode fechar ou encolher uma pasta usando a “setinha” antes da pasta onde se encontram os arquivos. Você também pode arrastar e soltar em um lugar facilmente;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">3. <strong><u>Painel de Camadas:</u></strong> no painel de camadas ficam localizados todos os arquivos abertos no QGIS;</li>
                        </ol>
                        
                        <p>Os painéis podem ser ativados ou desativados em <strong>Exibir >> Painéis</strong>. Da mesma forma, você pode clicar com o botão direito em qualquer lugar na barra superior da área de trabalho e uma janela com alternadores aparecerá. Esta janela é dividida por uma linha horizontal e os alternadores dos painéis estão localizados em sua parte superior.</p>

                        <div class="text-center">
                            <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong>Figura 01: </strong>Interface do usuário do QGIS.</p>
                        </div>

                        <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <!-- <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte: </strong>Fonte da Figura</p>
                                    </div> -->
                                </div>

                            </div>
                        </div> 
                        
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <p class="ImportanteTexto">Ao longo do curso usaremos o <strong>painel Navegador</strong> de vez em quando. Portanto, tente atribuir a ele uma posição adequada em vez de fechá-lo. Por exemplo, arrastando e soltando-o no painel Camadas, você pode criar duas guias independentes: uma para camadas e outra para navegação da fonte de dados. Nesse caso, você não terá que sacrificar a janela do espaço necessário para expandir e visualizar os itens.</p>
                        </div>

                        <br><ol class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"> 4. <strong><u>Barra de Ferramentas:</u></strong> As funções do menu são agrupadas em conjuntos de ferramentas lógicas e colocadas como botões em barras para fornecer acesso prático a todas as ferramentas necessárias. Por padrão, as seguintes barras de ferramentas são ativadas e exibidas:</li>
                        </ol>

                        <center><p><strong>Barra de Ferramentas do Projeto</strong></p></center>
                        <div class="text-center">
                            <a href="imagens/Icone01.png" data-bs-toggle="modal" data-bs-target="#Icone01">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Icone01.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <br><center><p><strong>Ferramentas de Mapa de Navegação</strong></p></center>
                        <div class="text-center">
                            <a href="imagens/Icone02.png" data-bs-toggle="modal" data-bs-target="#Icone02">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Icone02.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <br><center><p><strong>Ferramentas de Atributos</strong></p></center>
                        <div class="text-center">
                            <a href="imagens/Icone03.png" data-bs-toggle="modal" data-bs-target="#Icone03">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Icone03.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <br><center><p><strong>Ferramentas de Digitalização</strong></p></center>
                        <div class="text-center">
                            <a href="imagens/Icone04.png" data-bs-toggle="modal" data-bs-target="#Icone04">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Icone04.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <br><center><p><strong>Ferramentas de Rótulos</strong></p></center>
                        <div class="text-center">
                            <a href="imagens/Icone05.png" data-bs-toggle="modal" data-bs-target="#Icone05">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Icone05.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <br><center><p><strong>Ferramentas de Gerenciamento de Camadas</strong></p></center>
                        <div class="text-center">
                            <a href="imagens/Icone06.png" data-bs-toggle="modal" data-bs-target="#Icone06">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Icone06.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div><br>

                        <p>Se você quiser ver uma breve referência de ferramenta, apenas passe o ponteiro do mouse sobre o botão e uma janela de informações amarela aparecerá. Alguns botões ou barras de ferramentas estão acinzentados (por exemplo, a barra de ferramentas <strong>Digitalização</strong> e a barra de ferramentas de <strong>Atributos</strong>, o que significa que eles podem ser usados somente após a execução de algumas ações. Por exemplo, os botões da barra de ferramentas de digitalização ficam disponíveis somente após o modo de edição ser ativado para algumas camadas. As barras de ferramentas são encaixáveis e podem ser facilmente movidas pela área de trabalho. Para mover uma barra de ferramentas, coloque a seta do mouse sobre sua borda marcada por pontos dispostos verticalmente no início de cada barra. A seta se transformará em uma cruz, simbolizando que a barra de ferramentas agora pode ser arrastada e solta em qualquer outro lugar enquanto mantém pressionado o botão esquerdo do mouse. Você pode ativar ou desativar as barras de ferramentas navegando até <strong>Exibir >> Barras de ferramentas</strong> ou a partir da janela por meio de um clique com o botão direito em qualquer barra de ferramentas.</p>

                        <ol class="none">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">5. <strong><u>Área de Mapas:</u></strong> é a maior seção da janela da interface e é projetada para exibição de mapa de dados e exploração visual.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">6. <strong><u>Barra de Status:</u></strong> esta barra exibe as seguintes informações sobre a visão geral do mapa atual: uma barra de progresso da renderização (visível apenas se a renderização levar algum tempo para mostrar seu progresso), as coordenadas de posição do ponteiro do mouse, a escala e o sistema de referência de coordenadas atual. Ele também contém alternadores para alternar de coordenadas de posição de ponto para extensão e desativar temporariamente a renderização do mapa. Também existem botões usados para abrir a caixa de diálogo do sistema de referência de coordenadas e mostrar o <strong>painel de registro de mensagens</strong>.</li><br>
                        </ol>

                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://drive.google.com/file/d/17fT2Mja4q4HVl2AQgZqo8UPS5SE0JqW3/preview" width="640" height="480" allow="autoplay"></iframe>
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div><br><br>

                        <!-- Saiba Mais 
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <p class="SaibaMaisTexto">
                                <a href="https://drive.google.com/file/d/1-F-ImQKXA4bHhpmVpz7MOD-PRDRgm7Ff/view?usp=sharing" target="_blank">Clique aqui</a> para ver o vídeo e aprender sobre a <strong>Interface do QGIS</strong>.
                            </p>
                        </div> -->




                        


                </div>

                <br><br>
                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico01.3.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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