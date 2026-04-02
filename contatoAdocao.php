<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Adoção</title>
</head>
<body>
      <h1>Formulário de Interesse em Adoção</h1>

    <p>
        Ficamos felizes com o seu interesse em adotar um animal!
        Preencha o formulário abaixo com seus dados para que o
        responsável pelo animal entre em contato com você.
    </p>

    <form action="processaContatoAdocao.php" method="POST">

        <p>Seu nome:</p>
        <input type="text" name="nome">

        <p>Seu telefone:</p>
        <input type="text" name="telefone">

        <p>Nome do animal que deseja adotar:</p>
        <input type="text" name="animal">

        <p>Mensagem:</p>
        <textarea name="mensagem"></textarea>

        <br><br>
        <input type="submit" value="Enviar">

    </form>

    <br><br>
    <a href="listaAdocao.php">Voltar para a lista de adoção</a>

</body>
</html>