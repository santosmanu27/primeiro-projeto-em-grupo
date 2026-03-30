<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Animal para Adoção</title>
</head>

<body>

    <h1>Cadastro de Animal para Adoção</h1>

    <p>
        Bem-vindo à seção de cadastro de animais disponíveis para adoção do
        <strong>Patas & Lares</strong>. Aqui você pode informar sobre animais
        que precisam de um novo lar, para que pessoas interessadas possam
        conhecê-los e entrar em contato para adotá-los.
    </p>

    <p>
        Quanto mais informações você fornecer sobre o animal, maiores serão as
        chances de encontrar uma família responsável. Pedimos que descreva bem
        o animal, incluindo tipo, idade, porte, características físicas e
        comportamento.
    </p>

    <p>
        Também é importante informar o bairro onde o animal está e um telefone
        para contato, para que pessoas interessadas possam se comunicar e
        combinar a adoção.
    </p>

    <h3>Preencha as informações abaixo:</h3>

    <form action="processaAdocao.php" method="POST">

        <p>Nome do animal:</p>
        <input type="text" name="nome" required>

        <p>Tipo de animal:</p>
        <input type="text" name="tipo" required>

        <p>Idade do animal:</p>
        <input type="text" name="idade" required>

        <p>Porte do animal (pequeno, médio, grande):</p>
        <input type="text" name="porte" required>

        <p>Características físicas:</p>
        <textarea name="descricao" rows="4" cols="40"></textarea>

        <p>Cidade e Bairro onde o animal está:</p>
        <input type="text" name="bairro" required>

        <p>Telefone para contato:</p>
        <input type="text" name="contato" required>

        <br><br>
        <input type="submit" value="Cadastrar Animal para Adoção">

    </form>

    <br><br>
    <a href="index.php">Voltar para a página inicial</a>

</body>

</html>