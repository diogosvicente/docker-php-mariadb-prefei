<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ambiente de Desenvolvimento - Docker Prefei</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Ambiente de Desenvolvimento Docker Prefei</h1>

        <div class="card-container">
            <!-- Versões do Ambiente -->
            <div class="card">
                <h2>Versões do Ambiente</h2>
                <p><strong>PHP:</strong> 8.2 (FROM php:8.2-apache)</p>
                <p><strong>MariaDB:</strong> 10.5 (mariadb:10.5)</p>

                <h2>Estrutura de Pastas</h2>
                <pre>
docker-prefei-php/
├── docker-compose.yml
├── Dockerfile
├── php/
│   └── custom.ini
├── htdocs/
│   └── projeto1/
└── db_data/
                </pre>
            </div>

            <!-- Comandos Docker -->
            <div class="card">
                <h2>Comandos Docker</h2>
                <p><strong>Subir o ambiente:</strong></p>
                <p><code id="cmd-up">docker compose up -d</code>
                   <button class="copy-btn" onclick="copyToClipboard('cmd-up')">Copiar</button></p>

                <p><strong>Derrubar o ambiente:</strong></p>
                <p><code id="cmd-down">docker compose down</code>
                   <button class="copy-btn" onclick="copyToClipboard('cmd-down')">Copiar</button></p>

                <p><strong>Ver status:</strong></p>
                <p><code id="cmd-ps">docker compose ps</code>
                   <button class="copy-btn" onclick="copyToClipboard('cmd-ps')">Copiar</button></p>

                <p><strong>Reiniciar todos:</strong></p>
                <p><code id="cmd-restart-all">docker compose restart</code>
                   <button class="copy-btn" onclick="copyToClipboard('cmd-restart-all')">Copiar</button></p>
            </div>

            <!-- Diretório Principal -->
            <div class="card">
                <h2>Diretório Principal</h2>
                <p>Acesse sua raiz de projetos:</p>
                <p><a href="http://localhost" target="_blank">http://localhost</a></p>
                <p>Arquivo atual: <code>htdocs/index.php</code></p>
            </div>

            <!-- Projetos Individuais -->
            <div class="card">
                <h2>Projetos Individuais</h2>
                <p>Crie subpastas em <code>htdocs/</code>:</p>
                <p>Exemplo de acesso:</p>
                <p><a href="http://localhost/projeto1" target="_blank">http://localhost/projeto1</a></p>
            </div>

            <!-- phpMyAdmin -->
            <div class="card">
                <h2>phpMyAdmin</h2>
                <p>Gerencie o banco de dados:</p>
                <p><a href="http://localhost:8080" target="_blank">http://localhost:8080</a></p>
                <p><strong>Usuário:</strong> <code>root</code><br>
                   <strong>Senha:</strong> <code>root</code><br>
                   <strong>Host:</strong> <code>db</code></p>
            </div>

            <!-- Alterar configurações PHP -->
            <div class="card">
                <h2>Alterar configurações PHP</h2>
                <p>Edite o arquivo:</p>
                <p><code>php/custom.ini</code></p>
                <p>Exemplo:</p>
                <p><code>upload_max_filesize=64M</code><br><code>post_max_size=64M</code></p>
                <p><em>Após alteração, reinicie o container com:</em></p>
                <p><code id="cmd-restart-phpini">docker compose restart apache</code>
                   <button class="copy-btn" onclick="copyToClipboard('cmd-restart-phpini')">Copiar</button></p>
            </div>

            <!-- Extensões PHP -->
            <div class="card">
                <h2>Extensões PHP</h2>
                <p>Liste todas as extensões carregadas no PHP:</p>
                <p><code id="cmd-php-ext">docker compose exec apache php -m</code>
                   <button class="copy-btn" onclick="copyToClipboard('cmd-php-ext')">Copiar</button></p>
                <p>Verifique a versão do PHP:</p>
                <p><code id="cmd-php-ver">docker compose exec apache php -v</code>
                   <button class="copy-btn" onclick="copyToClipboard('cmd-php-ver')">Copiar</button></p>
            </div>

            <!-- Versão do MariaDB -->
            <div class="card">
                <h2>Versão do MariaDB</h2>
                <p>Verifique a versão do banco de dados MariaDB:</p>
                <p><code id="cmd-mariadb-ver">docker compose exec db mysql --version</code>
                   <button class="copy-btn" onclick="copyToClipboard('cmd-mariadb-ver')">Copiar</button></p>
            </div>
        </div>

        <div class="footer">
            Desenvolvido com Docker - Ambiente Local Personalizado
        </div>
    </div>

    <script>
        function copyToClipboard(elementId) {
            const text = document.getElementById(elementId).innerText;
            navigator.clipboard.writeText(text).then(function() {
                alert("Comando copiado: " + text);
            }, function(err) {
                alert("Falha ao copiar");
            });
        }
    </script>
</body>
</html>
