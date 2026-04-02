<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<link rel="stylesheet" href="Perdido2.css">

<body>
    
<header class="hero">
    <h1 class="hero-title">Animal Perdido Cadastrado</h1>
    <p class="hero-text">Cadastro realizado com sucesso</p>
</header>

    <section class="info">
        <p>
            Obrigado por cadastrar um animal perdido no <strong>Patas & Lares</strong>.
            As informações enviadas foram registradas e agora podem ser visualizadas
            por outras pessoas da comunidade.
        </p>
    </section>

    <section class="info-final">
        <h3>Como ajudar</h3>
    <p>
        Se você encontrou um animal que se parece com o cadastrado acima,
        entre em contato pelo telefone informado. Quanto mais pessoas souberem
        dessas informações, maiores são as chances de o animal voltar para casa.
    </p>

    <p>
        Esse sistema é uma forma de unir a comunidade para cuidar dos animais
        perdidos e conscientizar sobre a importância da adoção responsável.
    </p>
     </section>

    <section class="status">
        <span>✔</span>
        <p>Cadastro realizado com sucesso</p>
    </section>

    
    <?php
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $descricao = $_POST['descricao'];
        $contato = $_POST['contato'];
    ?>


    <section class="card">

        <div class="card-header">
            <h2>Detalhes do Animal</h2>
        </div>

        <div class="card-content">

        <div class="item" >
            <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p> 
        </div>
   
        <div class="item" >
            <p><strong>Tipo:</strong> <?php echo htmlspecialchars($tipo); ?></p>
        </div>

        <div class="item" >
            <p><strong>Bairro:</strong> <?php echo htmlspecialchars($bairro); ?></p>
        </div>
    
        <div class="item" >
        <p><strong>Rua / Referência:</strong> <?php echo htmlspecialchars($rua); ?></p>
        </div>
    
        <div class="item" >
            <p><strong>Descrição:</strong> <?php echo nl2br(htmlspecialchars($descricao)); ?></p>
        </div>
    
        <div class="item" >
            <p><strong>Telefone para contato:</strong> <?php echo htmlspecialchars($contato); ?></p>
        </div>

        </div>

     <div class="actions">
        <a href="cadastrarPerdido.php" class="btn">Novo cadastro</a>
        <a href="index.php" class="btn-outline">Página inicial</a>
    </div>
    
    </section>
     
    
        
   


    

</body>
</html>