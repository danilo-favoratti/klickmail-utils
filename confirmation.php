<?php
    include_once 'header.php';
    set_time_limit(300);
?>
    <div class="container">
      <div class="starter-template">
        <h1>Resultado</h1>

<?php
    require_once("klicktipp.api.php");

    if(isset($_POST["login"]) && isset($_POST["password"])) {
        $login = $_POST["login"];
        $senha = $_POST["password"];

        $connector = new KlicktippConnector();
        $isLogged = $connector->login($login, $senha);

        if(!$isLogged) {
            echo "<p class='error'>Problemas com usuário e/ou senha! (Erro: ".$connector->get_last_error().")</p>";
        } else {
            if(!(isset($_POST["poId"]) && isset($_POST["tagId"]))) {
                echo "<p class='error'>IDS incorretos!</p>";
            } else {
                echo "<h3>Lista de envios:</h3>";
                $poId = $_POST["poId"];
                $tagId = $_POST["tagId"];

                $emailsError = array();
                $countEmailsError = 0;
                $countEmailsSuccess = 0;
                if(isset($_POST["emails"]) && !empty($_POST["emails"])) {
                    $emails = explode(",", $_POST["emails"]);
                    foreach ($emails as $email) {
                        $isSubscribed = $connector->subscribe($email, $poId, $tagId);
                        if($isSubscribed) {
                            $countEmailsSuccess++;
                            echo "<span class='success'>Email cadastrado: ".$email."</span><br/>";
                        } else {
                            $countEmailsError++;
                            $emailsError[] = $email;
                            echo "<p class='error'>Não foi possível cadastrar: ".$email."! (Erro: ".$connector->get_last_error().")</p>";
                        }
                    }
                    echo "<h3>Confirmações Reenviadas:</h3>";
                    echo "<h4>Sucessos: ".$countEmailsSuccess."</h4>";
                    echo "<h4>Erros: ".$countEmailsError."</h4>";
                } else {
                    echo "<p class='error'>Preencha os e-mails!</p>";
                }

                if(count($emailsError)>0) {
                    echo "<h3>Lista de e-mails com erro:</h3>";
                    foreach ($emailsError as $emailError) {
                        echo "<span class='error'>".$emailError."</span><br />";
                    }
                }

            }
            $connector->logout();
        }
    } else {
        echo "<p class='error'>Usuário e Senha inválidos!</p>";
    }

    include_once 'footer.php';
?>