<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Perdidos</title>
</head>

<body>
    <h1>Animais Perdidos Cadastrados</h1>

    <p>
        Esta página mostra a lista de animais perdidos cadastrados no sistema
        Patas & Lares. Se você viu algum desses animais, entre em contato com
        o telefone informado para ajudar o animal a voltar para casa.
    </p>



    <?php
    $animais = [
        [
            "nome" => "luck",
            "tipo" => "Cachorro",
            "bairro" => "Panambi",
            "descricao" => "Cachorro marrom, muito dócil e gosta de pessoas, desapareceu próximo à praça do panambi e estava usando uma coleira azul.",
            "contato" => "99999-1111",
            "foto" => "cachorromarrom1.jpg"
        ],
        [
            "nome" => "Mia",
            "tipo" => "cachorro",
            "bairro" => "Vila Nova",
            "descricao" => "cachorra caramelo, de porte pequeno. Mia é um pouco assustada, mas é muito carinhosa. Sumiu durante a noite e não estava usando coleira.",
            "contato" => "98888-2222",
            "contato" => "98888-2222",
            "foto" => "caramelo.jpg"
        ],
        [
            "nome" => "Thor",
            "tipo" => "Gato",
            "bairro" => "Jardim América",
            "descricao" => "Grande, preto, usa coleira",
            "contato" => "97777-3333",
            "foto" => ""
        ],
        [
            "nome" => "Thor",
            "tipo" => "Gato",
            "bairro" => "Jardim América",
            "descricao" => "Grande, preto, usa coleira",
            "contato" => "97777-3333",
            "foto" => ""
        ],
        [
            "nome" => "Thor",
            "tipo" => "Gato",
            "bairro" => "Jardim América",
            "descricao" => "Grande, preto, usa coleira",
            "contato" => "97777-3333",
            "foto" => ""
        ],
        [
            "nome" => "Thor",
            "tipo" => "Gato",
            "bairro" => "Jardim América",
            "descricao" => "Grande, preto, usa coleira",
            "contato" => "97777-3333",
            "foto" => ""
        ],
        [
            "nome" => "Thor",
            "tipo" => "Gato",
            "bairro" => "Jardim América",
            "descricao" => "Grande, preto, usa coleira",
            "contato" => "97777-3333",
            "foto" => ""
        ],
        [
            "nome" => "Thor",
            "tipo" => "Gato",
            "bairro" => "Jardim América",
            "descricao" => "Grande, preto, usa coleira",
            "contato" => "97777-3333",
            "foto" => ""
        ],
        [
            "nome" => "Thor",
            "tipo" => "Gato",
            "bairro" => "Jardim América",
            "descricao" => "Grande, preto, usa coleira",
            "contato" => "97777-3333",
            "foto" => ""
        ],
    ];

    foreach ($animais as $animal) {
        echo "<h3>Animal Perdido</h3>";
        echo "<p><strong>Nome:</strong> " . $animal["nome"] . "</p>";
        echo "<p><strong>Tipo:</strong> " . $animal["tipo"] . "</p>";
        echo "<p><strong>Bairro:</strong> " . $animal["bairro"] . "</p>";
        echo "<p><strong>Descrição:</strong> " . $animal["descricao"] . "</p>";
        echo "<p><strong>Contato:</strong> " . $animal["contato"] . "</p>";

        echo "<p><strong>Foto:</strong></p>";
        echo "<img src='img/" . $animal["foto"] . "' width='200'>";

        echo "<br>";
    }
    ?>

    <p>
        O Patas & Lares agradece a colaboração de todos. Mesmo que você não tenha
        visto nenhum desses animais, você pode ajudar compartilhando este site
        com amigos, familiares e nas redes sociais. Quanto mais pessoas virem,
        maiores são as chances desses animais voltarem para seus lares.
    </p>

    <br>
    <a href="cadastrarPerdido.php">Cadastrar novo animal perdido</a><br>
    <a href="index.php">Voltar para a página inicial</a>


</body>

</html>