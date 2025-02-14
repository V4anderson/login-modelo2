Sistema de Login - Configuração e Execução

Este projeto é um sistema de login desenvolvido em PHP utilizando CodeIgniter e PostgreSQL.

Ambiente de Desenvolvimento

Sistema Operacional: Windows 11
Docker: Docker Desktop
Banco de Dados: PostgreSQL rodando em contêiner Docker
PHP: Versão 8.x
Gerenciador de Dependências: Composer

1️⃣ Configuração do Banco de Dados com Docker
Para rodar o PostgreSQL de maneira simples, utilizamos o Docker Desktop no Windows 11.

1.1 Baixar a imagem do PostgreSQL
Abra o Prompt de Comando (cmd) ou PowerShell e execute:
docker pull postgres:latest

1.2 Criar e rodar um contêiner PostgreSQL digite o seguintes comandos no CMD

docker run -d --name meu_postgres ^
  -e POSTGRES_USER=postgres ^
  -e POSTGRES_PASSWORD=123 ^
  -e POSTGRES_DB=vanderson ^
  -p 5432:5432 ^
  postgres:latest


 Importante: Não altere o usuário, senha ou porta do contêiner, pois estão configurados para funcionar corretamente com o projeto.

 1.3 Verificar se o contêiner está rodando
 docker ps

Se o contêiner não aparecer, inicie manualmente:
docker start meu_postgres

2️⃣ Instalação das Dependências
Antes de rodar o projeto, é necessário instalar as dependências do Composer.

Navegue até a pasta raiz do projeto no Prompt de Comando. Depois execute:
composer update

3️⃣ Criar a Estrutura do Banco de Dados
Após instalar as dependências, execute a migração para criar as tabelas e inserir um usuário padrão:
php spark migrate

Isso irá criar a tabela de Usuarios e inserir um usuário padrão para acesso ao sistema.

4️⃣ Credenciais Padrão de Acesso
Após a migração, utilize as credenciais abaixo para acessar o sistema:

E-mail: admin@admin.com
Senha: admin

5️⃣ Executando o Servidor
Para iniciar o servidor local do projeto, utilize:
php spark serve

Acesse o sistema pelo navegador no seguinte endereço:

http://localhost:8080
