<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais para adoção</title>
</head>
<body>
    <h1>Animais Disponíveis para Adoção</h1>

    <p>
        Nesta página você encontrará animais que estão disponíveis para adoção.
        Todos os animais listados aqui precisam de um lar, carinho e cuidado.
        A adoção é um ato de amor e responsabilidade, por isso é importante
        que a pessoa esteja preparada para cuidar do animal.
    </p>

    <p>
        Se você se interessar por algum animal, clique no botão "Quero adotar"
        e entre em contato com o responsável pelo animal.
    </p>

    <br>

    <?php
        $animais = [
            [
                "nome" => "Luna",
                "tipo" => "Gata",
                "idade" => "1 ano",
                "descricao" => "Luna é uma gata muito calma, carinhosa e gosta de dormir em lugares quentinhos. Está acostumada com pessoas e é muito dócil.",
                "contato" => "99999-4444",
                "foto" => "cachorromarrom1.jpg"
            ],
            [
                "nome" => "Bob",
                "tipo" => "Cachorro",
                "idade" => "2 anos",
                "descricao" => "Bob é um cachorro muito brincalhão e cheio de energia. Ele gosta de correr, brincar com bola e se dá muito bem com crianças.",
                "contato" => "98888-5555",
                "foto" => "caramelo.jpg"
            ],
            [
                "nome" => "Mel",
                "tipo" => "Cachorra",
                "idade" => "3 anos",
                "descricao" => "Mel é uma cachorra muito tranquila, obediente e companheira. Ideal para quem quer um animal calmo e muito carinhoso.",
                "contato" => "97777-6666",
                "foto" => "cachorromarrom1.jpg"
            ],
            [
                "nome" => "Bob",
                "tipo" => "Cachorro",
                "idade" => "2 anos",
                "descricao" => "Bob é um cachorro muito brincalhão e cheio de energia. Ele gosta de correr, brincar com bola e se dá muito bem com crianças.",
                "contato" => "98888-5555",
                "foto" => "caramelo.jpg"
            ],
            [
                "nome" => "Bob",
                "tipo" => "Cachorro",
                "idade" => "2 anos",
                "descricao" => "Bob é um cachorro muito brincalhão e cheio de energia. Ele gosta de correr, brincar com bola e se dá muito bem com crianças.",
                "contato" => "98888-5555",
                "foto" => "caramelo.jpg"
            ],
            [
                "nome" => "Bob",
                "tipo" => "Cachorro",
                "idade" => "2 anos",
                "descricao" => "Bob é um cachorro muito brincalhão e cheio de energia. Ele gosta de correr, brincar com bola e se dá muito bem com crianças.",
                "contato" => "98888-5555",
                "foto" => "caramelo.jpg"
            ],
        ];

        foreach($animais as $animal){
            echo "<h3>" . $animal["nome"] . "</h3>";
            echo "<p><strong>Tipo:</strong> " . $animal["tipo"] . "</p>";
            echo "<p><strong>Idade:</strong> " . $animal["idade"] . "</p>";
            echo "<p><strong>Descrição:</strong> " . $animal["descricao"] . "</p>";
            echo "<p><strong>Contato:</strong> " . $animal["contato"] . "</p>";

            echo "<img src='img/" . $animal["foto"] . "' width='200'><br><br>";

           echo "<a href='contatoAdocao.php'><button>Quero adotar</button></a>";

            echo "<br>";
        }

    
    ?>

    <br>
    <a href="index.php">Voltar para a página inicial</a>

    <p>
        Adotar é um gesto de amor. Ao adotar um animal, você está dando a ele
        uma nova chance de ter uma vida feliz e cheia de carinho. Pense com
        responsabilidade e, se puder, adote um animal.
    </p>

    <footer>
        <p>&copy; 2026 - Site desenvolvido como projeto escolar. Projeto desenvolvido para a disciplina de Programação Web utilizando
            HTML, CSS e PHP - Projeto Patas & Lares</p>
    </footer>
</body>
</html>