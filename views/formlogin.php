<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Cadastro</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    
    <body>

<form action="/index.php/Login/auth" method="Post" class="form-horizontal">
<fieldset>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nome</label>  
  <div class="col-md-4">
  <input id="textinput" name="nome" placeholder="Digite seu nome completo" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password"> Senha</label>
  <div class="col-md-4">
    <input id="password" name="senha" placeholder="Digite sua senha" class="form-control input-md" type="password">
    
  </div>
</div>

<!-- Text input-->
<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="e-mail">e-mail</label>  
  <div class="col-md-4">
  <input id="e-mail" name="email" placeholder="Digite seu e-mail" class="form-control input-md" type="text">
    
  </div> -->
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Cadastrar"></label>
  <div class="col-md-4">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-primary">Enviar</button>
  </div>
</div>

</fieldset>
</form>
</body>
</html>