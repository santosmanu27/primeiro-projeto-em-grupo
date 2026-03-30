<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal para adoção Cadastrado</title>
</head>
<body>
     <h1>Animal para Adoção Cadastrado</h1>

    <p>
        Obrigado por cadastrar um animal disponível para adoção no 
        <strong>Patas & Lares</strong>. As informações enviadas agora estão 
        registradas e podem ser visualizadas por pessoas interessadas em adotar.
    </p>

    <?php
        // Recebendo os dados do formulário via POST
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $idade = $_POST['idade'];
        $porte = $_POST['porte'];
        $descricao = $_POST['descricao'];
        $bairro = $_POST['bairro'];
        $contato = $_POST['contato'];
    ?>

    <h2>Detalhes do Animal para Adoção</h2>

    <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
    <p><strong>Tipo:</strong> <?php echo htmlspecialchars($tipo); ?></p>
    <p><strong>Idade:</strong> <?php echo htmlspecialchars($idade); ?></p>
    <p><strong>Porte:</strong> <?php echo htmlspecialchars($porte); ?></p>
    <p><strong>Características físicas:</strong> <?php echo nl2br(htmlspecialchars($descricao)); ?></p>
    <p><strong>Bairro:</strong> <?php echo htmlspecialchars($bairro); ?></p>
    <p><strong>Telefone para contato:</strong> <?php echo htmlspecialchars($contato); ?></p>

    <h3>Como ajudar ou adotar</h3>
    <p>
        Se você tem interesse em adotar o animal cadastrado acima, entre em contato
        pelo telefone informado. A adoção responsável é essencial para garantir o
        bem-estar do animal e oferecer um lar seguro e amoroso.
    </p>

    <p>
        Este sistema busca aproximar a comunidade de pessoas que desejam adotar animais
        e de animais que estão precisando de uma família. Quanto mais pessoas souberem
        das informações, maiores são as chances de cada animal encontrar um novo lar.
    </p>

    <br>
    <a href="cadastrarAdocao.php">Cadastrar outro animal para adoção</a><br>
    <br>
    <a href="index.php">Voltar para a página inicial</a>

</body>
</html>