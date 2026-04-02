<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contato enviado</title>
</head>
<body>
     <h1>Contato Enviado com Sucesso!</h1>

    <?php
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $animal = $_POST['animal'];
        $mensagem = $_POST['mensagem'];
    ?>

    <p><strong>Nome:</strong> <?php echo $nome; ?></p>
    <p><strong>Telefone:</strong> <?php echo $telefone; ?></p>
    <p><strong>Animal que deseja adotar:</strong> <?php echo $animal; ?></p>
    <p><strong>Mensagem:</strong> <?php echo $mensagem; ?></p>

    <p>
        Em breve o responsável pelo animal entrará em contato com você.
        Obrigado por querer adotar!
    </p>

    <br><br>
    <a href="index.php">Voltar para a página inicial</a>

</body>
</html>