<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contratar Serviço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Inter', sans-serif;
        }

        .custom-card {
            max-width: 500px;
            margin: 3rem auto;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <?php include "../includes/header.php" ;?>
    <div class="container">
        <div class="custom-card card p-4">
            <div class="d-flex flex-column">
                <a href="#" class="text-decoration-none text-secondary mb-3">
                    <i class="bi bi-arrow-left"></i> Voltar
                </a>
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-primary p-2 me-3 rounded d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                        <span class="text-white fw-bold fs-4">&lt;></span>
                    </div>
                    <div>
                        <h5 class="card-title mb-0">Desenvolvimento Web Premium</h5>
                        <p class="text-muted mb-0">R$ 15.000</p>
                    </div>
                </div>
            </div>

            <hr class="mb-4">

            <form>
                <h6 class="mb-3 text-uppercase text-secondary">Dados da Empresa</h6>

                <div class="mb-3">
                    <label for="nomeEmpresa" class="form-label fw-bold">Nome da Empresa<span class="text-danger">*</span>:</label>
                    <input type="text" class="form-control" id="nomeEmpresa" required>
                </div>

                <div class="mb-3">
                    <label for="nomeResponsavel" class="form-label fw-bold">Nome do Responsável<span class="text-danger">*</span>:</label>
                    <input type="text" class="form-control" id="nomeResponsavel" required>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label for="telefone" class="form-label fw-bold">Telefone<span class="text-danger">*</span>:</label>
                        <input type="tel" class="form-control" id="telefone" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label fw-bold">E-mail<span class="text-danger">*</span>:</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="observacoes" class="form-label fw-bold">Observações<span class="text-danger">*</span>:</label>
                    <textarea class="form-control" id="observacoes" rows="4" required></textarea>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">
                        Contratar Serviço
                    </button>
                </div>
            </form>
        </div>
    </div>
    <?php include "../includes/footer.php" ;?>
</body>

</html>
