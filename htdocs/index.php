<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ambiente de Desenvolvimento - Docker</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 40px;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 300px;
            transition: transform 0.2s;
            text-align: left;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card h2 {
            color: #007bff;
            font-size: 22px;
            margin-bottom: 15px;
        }
        .card p {
            font-size: 16px;
            margin: 10px 0;
        }
        .card a {
            color: #007bff;
            text-decoration: none;
        }
        .card a:hover {
            text-decoration: underline;
        }
        .footer {
            margin-top: 40px;
            font-size: 14px;
            color: #777;
        }
        code {
            background: #eee;
            padding: 2px 6px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ambiente de Desenvolvimento Docker</h1>

        <div class="card-container">
            <div class="card">
                <h2>Diretório Principal</h2>
                <p>Acesse sua raiz de projetos:</p>
                <p><a href="http://localhost" target="_blank">http://localhost</a></p>
                <p>Arquivo atual: <code>htdocs/index.php</code></p>
            </div>

            <div class="card">
                <h2>Projetos Individuais</h2>
                <p>Crie subpastas em <code>htdocs/</code>:</p>
                <p>Exemplo de acesso:</p>
                <p><a href="http://localhost/projeto1" target="_blank">http://localhost/projeto1</a></p>
            </div>

            <div class="card">
                <h2>phpMyAdmin</h2>
                <p>Gerencie o banco de dados:</p>
                <p><a href="http://localhost:8080" target="_blank">http://localhost:8080</a></p>
                <p><strong>Usuário:</strong> <code>root</code><br>
                   <strong>Senha:</strong> <code>root</code><br>
                   <strong>Host:</strong> <code>db</code></p>
            </div>

            <div class="card">
                <h2>Alterar configurações PHP</h2>
                <p>Edite o arquivo:</p>
                <p><code>php/custom.ini</code></p>
                <p>Exemplo:</p>
                <p><code>upload_max_filesize=64M</code><br><code>post_max_size=64M</code></p>
                <p><em>Após alteração, reinicie o container com:</em></p>
                <p><code>docker-compose restart</code></p>
            </div>
        </div>

        <div class="footer">
            Desenvolvido com Docker - Ambiente Local Personalizado
        </div>
    </div>
</body>
</html>
