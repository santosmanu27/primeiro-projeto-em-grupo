<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar animal perdido</title>
</head>
<body>
    
    
    <h1>Cadastro de Animal Perdido</h1>

    <p>
        Bem-vindo à seção de cadastro de animais perdidos do <strong>Patas & Lares</strong>.
        Aqui você pode informar sobre animais que estão desaparecidos, para que outras
        pessoas da comunidade possam ajudá-lo a encontrá-los.
    </p>

    <p>
        Este formulário é simples e rápido de preencher, mas quanto mais informações você
        colocar, maiores serão as chances de que o seu animal seja encontrado.
    </p>

    <p>
        Pedimos para informar corretamente o bairro e um telefone para contato. Se possível,
        inclua detalhes sobre a aparência do animal, como cor, tamanho ou características
        especiais. Quanto mais detalhes, mais fácil será para alguém reconhecê-lo.
    </p>

    <p>
        Preencha os campos abaixo com cuidado. Todos os dados são importantes para ajudar
        o animal a voltar para casa. Depois de enviar, os dados ficarão disponíveis no sistema
        e poderão ser vistos por outras pessoas que estão procurando ou encontraram animais.
    </p>

    <h3>Formulário de Cadastro</h3>

    <form action="processaPerdido.php" method="POST">

        <p>Nome do animal:</p>
        <input type="text" name="nome" required >

        <p>Tipo de animal:</p>
        <input type="text" name="tipo" required >

        <p>Cidade, Bairro e Rua:</p>
        <input type="text" name="bairro" required >

        <p>ponto de referência:</p>
        <input type="text" name="rua" requirid>

        <p>Descrição do animal:</p>
        <textarea name="descricao" rows="4" cols="40"></textarea>

        <p>Telefone para contato:</p>
        <input type="text" name="contato" requirid>

        <br><br>
        <input type="submit" value="Cadastrar Animal Perdido">

    </form>

    <br><br>
    <a href="index.php">Voltar para a página inicial</a>

</body>
</html>