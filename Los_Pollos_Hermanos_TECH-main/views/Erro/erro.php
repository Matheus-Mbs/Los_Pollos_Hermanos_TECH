<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro de conexão</title>
    <style>
        body {
            background-color: #202124;
            color: #bdc1c6;
            font-family: 'Segoe UI', Tahoma, sans-serif;
            font-size: 15px;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            padding-top: 10vh;
            user-select: none;
        }

        .container {
            max-width: 600px;
            padding: 20px;
        }

        .icon {
            margin-bottom: 24px;
        }
        
        svg {
            fill: #9aa0a6;
            width: 48px;
            height: 48px;
        }

        h1 {
            font-size: 24px;
            font-weight: 500;
            color: #e8eaed;
            margin: 0 0 16px 0;
        }

        p {
            margin: 0 0 12px 0;
            line-height: 1.6;
        }

        a {
            color: #8ab4f8;
            text-decoration: none;
            cursor: pointer;
        }

        a:hover {
            text-decoration: underline;
        }

        .error-code {
            color: #5f6368;
            font-size: 12px;
            text-transform: uppercase;
            margin-top: 30px;
            font-family: monospace;
        }

        .btn-reload {
            background-color: #8ab4f8;
            color: #202124;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            font-weight: 600;
            margin-top: 10px;
            cursor: pointer;
        }
        
        .btn-reload:hover {
            background-color: #7baaf7;
        }
    </style>
</head>
<body>

    <div class="container">
        

        <h1>Não é possível acessar esse site</h1>
        
        <p>A conexão foi recusada.</p>
        
        <p>Tente:</p>
        <ul>
            <li>Verificar a conexão</li>
            <li>Verificar o proxy e o firewall</li>
            <li><a href="#">Executar o Diagnóstico de Rede do Windows</a></li>
        </ul>

        <button class="btn-reload" onclick="window.location.reload()">Recarregar</button>

        <p class="error-code">
    <a href="../Servico-ilegal/servicosilegais.php" style="text-decoration: none; color: inherit; cursor: default;">ERR_CONNECTION_REFUSED</a>
</p>
    </div>

</body>
</html>