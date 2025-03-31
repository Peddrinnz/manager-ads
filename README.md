# Atividade 1 - MVC

Crie um projeto Laravel relacionado a Gerenciamento de estudantes do curso ADS.

[1 ponto] A página inicial deve conter as telas de boas vindas e links para:
Mostrar Estudantes
Mostrar Turmas
[2 pontos]Ao clicar em 'Mostrar Estudantes', deve mostrar uma tabela contendo: Cpf | nome | data_nascimento. A quantidade é de 20 estudantes. Além disso, cada estudante deve ter os botões de 'detalhes', 'remover' e 'Alterar'
[2 pontos]Ao clicar em 'Mostrar Turmas', deve mostrar uma tabela contendo: NumeroDaTurma | Semestre | Período do dia. Além disso, cada turma deve ter os botões 'detalhes', 'remover' e 'Alterar'
[0.5 ponto]Cada classe deve ter o seu controlador e o seu model;
[0.5 ponto]Cada página deve ter a sua rota nomeada;
[2 pontos]Todas as páginas deve ter um rodapé e navbar. Por ser padronizada por vocês, criem como um layout e reutilize nas páginas;
[1 ponto]Configure o nome da base de dados com seu nome; e
[1 ponto]Submeta junto ao projeto (em zip) o arquivo contendo as instruções para executar o projeto.
Observação: A estilização pode ser bootstrap ou algum framework CSS de preferência.

## Pré-requisitos

- Docker
- Docker Compose

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/Peddrinz/manager-ads.git
   cd manager-ads
2. Configure as variáveis de ambiente no arquivo .env:
```bash
   cp .env.example .env
```
3. Configure o banco de dados no arquivo .env
```bash
    DB_CONNECTION=mysql
    DB_PORT=3308
    DB_DATABASE=ads
    DB_USERNAME=laravel
    DB_PASSWORD=root
```
4. Suba os contêineres Docker com o docker-compose
```bash
    docker-compose up -d
```
5. Instale as dependências do PHP dentro do contêiner, gere a chave e rode as migrations
```bash
    docker-compose exec app composer install
    docker-compose exec app php artisan key:generate
    docker-compose exec app php artisan migrate
```
6. Instale as dependências e rode o projeto
```bash
    npm install
    php artisan serve
```
