# project-menu

## Como rodar esse projeto
---
Considerando que você esteja em um sistema operacional Linux e com o git instalado, faça o seguinte:

### Clone o projeto
```
git clone git@github.com:project-menu
```
### Acesse o projeto
```
cd project-menu
```
### Instale as dependências e o framework
```
composer install --no-scripts
```
### Copie o arquivo .env.example
```
cp .env.example .env
```
### Crie uma nova chave para a aplicação
```
php artisan key:generate
```
### Configure o arquivo .env e rode as migrations
```
php artisan migrate --seed
```
