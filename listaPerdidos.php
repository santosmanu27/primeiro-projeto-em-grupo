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
            "nome" => "Honny",
            "tipo" => "Porte grande. pelagem clara (creme), orelhas em pés",
            "bairro" => "Vila Nova",
            "descricao" => "Animal muito dócil, pelagem densa e clara, focinho escuro e olhos castanhos. Aparenta ser jovem e bem cuidado.",
            "contato" => "(18) 96428-7185",
            "foto" => "perdido 1.png"
        ],
        [
            "nome" => "Toddy",
            "tipo" => "Filhote, pelagem branca com manchas pretas.",
            "bairro" => "Jardim Murilo Macedo",
            "descricao" => "Filhote muito pequeno, manchas pretas simétricas na cabeça (parece uma máscara) e manchas nas costas. Muito curioso.",
            "contato" => "(18) 99631-1840",
            "contato" => "(18) 99765-9100",
            "foto" => "perdido 2.png"
        ],
        [
            "nome" => "Manolo",
            "tipo" => "Gato adulto, pelagem curta totalmente preta.",
            "bairro" => "Vila Affini",
            "descricao" => "Gato preto de olhos amarelos. Usava uma coleira com um pingente metálico (medalhinha) no momento da foto.",
            "contato" => "(18) 99646-9813",
            "foto" => "perdido 3.png"
        ],
        [
            "nome" => "Marrom",
            "tipo" => "Porte médio, pelagem branca com grandes manchas marrons, tipo SRD",
            "bairro" => "Vila Gammon",
            "descricao" => "Cão alegre e ativo, possui uma mancha marrom característica que cobre um dos olhos. Estava com uma guia de corrente",
            "contato" => "(18) 99765-9100",
            "foto" => "perdido 4.png"
        ],
        [
            "nome" => "Babi",
            "tipo" => "Porte grande, pelagem longa na cor dourada (Raça Golden Retriever)",
            "bairro" => "Jardim Panambi",
            "descricao" => "Cão extremamente dócil e sorridente, com pelagem clara e densa, especialmente no peito e orelhas. Tem olhos castanhos escuros e focinho preto. Nas fotos, aparece interagindo com pessoas e parece estar muito habituado ao convívio doméstico",
            "contato" => "(18) 99813-0308",
            "foto" => "perdido 5.png"
        ],
        [
            "nome" => "Bob",
            "tipo" => "Gato adulto, pelagem curta e uniforme na cor cinza.",
            "bairro" => "Jardim Panambi",
            "descricao" => "Gato elegante com olhos verdes muito claros. Pelagem brilhante e uma pequena mancha branca no peito",
            "contato" => "(18) 99813-0308",
            "foto" => "perdido 6.png"
        ],
        [
            "nome" => "Shelb",
            "tipo" => "Porte médio/grande, Pitbull, pelagem curta na cor cinza-rosado (Lilac) e tan (Caramelo).",
            "bairro" => "Vila Nova",
            "descricao" => "Cão de constituição forte, com coloração muito distinta. Tem o peito e focinhos mais claros e focinho rosado. Aparece nas fotos com uma coleira vermelha de corda. É um cachorro que chama atenção.",
            "contato" => "(18) 99646-9813",
            "foto" => "perdido 7.png"
        ],
        [
            "nome" => "Ellie",
            "tipo" => "Porte médio, SDR (Vira-lata), palgem curta predominantemente branca com mancha preta sobre um olho.",
            "bairro" => "Murilo Macedo",
            "descricao" => "Cão de médio porte, de pelo curto. a principal característica é a máscara preta cobrindo a região do olho esquerdo, parecendo um pirata. Oresto do corpo e rosto são brancos.",
            "contato" => "(18) 99813-0308",
            "foto" => "perdido 8.png"
        ],
        [
            "nome" => "Pipoca",
            "tipo" => "Porte pequeno, Shitzu, pelagem creme bem clara, orelhas caídas.",
            "bairro" => "Vila Gammon",
            "descricao" => "Cachorrinha de pequeno porte, estava usando uma roupinha de chochê muito fofa em tons de roxo no momento da foto. Tem olhos grandes e castanhos e uma expressão doce.",
            "contato" => "(18) 99765-9100",
            "foto" => "perdido 9.png"
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

    <footer>
        <p>&copy; 2026 - Site desenvolvido como projeto escolar. Projeto desenvolvido para a disciplina de Programação Web utilizando
            HTML, CSS e PHP - Projeto Patas & Lares</p>
    </footer>

</body>

</html>