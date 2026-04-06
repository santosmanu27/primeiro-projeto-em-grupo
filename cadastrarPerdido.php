<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar animal perdido</title>
</head>

 <link rel="stylesheet" href="Perdido1.css">

<body>
    
    

   <header class="hero small-hero">
        <div class="container center">
            <h1 class="hero-title">Cadastro de Animal Perdido</h1>
            <p class="hero-text">
                Ajude Encontrar Animais Perdidos na Sua Região
            </p>
        </div>
    </header>

   <section class="container form-intro">

    <div class="intro-card">

        <h2 class="intro-title">Sobre o cadastro</h2>

        <p class="text">
            Bem-vindo à seção de cadastro de animais perdidos do <strong>Patas & Lares</strong>.
            Aqui você pode informar sobre animais desaparecidos para que outras pessoas possam ajudar.
        </p>

        <p class="text">
            Este formulário é simples, mas quanto mais informações você fornecer,
            maiores serão as chances de encontrar seu animal.
        </p>

        <p class="text">
            Informe corretamente o bairro e um telefone. Detalhes como cor, tamanho
            e características ajudam muito na identificação.
        </p>

        <p class="text">
            Após o envio, os dados ficarão disponíveis para outras pessoas visualizarem.
        </p>

    </div>

</section>


    <main class="form-section">
        <div class="form-card">

            <h2 class="form-title">Informações do Animal</h2>

            <form class="form" action="processaPerdido.php" method="POST">

                <div class="form-row">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" required>
                    </div>

                    <div class="form-group">
                        <label>Tipo</label>
                        <input type="text" name="tipo" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Local (Cidade, Bairro, Rua)</label>
                    <input type="text" name="bairro" required>
                </div>

                <div class="form-group">
                    <label>Ponto de referência</label>
                    <input type="text" name="rua" required>
                </div>

                <div class="form-group">
                    <label>Descrição</label>
                    <textarea name="descricao"></textarea>
                </div>

                <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" name="contato" required>
                </div>

                <button class="btn btn-full" type="submit">
                    Cadastrar Animal
                </button>

            </form>

            <a href="index.php" class="link-voltar">← Voltar para o início</a>

        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2026 - Site desenvolvido como projeto escolar. Projeto desenvolvido para a disciplina de Programação Web utilizando
            HTML, CSS e PHP - Projeto Patas & Lares</p>
    </footer>

</body>
</html>