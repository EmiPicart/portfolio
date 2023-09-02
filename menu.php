<nav class="navbar navbar-expand-md mb-4">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item px-3">
                    <a class="nav-link px-4 <?php echo ($pg == "index") ? "active" : ""; ?>" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item px-3">
                    <a class="nav-link px-4 <?php echo ($pg == "sobre-mi") ? "active" : ""; ?>" href="sobre-mi.php">Sobre mí</a>
                    </li>
                    <li class="nav-item px-3">
                    <a class="nav-link px-4 <?php echo ($pg == "proyectos") ? "active" : ""; ?>" href="proyectos.php">Proyectos</a>
                    </li>
                    <li class="nav-item px-3">
                    <a class="nav-link px-4 <?php echo ($pg == "contacto") ? "active" : ""; ?>" href="contacto.php">Contacto</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                  <button class="btn btnrojo" type="submit">Descargar mi CV <i class="fa-solid fa-download"></i></button>
                </form>
              </div>
            </div>
        </nav>