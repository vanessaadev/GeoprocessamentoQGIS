
<?php
    // EGPCE - Chama o conectamoodle.php
    require_once('conectamoodle.php');
?>
<?php
$page = 'Referencias';
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
            <!-- CONTEUDO INICIO -->
            <div class="main-content container-fluid">
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">

                            <div class="bd-callout bd-callout-success">

                                <h2 class="Titulo">REFERÊNCIAS</h2>


                                <p class="Texto"> ANTUNES, Celso. A arte de comunicar. Rio de Janeiro: Vozes, 2005. </p>
                                <p class="Texto"> BECHARA, E. Moderna gramática portuguesa. 37. ed. rev. e ampl. Rio de Janeiro: Lucerna, 2003. </p>
                                <p class="Texto"> BELTRÃO, O. Correspondência: linguagem e comunicação. 16. ed. São Paulo: Atlas, 1981. </p>
                                <p class="Texto"> BLIKSTEIN, I. Técnicas de comunicação escrita. 12. ed. São Paulo: Ática, 1995. </p>
                                <p class="Texto"> BRASIL. Congresso. Câmara dos Deputados. Manual de Redação. Brasília: Câmara dos Deputados, Coordenação de Publicações, 2004. </p>
                                <p class="Texto"> Manual de redação da Presidência da República / Casa Civil, Subchefia de Assuntos Jurídicos ; coordenação de Gilmar Ferreira Mendes, Nestor José Forster Júnior [et al.]. – 3. ed., rev., atual. e ampl. – Brasília: Presidência da República, 2018. 189 p. </p>
                                <p class="Texto"> FERREIRA, Aurélio Buarque de Holanda. Dicionário Aurélio eletrônico: século XXI. Versão 3.0. [S.l.]: Lexikon Informática Ltda, 1999. </p>
                                <p class="Texto"> FERREIRA, Eric Duarte; CAMBRUSSI, Morgana Ferreira. Redação Empresarial. Florianópolis: CAD/CSE/UFSC, 2008. </p>
                                <p class="Texto"> FLÔRES, L. L. Redação oficial. 3. ed. Florianópolis: Ed. da UFSC, 2002. </p>
                                <p class="Texto"> ______. Redação Oficial. Florianópolis: Departamento de Ciências da Administração, UFSC, 2007. </p>
                                <p class="Texto"> FAVERO, Leonor Lopes. Coesão e coerência textuais. São Paulo: Ática, 1991. </p>
                                <p class="Texto"> GOLD, M. Redação empresarial: escrevendo com sucesso na era da globalização. 3. ed. São Paulo: Pearson Pretice Hall, 2005. </p>
                                <p class="Texto"> GUIA DO ESTUDANTE. Caderno Profissões. São Paulo: Editora Abril, 2009. </p>
                                <p class="Texto"> HOUAISS, Antônio. Dicionário Houaiss da Língua Portuguesa. Rio de Janeiro: Objetiva, 2001. </p>
                                <p class="Texto"> MARTINS, Dileta Silveira; ZILBERKNOP, Lubia Scliar. Português instrumental. 17. ed. Porto Alegre: Sagra-DC Luzzatto, 1995. </p>
                                <p class="Texto"> MATARAZZO, Cláudia. Net.com.classe: um guia para ser virtualmente elegante. São Paulo: Melhoramentos, 1999. </p>
                                <p class="Texto"> MEDEIROS, J. B. Correspondência: técnicas de comunicação criativa. 13. ed. São Paulo: Atlas, 1999. </p>
                                <p class="Texto"> PLATÃO, Francisco Savioli; FIORIN, José Luiz. Lições de texto: leitura e redação. 4. ed. São Paulo: Ática, 2003. </p>
                                <p class="Texto"> PREFEITURA MUNICIPAL DE FLORIANÓPOLIS. Secretaria Municipal da Receita. Portaria n. 4, de 15 de janeiro de 2008. Disponível em: <a href="http://www.pmf.sc.gov.br/arquivos/arquivos/pdf/04_10_2010_16.53.38.6088e601fc02fb2cbf45709e05392e58.pdf" target="_blank">http://www.pmf.sc.gov.br/arquivos/arquivos/pdf/04_10_2010_16.53.38.6088e601fc02fb2cbf45709e05392e58.pdf</a>. Acesso em: 25 nov. 2014. </p>
                                <p class="Texto"> SANTA CATARINA. Secretaria de Estado da Administração. Diretoria de Patrimônio e documentação. Padronização e redação dos atos oficiais. 2. ed. rev. e atual. Florianópolis: SEA, 2003. </p>
                                <p class="Texto"> UNIVERSIDADE FEDERAL DE SANTA CATARINA. Manual de identidade visual. Disponível em: <a href="http://www.identidade.ufsc.br" target="_blank">http://www.identidade.ufsc.br</a>. Acesso em: 24 nov. 2014.</p>

                            </div>

                          
          
                            <!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });                    
                            </script>

                        </div> <!-- CLASS PAGE TITLE FIM -->
                    </div> <!-- End col-md-10 -->

                    <div class="col-md-1"></div>
                </div> <!-- End row-->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico03.4.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="http://cursos.egp.ce.gov.br/mod/quiz/view.php?id=730" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-tasks"></i> Realização Avaliação 02 </a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>


                             <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>
</html>
