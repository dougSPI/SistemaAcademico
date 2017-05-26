<html lang="pt-br">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
</head>
<body style="background-image: url('img/fundo.png');" >

    <div class="container-fluid">
        <img class="logo" src="img/logo.png" >
        <div class="row" id="painel">

          <div class="container col-xs-12">
              <form class="form-horizontal" accept-charset="utf-8">
                  <h2 class="titulo">Login</h2>
                  <div class="form-group">
                    <span class="pull-left"><img class="user" src="img/login-icon.png"></span>
                    <label class="control-label col-xs-10" for="inputlogin">
                    <input name="Login" id="inputlogin" class="form-control" placeholder="Matrícula" required autofocus>
                    </label>
                    
                  </div>
                  <div class="form-group">
                    <span class="pull-left"><img class="lock" src="img/lock.png"></span>
                    <label class="control-label col-xs-10" for="inputsenha"><input name="senha" id="inputsenha" class="form-control" placeholder="Senha" required autofocus></label>
                  </div>
                   
              

              <div class="checkbox">
                  <input type="checkbox">Esqueci a senha
              </dir>
              
              <div class="row" style="padding-right: 30px;">
                <button type="button" id="entrar" class="btn btn-md btn-block btn-warning">Entrar</button>

                <button type="button" id="cadastrar" class="btn btn-md  btn-block btn-warning">Cadastra-se</button>
              </div>    
                  
              </form>
          </div>
        </div>
    </div>
    
    

</body>
</html>

