<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


# Projeto Laravel + Vuejs

## Clonar o projeto:

``` bash
git clone https://github.com/marcelorocfer/project-teste-user-grid
``` 

## Acessar o diretório:

``` bash
cd project-teste-user-grid
``` 
## Configuração - Backend

``` bash
# Instalar dependências do projeto
- composer install

# Configurar variáveis de ambiente
- cp .env.example .env
- inserir as credenciais do seu banco de dados
- php artisan key:generate

# Criar migrations (tabelas e Seeders)
- php artisan migrate --seed
- php artisan passport:install
``` 
## Configuração - Frontend
``` bash

# Configurar a URL de acesso da API do projeto
- Acessar o diretório resources/js na raiz do projeto
- Acessar o arquivo app.js dentro de resources/js
- Definir a URL do seu ambiente local em:  
    window.BASE_URL="[http://seu-dominio-aqui/]"

# Atualizar dependências
- npm install

# Rodar em ambiente local localhost:8080
- npm run dev

# Rodar em ambiente de produção
- npm run build
``` 
## Autenticação
```
# Login de usuário
- Para acessar a aplicação é necessário estar autenticado.
- Caso não esteja cadastrado, clique em Register no menu e crie o seu usuário.
```
