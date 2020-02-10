# Desafio Prático
## Cadastro de Clientes

CRUD para cadastro de clientes. Laravel 6.14.0.

para testar esta aplicação realize as seguintes etapas:

1. clonar repositório;
2. criar banco de dados 'desafiopratico';
3. instalar dependencias e framework;
```
composer install --no-scripts
```
4. criar arquivo .env;
```
cp .env.example .env
```
5. alterar arquivo.env
```
DB_DATABASE=desafiopratico
DB_USERNAME=root
DB_PASSWORD=root
```
6. gerar nova chave pra aplicação;
```
php artisan key:generate
```
7. run migrations;
```
php artisan migrate --seed
```
