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
                  <h2 class="titulo text-center">Cadastro</h2>
                  <div class="form-group">
                    <span class="pull-left"><img class="user" src="img/login-icon.png"></span>
                    <label class="control-label col-xs-10" for="matr">
                    <input name="matr" id="matr" class="form-control" placeholder="Matrícula" required autofocus>
                    </label>
                    
                  </div>
                  <div class="form-group">
                    <span class="pull-left"><img class="user" src="img/login-icon.png"></span>
                    <label class="control-label col-xs-10" for="nomec">
                    <input name="nomec" id="nomec" class="form-control" placeholder="Nome" required autofocus>
                    </label>
                    
                  </div>
                  <div class="form-group">
                    <span class="pull-left"><img class="lock" src="img/lock.png"></span>
                    <label class="control-label col-xs-10" for="senh"><input name="senh" id="senh" class="form-control" placeholder="Senha" required autofocus></label>
                  </div>
              
              <div class="row text-center" style="padding: 10px;">
                <button type="button" class="btn btn-md btn-success" style="margin-right: 15px; width: 150px;">Cadastrar</button>
                <button type="button" class="btn btn-md btn-primary" style="width: 150px;">Voltar</button>
              </div>    
                  
              </form>
          </div>
        </div>
    </div>
    
    

</body>
</html>

