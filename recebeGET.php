<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recebe Dados através de GET</title>
    </head>
    <body>

        <h1> Exemplo de recebimento - Método GET </h1>
        <?php if(isset($GET["name"])): ?>
            Bem-vindo <?php echo $_GET["name"]; ?><br>
            Seu endereço de e-mail é: <?php echo $_GET["email"]; ?>
        <?php endif; ?>
        <pre><!-- Debugger -->
            <?php
                var_dump($_GET);
            ?>    
    </body>
</html>
