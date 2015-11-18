<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recebe Dados através de GET</title>
    </head>
    <body>

        <h1> Exemplo de recebimento - Método GET </h1>
        Bem-vindo <?php echo $_GET["name"]; ?><br>
        Seu endereço de e-mail é: <?php echo $_GET["email"]; ?>
        
        <pre><!-- Debugger -->
            <?php
                var_dump($GET);
            ?>    
    </body>
</html>
