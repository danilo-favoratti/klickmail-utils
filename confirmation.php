<?php
    include_once 'web_include.php';
    require_once("klicktipp.api.inc");

    if(isset($_POST["login"]) && isset($_POST["password"])) {
        $login = $_POST["login"];
        $senha = $_POST["password"];

        $connector = new KlicktippConnector();
        $connector->login($login, $senha);

        if(isset($_POST["poId"]) && isset($_POST["tagId"])) {
            $poId = $_POST["poId"];
            $tagId = $_POST["tagId"];

            if(isset($_POST["emails"])) {
                $emails = explode(",", $_POST["emails"]);
                foreach ($emails as $email) {
                    $connector->subscribe($email, $poId, $tagId);
                    echo "<p>Email enviado para: ".$email."</p>";
                }

            echo "Confirmação Reenviada!";

            } else {
                echo "Preencha os e-mails!";
            }

        } else {
           echo "IDS incorretos!";
        }

        $connector->logout();

    } else {
        echo "Usuário e Senha inválido!";
    }
?>