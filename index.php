<?php
    include_once 'header.php';
?>
	<div class="container">

    <div class="starter-template">
      <h1>Cadastramento em Massa</h1>
      <p class="lead">Use este recurso com cuidado! <u><b>Evite</b> fazer o primeiro cadastro do usuário por aqui</u>.</p>
      <p class="lead">O melhor uso é para envio de reconfirmação (exporte e depois exclua os contatos no Klickmail <b>antes</b>).</p>
      <p>O tempo máximo de execução é de <b>5 minutos</b>. Após este período os emails param de ser cadastrados. <br/>
      Evite cadastrar mais de <b>1000 (mil) e-mails</b> por vez, pois pode estourar o tempo limite.</p>
      <p>O código desse sistema é aberto e encontra-se aqui: <a href="https://github.com/danilo-favoratti/klickmail-utils">https://github.com/danilo-favoratti/klickmail-utils</a>.</p>

      <form action="confirmation.php" method="post">
  			<p><input name="login" type="text" placeholder="Digite seu usuário do KlickMail"></p>
  			<p><input name="password" type="password" placeholder="Senha"></p>
  			<p><input name="poId" type="text" placeholder="Digite o ID do seu processo de dupla confirmação">&nbsp;Ex.: https://www.klickmail.com.br/lists/21358/<b>48970</b>/edit</p>
  			<p><input name="tagId" type="text" placeholder="Digite o ID da TAG">&nbsp;Ex.: https://www.klickmail.com.br/tags/21358/edit/<b>784142</b></p>
  			<p><textarea name="emails" rows="15" cols="100"></textarea></p>
  			<p><input type="submit" value="Cadastrar e-mails"></p>
  		</form>
    </div>

  </div>

<?php
    include_once 'footer.php';
?>