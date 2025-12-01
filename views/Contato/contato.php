<?php

// --- LÓGICA PHP PARA ADICIONAR CLIENTE ---
if(isset($_POST) && !empty($_POST)) {
    // Faz requisição do controlador de Cliente
    require_once "../../controllers/ContatoController.php";
    
    // Instancia o objeto Cliente
    $c = new Contato();

    // Preenche o objeto Cliente com os dados do formulário
    $c->setNome(htmlspecialchars($_POST['campoNome']));
    $c->setEmail(htmlspecialchars($_POST['campoEmail']));
    $c->setTelefone(htmlspecialchars($_POST['campoTelefone']));
    $c->setMensagem(htmlspecialchars($_POST['campoMensagem']));
  

    // Instancia o Controlador de Cliente
    $contatoController = new ContatoController();
    
    // Executa o método para adicionar o cliente no banco
    $rs = $contatoController->add($c);

    // Se a inserção for bem-sucedida, redireciona para a página de listagem
    if ($rs) {
        header("location: ../");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre em Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Inter', sans-serif;
        }
        .titulo {
            display: inline-block;
            background-color: #e0e0e0;
            padding: 0.5rem 1.5rem;
            border-radius: 20px;
            font-weight: 500;
            color: #030303ff;
            margin-bottom: 1.5rem;
        }

        .containerContato {
            max-width: 650px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
        }

        .form-control {
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <?php include "../includes/header.php" ;?>
    <br>
    <div class="container text-center">
        <div class="titulo">Entre em contato</div>

        <h3 class="mb-3">Vamos conversar!</h3>
        <p class="text-muted mb-5">
            Estamos prontos para discutir seu projeto e encontrar a solução perfeita para suas
            necessidades tecnológicas.
        </p>
    </div>

    <div class="container">
        <div class="containerContato">
            <h4 class="mb-4 text-start">Envie uma mensagem</h4>

            <form action="" method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label fw-bold">Nome</label>
                    <input type="text" class="form-control" name="campoNome" id="nome" required>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label for="email" class="form-label fw-bold">E-mail</label>
                        <input type="email" class="form-control" name="campoEmail" id="email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="telefone" class="form-label fw-bold">Telefone</label>
                        <input type="tel" class="form-control" name="campoTelefone" id="telefone">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="mensagem" class="form-label fw-bold">Mensagem/Currículo</label>
                    <textarea class="form-control" id="mensagem" name="campoMensagem" rows="5" required></textarea>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">
                        Enviar Mensagem
                    </button>
                </div>
            </form>
        </div>
    </div>
    <br><br>
    <?php include "../includes/footer.php" ;?>
</body>
