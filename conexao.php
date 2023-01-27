<?php
require_once __DIR__.'/vendor/autoload.php';

if(isset($_POST['msgButton'])) {
    $titulo = $_POST["titulo"];
    $mensagem = $_POST["mensagem"];
    
    $channelName = 'news';
    $recipient= ['ExponentPushToken[4v5SFYFpPpivRa7MRzsT1e]','ExponentPushToken[LlovGzMHJnWvfK2MX7FpmL]' ];
    
    // You can quickly bootup an expo instance
    $expo = \ExponentPhpSDK\Expo::normalSetup();
    
    foreach($recipient as $valor){
        $expo->subscribe($channelName, $valor);
    }
        $notification = ['title' => $titulo,'body' => $mensagem];
        // Notify an interest with a notification
        $expo->notify([$channelName], $notification);
    }

    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Teste de envio de mensagem</h1>
        <form method="post">
            <label for="">Titulo</label>
            <input type="text" name="titulo">
            <label for="">mensagem</label>
            <input type="text" name="mensagem">
            <Button name="msgButton" > enviar</Button>
        </form>
    </body>
    </html>