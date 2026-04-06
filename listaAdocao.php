<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais para adoção</title>
    <link rel="stylesheet" href="adocao.css"> 
</head>
<body>

    <header class="hero">
        <h1>Animais Disponíveis para Adoção</h1>
    </header>

    <div class="form-intro">
        <div class="intro-card">
            <h3>Encontre seu novo amigo</h3>
            <p>
                Nesta página você encontrará animais que estão disponíveis para adoção.
                Todos os animais listados aqui precisam de um lar, carinho e cuidado.
                A adoção é um ato de amor e responsabilidade, por isso é importante
                que a pessoa esteja preparada para cuidar do animal.
            </p>
            <p>
                Se você se interessar por algum animal, clique no botão <strong>"Quero adotar"</strong>
                e entre em contato com o responsável pelo animal.
            </p>
        </div>
    </div>

    <div class="container-cards">
        <?php
            $animais = [
                [
                    "nome" => "Luna",
                    "tipo" => "Gata",
                    "idade" => "1 ano",
                    "descricao" => "Luna é uma gata muito calma, carinhosa e gosta de dormir em lugares quentinhos. Está acostumada com pessoas e é muito dócil.",
                    "contato" => "99999-4444",
                    "foto" => "adocao.png"
                ],
                [
                    "nome" => "Bob",
                    "tipo" => "Cachorro",
                    "idade" => "2 anos",
                    "descricao" => "Bob é um cachorro muito brincalhão e cheio de energia. Ele gosta de correr, brincar com bola e se dá muito bem com crianças.",
                    "contato" => "98888-5555",
                    "foto" => "adocao (1).png"
                ],
                [
                    "nome" => "Mel",
                    "tipo" => "Cachorra",
                    "idade" => "3 anos",
                    "descricao" => "Mel é uma cachorra muito tranquila, obediente e companheira. Ideal para quem quer um animal calmo e muito carinhoso.",
                    "contato" => "97777-6666",
                    "foto" => "adocao (5).png"
                ],
                [
                    "nome" => "Bob",
                    "tipo" => "Cachorro",
                    "idade" => "2 anos",
                    "descricao" => "Bob é um cachorro muito brincalhão e cheio de energia. Ele gosta de correr, brincar com bola e se dá muito bem com crianças.",
                    "contato" => "98888-5555",
                    "foto" => "adocao (4).png"
                ],
                [
                    "nome" => "Bob",
                    "tipo" => "Cachorro",
                    "idade" => "2 anos",
                    "descricao" => "Bob é um cachorro muito brincalhão e cheio de energia. Ele gosta de correr, brincar com bola e se dá muito bem com crianças.",
                    "contato" => "98888-5555",
                    "foto" => "adocao (3).png"
                ],
                [
                    "nome" => "Bob",
                    "tipo" => "Cachorro",
                    "idade" => "2 anos",
                    "descricao" => "Bob é um cachorro muito brincalhão e cheio de energia. Ele gosta de correr, brincar com bola e se dá muito bem com crianças.",
                    "contato" => "98888-5555",
                    "foto" => "adocao (2).png"
                ],
            ];

            foreach($animais as $animal){
                echo "<div class='card'>";
                    echo "<img src='img/" . $animal["foto"] . "'>";
                    echo "<h3>" . $animal["nome"] . "</h3>";
                    
                    // As informações dentro dos campos brancos organizados
                    echo "<div class='campo-info'><strong>Tipo:</strong> " . $animal["tipo"] . "</div>";
                    echo "<div class='campo-info'><strong>Idade:</strong> " . $animal["idade"] . "</div>";
                    echo "<div class='campo-info'><strong>Descrição:</strong> " . $animal["descricao"] . "</div>";
                    echo "<div class='campo-info'><strong>Contato:</strong> " . $animal["contato"] . "</div>";

                    echo "<a href='contatoAdocao.php'><button class='btn-adotar'>Quero adotar</button></a>";
                echo "</div>";
            }
        ?>
    </div>

    <div class="nav-links">
        <a href="index.php" class="link-voltar">← Voltar para a página inicial</a>
    </div>

    <footer class="footer">
        <p>&copy; 2026 - Site desenvolvido como projeto escolar. Projeto desenvolvido para a disciplina de Programação Web utilizando HTML, CSS e PHP - Projeto Patas & Lares</p>
    </footer>

</body>
</html>