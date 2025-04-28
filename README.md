# Meu Projeto Laravel

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

## Sobre o projeto
Este é um projeto de **Bloco de Notas** desenvolvido com Laravel. O objetivo foi explorar os principais pilares do framework, como rotas, controllers, views, migrations e interações com o banco de dados. A aplicação permite aos usuários **criar, editar e excluir notas**.

## O que consegui aprender:
- **Criação de projetos no Laravel**
- **Introdução às Routes**: Como definir e gerenciar URLs no Laravel.
- **Controllers**: Implementação de lógica de controle para manipulação de dados.
- **Blade**: Como criar Views dinâmicas e layouts reutilizáveis.
- **Conexão com MySQL**: Configuração de banco de dados.
- **Migrations e Seeders**: Estruturação e popularização do banco.
- **Eloquent ORM**: Manipulação de dados de maneira simples e eficiente.
- **Operações CRUD com Models**: Criar, ler, atualizar e deletar dados no banco.
- **Encriptação**: Proteção de dados sensíveis.
- **Soft Delete e Hard Delete**: Exclusão de registros com possibilidade de recuperação ou não.

## Como rodar o projeto

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/nome-do-repo.git

2. Navegue até o diretório do projeto:
   ```bash
   cd nome-do-repo

3. Instale as dependências:
   ```bash
   composer install

4. Configure o arquivo .env:
   ```bash
   cp .env.example .env

5. Gere a chave do aplicativo:
   ```bash
   php artisan key:generate

6. Rode as migrations:
   ```bash
   php artisan migrate

7. Abra o projeto no navegador:
   ```bash
   php artisan serve



