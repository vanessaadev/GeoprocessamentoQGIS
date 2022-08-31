<nav class="navbar navbar-header navbar-light navbar-expand">
    <!-- BTN HAMBURGUER MENU LATERAL -->
    <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
    <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <div class="d-none d-md-block d-lg-inline-block">Olá, <?php echo $NomeUsuario ?></div>
                </a>
                <a href="http://cursos.egp.ce.gov.br/course/view.php?id=140" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <div class="d-none d-md-block d-lg-inline-block"><?php echo "Ir para o Moodle" ?></div>
                </a>
            </li>
        </ul>

    </div>
</nav>