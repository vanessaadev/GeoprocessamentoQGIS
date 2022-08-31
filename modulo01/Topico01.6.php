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
                        <p class="SubTitulo">Criando Seu Próprio Vetor</p>
                        <hr>

                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Criando um Shapefile</p>
                        <hr>

                        <br><p>
                          Para criar um shapefile no QGIS acesse o menu <strong>Camada >> Criar Nova Camada >> Nova Camada Shapefile</strong>. O caminho a ser seguido é mostrado na Figura 09. Após seguido o caminho, será aberta a tela mostrada na Figura 10: 
                        </p>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="TituloFigura"><strong>Figura 09:</strong>Acesso à ferramenta de criação de novo shapefile.</p>
                        </div>

                        <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte:</strong>Acesso à ferramenta de criação de novo shapefile.</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="700" right="300" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura"><strong>Figura 10:</strong>Tela de criação de novo shapefile.</p>
                            </a>
                        </div>

                        <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte:</strong>Tela de criação de novo shapefile.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 12 - End -->


                        <br><ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><strong>Forneça um caminho e um nome de arquivo</strong> usando o botão &nbsp;<img src="imagens/Icone08.png">&nbsp;  próximo ao nome do arquivo. O QGIS adicionará automaticamente a extensão correta ao nome que você fornecer;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Em seguida, <strong>indique a codificação do arquivo</strong> dos dados. <strong>Mantenha a codificação UTF-8</strong>;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Escolha o <strong>tipo de geometria da camada</strong> (ponto, multiponto, linha ou polígono);</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.2s">Especifique se a geometria deve ter Z (valores + M) ou valores M. Mantenha a opção <strong>nenhum</strong>;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.5s">Especifique o sistema de referência de coordenadas usando o botão Selecione <strong>Projeção</strong>.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.8s">Para <strong>adicionar campos</strong> à camada que você está criando:</li>
                                <ol class="none">
                                   <li class="wow fadeInLeft" data-wow-delay="2.1s">6.1. Digite o nome do campo;</li>
                                   <li class="wow fadeInLeft" data-wow-delay="2.4s">6.2. Selecione o tipo de dados. Somente número decimal, número inteiro, dados de texto e atributos de data são suportados;</li>
                                   <li class="wow fadeInLeft" data-wow-delay="2.7s">6.3. Dependendo do formato de dados selecionado, insira o Comprimento (parte inteira) e a Precisão (parte decimal);</li>
                                   <li class="wow fadeInLeft" data-wow-delay="3.0s">6.4. Clique no botão Novo Atributo Adicionar à Lista de Campos;</li>
                                   <li class="wow fadeInLeft" data-wow-delay="3.3s">6.5. Reproduza as etapas acima para cada campo que você precisa adicionar.Quando estiver satisfeito com os atributos, clique em OK. O QGIS adicionará a nova camada ao painel de camadas.</li> 
                                </ol>
                        </ol><br>

                        <p>Acesse o vídeo abaixo para acompanhar o procedimento para criação de shapefiles.</p>

                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://drive.google.com/file/d/1SA4KlchyI0pCMyG7eV0RibQjcJ90KcN6/preview" width="640" height="480" allow="autoplay"></iframe>
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div><br>

                        <br><!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Adicionando Informações a um Shapefile</p>
                        <hr>

                        <br><p>Após seguidos os passos do item: <strong>Criando um Shapefile</strong>, você terá criado o arquivo shapefile, porém apesar de constar no painel de camadas, nenhuma geometria foi atribuída a ele, o que significa que não serão visualizadas informações na área do mapa. Para isso, poderemos adicionar imagens na tela para que, a partir de análise visual, possamos adicionar informações ao shapefile. Esse procedimento é denominado vetorização. </p>

                        <p>Acesse o link do vídeo abaixo para acompanhar o procedimento para adicionar informações a um shapefile. </p>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <p class="SaibaMaisTexto">
                               Clique aqui e acesse o link do vídeo abaixo para acompanhar o procedimento para <strong>adicionar informações a um shapefile</strong>. 
                               falta video
                            </p>
                        </div>

                      
                        <br><!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Criando um Shapefile a Partir de um Arquivo de Texto Delimitado (.csv)</p>
                        <hr>

                        <br><p>Para importação de um arquivo .csv basta seguir o procedimento mostrado no item: <strong>Importando Valores Separados por Vírgula (.csv)</strong>. O arquivo importado será mostrado no painel de camadas. Para converter o arquivo .csv para shapefile, basta clicar sobre o arquivo mostrado no painel de camadas com o botão direito e clicar em <strong>Exportar >> Salvar Feições Como</strong>. Em seguida será aberta a tela mostrada na Figura 11.</p>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="500" Right="150" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="TituloFigura"><strong>Figura 11:</strong>Tela de salvamento do arquivo a ser convertido.</p>
                        </div>

                        <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte:</strong>Tela de salvamento do arquivo a ser convertido.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 13 - End -->


                        <br><br><ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Campo de seleção do formato do arquivo a ser convertido. Existem diversas opções, mas mantenha o formato shapefile;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><strong>Forneça um caminho e um nome de arquivo</strong> usando o botão <img src="imagens/Icone73.png"> próximo ao nome do arquivo. O QGIS adicionará automaticamente a extensão correta ao nome que você fornecer;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Especifique o sistema de referência de coordenadas usando o botão <strong>Selecione Projeção</strong>.</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.2s">Em seguida, <strong>indique a codificação do arquivo</strong> dos dados. <strong>Mantenha a codificação UTF-8</strong>;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.5s">Selecione os campos para exportar e as suas opções de exportação. <strong>Mantenha como esta</strong>;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.8s">Mantenha a opção de adicionar o arquivo salvo ao mapa. </li>
                        </ol>

                        <br><p>Feito todo o procedimento, o novo arquivo criado será mostrado no painel de camadas. Acesse o vídeo para acompanhar o procedimento de adição de informações a um shapefile e criação de um shapefile a partir de um arquivo de texto delimitado.</p>

                        <p>Acesse o vídeo abaixo para acompanhar o procedimento para criação de shapefile a partir de arquivo de texto delimitado. </p>

                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://drive.google.com/file/d/1uB5f6t-t_ZUEtLyLwKd7cSPO1-DoPC8U/preview" width="640" height="480" allow="autoplay"></iframe>
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div><br>

                        <br><!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Adicionando Dados a Um Shapefile a Partir de Uma Planilha em csv</p>
                        <hr>

                        <br><p>As junções de dados têm uma função importante em qualquer banco de dados. Muitas vezes significa que podemos juntar dados <strong>com um identificador comum</strong>, estendendo os dados originais. Nesta seção, usaremos uma tabela simples ao Shapefile do estado do Ceará. A tabela será composta pelas atividades de aquicultura no estado do Ceará, mostrando o quantitativo de licenças concedidas. Com esses dados, foi criado um arquivo .csv (Figura 12). O QGis lê um shapefile como se fosse uma tabela contendo dados geométricos, portanto, quaisquer tabelas serão abertas no QGis através do menu de abertura de vetor. No caso, o identificador comum a ser usado será o geocódigo do município, dado facilmente coletado por meio de planilha no banco de dados do IBGE. </p>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="TituloFigura"><strong>Figura 12:</strong> Tabela de dados para adição no shapefile do Ceará.</p>
                        </div>

                        <!-- Imagem 14 - MODAL -->
                        <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="FonteFigura"><strong>Fonte:</strong> Tabela de dados para adição no shapefile do Ceará.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 14 - End -->


                        <br><p>Acessando as propriedades do shapefile do Ceará, será aberta a seguinte tela <strong>(Figura 13)</strong>:</p>

                        <br><!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="500" right="300" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="TituloFigura"><strong>Figura 13</strong>ela de união de informações de tabela na tabela de atributos de um shapefile.</p>
                        </div>

                        <!-- Imagem 15 - MODAL -->
                        <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center"> 
                                        <p class="FonteFigura"><strong>Fonte:</strong> ela de união de informações de tabela na tabela de atributos de um shapefile.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 15 - End -->

                        <br><br><ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Clique na aba Uniões;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Clique no ícone <img src="imagens/Icone74.png"> ;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Em seguida, aparecerá a tela de adicionar união de vetor. O que será exposto nesta tela são as colunas da sua planilha em formato csv e as colunas da tabela de atributos de seu shapefile. Em <strong>unir camadas</strong> você escolhe a planilha csv que contém os dados a serem inseridos no shapefile;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.1s">Em <strong>unir campo</strong> você escolhe a coluna da planilha que possui os dados em comum com a coluna do shape, no nosso caso, será o geocódigo;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.5s">Em <strong>campo alvo</strong> você escolhe a coluna da tabela de atributos que contém os dados em comum com a coluna da planilha, no caso o geocódigo;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.8s"><strong>Desmarque</strong> a opção de armazenar temporariamente, já que queremos que a informação componha o shapefile permanentemente;</li>
                            <li class="wow fadeInLeft" data-wow-delay="2.1s"><strong>Marque essa opção e apague o conteúdo da célula</strong> e, após isso, clique em <strong>OK</strong>.</li>
                        </ol><br>

                        <p>Acesse o vídeo para acompanhar o procedimento de adição de dados a um shapefile a partir de uma planilha em csv.</p>

                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://drive.google.com/file/d/1xPINA2HxhjAdhv6nspnecrmAHsaSYoQ0/preview" width="640" height="480" allow="autoplay"></iframe>
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
                    <a href="Topico01.5.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href=".php" class="btn btn-primary" role="button" aria-pressed="true">Realizar Atividade Avaliativa 01 <i class="fa fa-chevron-right"></i></a>
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