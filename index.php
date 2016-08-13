<?php
    include_once 'web_include.php';
?>
<html>
<head>
	<title>KlickMail Admin</title>
    <style>
        input { width:300px; }
    </style>
</head>
<body>

<p><h1>Cadastramento de Reconfirmação</h1></p>

<form action="confirmation.php" method="post">
<p><input name="login" type="text" placeholder="Digite seu usuário do KlickMail"></p>
<p><input name="password" type="password" placeholder="Senha"></p>
<p><input name="poId" type="text" placeholder="Digite o ID do seu processo de dupla confirmação">Ex.: https://www.klickmail.com.br/lists/21358/<b>48970</b>/edit</p>
<p><input name="tagId" type="text" placeholder="Digite o ID da TAG">https://www.klickmail.com.br/tags/21358/edit/<b>784142</b></p>
<p><textarea name="emails" rows="20" cols="100"></textarea></p>
<p><input type="submit" value="Cadastrar e-mails"></p>
</form>

</body>
</html>