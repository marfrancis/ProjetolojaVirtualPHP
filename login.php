<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "head.php"; ?>
</head>
<body>
    <?php include_once"header.php"; ?>

    <div class="container">

    <div class="col-5 mt-5 mx-auto">
        <div class="jumbotron  ">
        <form action="logarusuario.php" method="post" enctype="multipart/form-data">
            <h1>Login</h1>
  
  <div class="form-group">
    <label for="emailUsuario">Email</label>
    <input type="email" step="any" name="emailUsuario" class="form-control" id="emailUsuario" placeholder="Digite o email">
  </div>
  <div class="form-group">
    <label for="senhaUsuario">Senha</label>
    <input type="password" name="senhaUsuario" class="form-control" id="senhaUsuario" placeholder="Digite a senha"></input>
    </div>
    
    
    <button class="btn btn-success" type="submit">Entrar</button>
    <a href="cadastrousuario.php" class="btn btn-primary">Criar Cadastro</a>
    
 
</form>
        </div>
    </div>

    
    </div>
</body>
</html>