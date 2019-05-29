<header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Cursos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <?php if(isset($usuario) && $usuario != "" && $usuario['logado']): ?>

                    <?php if($usuario['nivelAcesso'] == 0):?>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Ações<span class="sr-only">(current)</span></a>
                    </li>
                    <?php else: ?>
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Perfil<span class="sr-only">(current)</span></a>
                    </li>

                    <?php endif; ?>
                    <li class="nav-item">
                    <a href="#" class="nav-link">Olá <?php echo $usuario['nome']; ?></a>
                    </li>

                    <?php else: ?>
                   
                        <li class="nav-item">
                    <a href="#" class="nav-link">Login</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>