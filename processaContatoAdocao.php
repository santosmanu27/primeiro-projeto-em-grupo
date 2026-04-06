<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contato enviado</title>
</head>

<link rel="stylesheet" href="processoadocaocontato.css">

<body>
    

    <header class="hero">
        <h1 class="hero-title">Cadastro concluído</h1>
        <p class="hero-text">O animal já está disponível para adoção</p>
    </header>

    
    <br><br><br>
    <section class="info">
        <h2>Como ajudar ou adotar</h2>
        <p>
            Se você tem interesse em adotar o animal cadastrado acima, entre em contato pelo telefone informado. 
            A adoção responsável é essencial para garantir o bem-estar do animal e oferecer um lar seguro e amoroso.
        </p>
    </section>

    <div class="success-bar">
        ✓ Cadastro realizado com sucesso
    </div>

    <h3 class="section-title">Informações do Animal</h3>

    <div class="animal-info-card">
        <?php
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $animal = $_POST['animal'];
            $mensagem = $_POST['mensagem'];
        ?>

        <div class="info-row">
            <div class="info-item">
                <label>Nome:</label>
                <span><?php echo $nome; ?></span>
            </div>
            <div class="info-item">
                <label>Telefone:</label>
                <span><?php echo $telefone; ?></span>
            </div>
        </div>

        <div class="info-row">
            <div class="info-item">
                <label>Animal que deseja adotar:</label>
                <span><?php echo $animal; ?></span>
            </div>
            <div class="info-item">
                <label>Status:</label>
                <span>Aguardando contato</span>
            </div>
        </div>

        <div class="info-row-single">
            <label>Mensagem:</label>
            <span><?php echo $mensagem; ?></span>
        </div>

        <a href="index.php" class="link-voltar">← Voltar para a página inicial</a>
    </div>
</body>