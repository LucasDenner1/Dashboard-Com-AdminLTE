# Dashboard Laravel com AdminLTE

Este projeto é um dashboard desenvolvido utilizando o framework Laravel 11, integrado com o template AdminLTE e estilizado com Bootstrap.

## Funcionalidades

- Sistema de autenticação de usuários
- Recuperação de senha
- CRUD de usuários
- Gerenciamento de permissões

## Tecnologias Utilizadas

- **Laravel 11** - Framework PHP para desenvolvimento web
- **AdminLTE** - Template responsivo para painel de administração
- **Bootstrap** - Framework CSS para estilização
- **Node.js & NPM** - Gerenciamento de dependências front-end

## Instalação

1. Clone este repositório:
   ```sh
   git clone https://github.com/LucasDenner1/Dashboard-Com-AdminLTE.git
   ```
2. Instale as dependências do Laravel:
   ```sh
   composer install
   ```
3. Instale as dependências do NPM:
   ```sh
   npm install
   ```
4. Configure o arquivo `.env`:
   ```sh
   cp .env.example .env
   ```
5. Gere a chave da aplicação:
   ```sh
   php artisan key:generate
   ```
6. Execute as migrações:
   ```sh
   php artisan migrate
   ```
7. Compile os assets do frontend:
   ```sh
   npm run dev
   ```
8. Inicie o servidor:
   ```sh
   php artisan serve
   ```

