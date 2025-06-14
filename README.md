# Ambiente de Desenvolvimento Docker - Prefeitura dos Campi da UERJ

Este repositório contém a configuração de um ambiente de desenvolvimento Docker para projetos da Prefeitura dos Campi da UERJ (Universidade do Estado do Rio de Janeiro), utilizando **PHP 8.2** e **MySQL (MariaDB 10.5)**.

## Visão Geral

* **PHP:** 8.2 (imagem oficial `php:8.2-apache`)
* **Banco de Dados:** MariaDB 10.5 (imagem `mariadb:10.5`)
* **Gerenciamento de Banco:** phpMyAdmin disponível em `http://localhost:8080`
* **Diretório de Projetos:** `./htdocs` (cada subpasta é um projeto)

## Estrutura de Pastas

```
docker-prefei-php/
├── docker-compose.yml   # Definição dos serviços Docker
├── Dockerfile           # Build da imagem PHP + Apache
├── php/                 # Configurações adicionais do PHP
│   └── custom.ini       # php.ini personalizado
├── htdocs/              # Pasta de projetos PHP (CodeIgniter, Laravel, etc.)
│   └── projeto1/        # Exemplo de um projeto
└── db_data/             # Volume Docker para persistência do banco
```

## Serviços

1. **apache**

   * Build: `Dockerfile` com PHP 8.2 + Apache
   * Porta: 80 → `http://localhost`
   * Montagem:

     * `./htdocs:/var/www/html`
     * `./php/custom.ini:/usr/local/etc/php/conf.d/custom.ini`

2. **db (MariaDB)**

   * Imagem: `mariadb:10.5`
   * Porta interna: 3306
   * Variáveis de ambiente:

     * `MYSQL_ROOT_PASSWORD=root`
     * `MYSQL_DATABASE=defaultdb`
     * `MYSQL_USER=user`
     * `MYSQL_PASSWORD=password`
   * Volume: `db_data:/var/lib/mysql`

3. **phpmyadmin**

   * Imagem: `phpmyadmin/phpmyadmin`
   * Porta: 8080 → `http://localhost:8080`
   * Configuração:

     * `PMA_HOST=db`
     * `PMA_PORT=3306`

## Pré-requisitos

* Docker (versão compatível com Docker Compose v2)
* Docker Compose (integrado ao Docker CLI)

## Instruções de Uso

1. **Clone o repositório**

   ```bash
   git clone <URL_DO_REPO>
   cd docker-php-mariadb-prefei
   ```

2. **Construir e iniciar**

   ```bash
   docker compose build --no-cache
   docker compose up -d
   ```

3. **Acessar**

   * PHP/Apache: `http://localhost`
   * phpMyAdmin: `http://localhost:8080` (usuário: `root`, senha: `root`)

4. **Listar extensões PHP**

   ```bash
   docker compose exec apache php -m
   ```

5. **Verificar versão do PHP**

   ```bash
   docker compose exec apache php -v
   ```

6. **Verificar versão do MariaDB**

   ```bash
   docker compose exec db mysql --version
   ```

7. **Parar e remover containers**

   ```bash
   docker compose down
   ```

## Personalizações

* 🚧 **Ajuste de php.ini**: Edite `php/custom.ini` e depois execute:

  ```bash
  docker compose restart apache
  ```

* **Adicionar mais serviços**: Inclua novos serviços (Redis, Node.js, etc.) no `docker-compose.yml` conforme a necessidade.

## Suporte

Em caso de dúvidas ou problemas, abra uma *issue* neste repositório.

---

*Desenvolvido para a Prefeitura dos Campi da UERJ — projetos em PHP 8.2 e MySQL.*
