<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>Animal Perdido Cadastrado</h1>

    <p>
        Obrigado por cadastrar um animal perdido no <strong>Patas & Lares</strong>.
        As informações enviadas foram registradas e agora podem ser visualizadas
        por outras pessoas da comunidade que estão procurando animais ou que
        desejam ajudar.
    </p>

    <?php
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $descricao = $_POST['descricao'];
        $contato = $_POST['contato'];
    ?>

    <h2>Detalhes do Animal</h2>

    <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
    <p><strong>Tipo:</strong> <?php echo htmlspecialchars($tipo); ?></p>
    <p><strong>Bairro:</strong> <?php echo htmlspecialchars($bairro); ?></p>
    <p><strong>Rua / Referência:</strong> <?php echo htmlspecialchars($rua); ?></p>
    <p><strong>Descrição:</strong> <?php echo nl2br(htmlspecialchars($descricao)); ?></p>
    <p><strong>Telefone para contato:</strong> <?php echo htmlspecialchars($contato); ?></p>

    <h3>Como ajudar</h3>
    <p>
        Se você encontrou um animal que se parece com o cadastrado acima,
        entre em contato pelo telefone informado. Quanto mais pessoas souberem
        dessas informações, maiores são as chances de o animal voltar para casa.
    </p>

    <p>
        Esse sistema é uma forma de unir a comunidade para cuidar dos animais
        perdidos e conscientizar sobre a importância da adoção responsável.
    </p>

    <br>
    <a href="cadastrarPerdido.php">Cadastrar outro animal perdido</a><br>
    <br>
    <a href="index.php">Voltar para a página inicial</a>

</body>
</html>