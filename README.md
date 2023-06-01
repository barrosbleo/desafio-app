1 - Configurar arquivo .env com dados do banco de dados

2 - Rodar as migrations:
    php artisan migrate

3 - Popular tabela com seeds iniciais
    php artisan db:seed


API endpoints:

    Fetch produtos:
    {http:host:port}/api/produtos
    Fetch usuarios:
    {http:host:port}/api/usuarios/{id}