<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal para adoção Cadastrado</title>
</head>

 <link rel="stylesheet" href="Adocao2.css">

<body>
     
<header class="hero success-hero">
    <div class="container center">
        <h1 class="hero-title">Cadastro concluído</h1>
        <p class="hero-text">O animal já está disponível para adoção</p>
    </div>
</header>

<main class="main">

<section class="info-final" >
    <h3>Como ajudar ou adotar</h3>
    <p>
        Se você tem interesse em adotar o animal cadastrado acima, entre em contato
        pelo telefone informado. A adoção responsável é essencial para garantir o
        bem-estar do animal e oferecer um lar seguro e amoroso.
    </p>

    <p>
        Este sistema busca aproximar a comunidade de pessoas que desejam adotar animais
        e de animais que estão precisando de uma família. Quanto mais pessoas souberem
        das informações, maiores são as chances de cada animal encontrar um novo lar.
    </p>
    </section>

    
    <!-- STATUS -->
    <section class="status">
        <div class="status-icon">✔</div>
        <p>Cadastro realizado com sucesso</p>
    </section>

    <?php
        // Recebendo os dados do formulário via POST
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $idade = $_POST['idade'];
        $porte = $_POST['porte'];
        $descricao = $_POST['descricao'];
        $bairro = $_POST['bairro'];
        $contato = $_POST['contato'];
    ?>

    <section class="card">

        <div class="card-header">
            <h2>Informações do Animal</h2>
        </div>

        <div class="card-content">

        <div  class="item" >
            
            <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
        </div>
    
        <div  class="item" > 
            
            <p><strong>Tipo:</strong> <?php echo htmlspecialchars($tipo); ?></p>
        </div>
   
        <div  class="item" >
           
            <p><strong>Idade:</strong> <?php echo htmlspecialchars($idade); ?></p>
        </div>

        <div  class="item" >
          
            <p><strong>Porte:</strong> <?php echo htmlspecialchars($porte); ?></p>
        </div>
    
        <div  class="item" >
             
            <p><strong>Características físicas:</strong> <?php echo nl2br(htmlspecialchars($descricao)); ?></p>
        </div>

        <div  class="item" >
            
            <p><strong>Bairro:</strong> <?php echo htmlspecialchars($bairro); ?></p>
        </div>

        <div  class="item" >
           
             <p><strong>Telefone para contato:</strong> <?php echo htmlspecialchars($contato); ?></p>
        </div>
    
    
    
   

    
    
        

    <div class="actions">
        <a href="cadastrarAdocao.php" class="btn">Novo cadastro</a>
        <a href="index.php" class="btn-outline">Página inicial</a>
    </div>


</body>
</html>