<?php
    include_once 'web_include.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Importação Klickmail</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/general.css" rel="stylesheet">
  </head>
  <body>

	<div class="container">

      <div class="starter-template">
        <h1>Cadastramento em Massa</h1>
        <p class="lead">Use esta página com cuidado! <u>Evite fazer o primeiro cadastro do usuário por aqui</u>.<br/>
          O melhor uso é para envio de reconfirmação (neste caso, exclua os contatos no Klickmail <b>antes</b> de usar essa ferramenta.</p>

        <form action="confirmation.php" method="post">
			<p><input name="login" type="text" placeholder="Digite seu usuário do KlickMail"></p>
			<p><input name="password" type="password" placeholder="Senha"></p>
			<p><input name="poId" type="text" placeholder="Digite o ID do seu processo de dupla confirmação">Ex.: https://www.klickmail.com.br/lists/21358/<b>48970</b>/edit</p>
			<p><input name="tagId" type="text" placeholder="Digite o ID da TAG">Ex.: https://www.klickmail.com.br/tags/21358/edit/<b>784142</b></p>
			<p><textarea name="emails" rows="15" cols="100"></textarea></p>
			<p><input type="submit" value="Cadastrar e-mails"></p>
		</form>
      </div>

    </div>

    <h1></h1>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>