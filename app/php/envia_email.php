<?php

    if (isset($_POST['nome'])){

        // Constantes e-mail admin
        $api_key = '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';
        $admin_name = 'Ta Automação';
        $email_admin = 'ta.auto.tec@gmail.com';
        $msg_susseso = '<div class="alert alert-success text-center" role="alert">Obrigado! Retornamos em breve.</div>';
        $msg_erro = '<div class="alert alert-danger text-center" role="alert">Ops! Houve um problema tente mais tarde ou use os contatos telefônicos.</div>';

        // Dados e mensagem do cliente
        $cliente_nome = $_POST['nome'];
        $cliente_tel = $_POST['telefone'];
        $cliente_email = $_POST['email'];
        $cliente_servicos = $_POST['servicos'];
        $cliente_msg = $_POST['msg'];

        // Cria e-mail
        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom($email_admin, $admin_name);
        $email->setSubject($cliente_servicos);
        $email->addTo($email_admin, $admin_name);
        $email->addContent("text/html", 
                            "Nome: " . $cliente_nome . "<br>" .
                            "Telefone: " . $cliente_tel . "<br>" .
                            "E-mail: " . $cliente_email . "<br><br>" .
                            "Solicitação: <br><br>" . $cliente_msg
                          );

        $sendgrid = new \SendGrid($api_key);

        try {
            $response = $sendgrid->send($email);
            $response_code = $response->statusCode();

            if($response_code == '202'){
                $_SESSION['msg_usuario'] = $msg_susseso;
            }
            else
            {
                $_SESSION['msg_usuario'] = $msg_erro;
            }

        } catch (Exception $e) {
            $_SESSION['msg_usuario'] = $msg_erro;
        }
    }