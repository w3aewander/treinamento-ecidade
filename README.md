# Treinamento do E-Cidade
## Laravel aplicado ao E-Cidade

>
> Wanderlei Silva do Carmo <wander.silva@gmail.com>
> Engenheiro Arquiteto de Software
> Especialista em Informatica Educacional
> DevOps e FullStack
>

### Configuração do ambiente Laravel no Ubuntu Linux

#### Instalar as dependências básicas para o projeto.

1. PHP (Versões 7.4 ou superior)
2. SGBD PostgreSQL, MySQL ou SQLite (De acordo com o e-cidade)
3. Pacotes apt:
>
> curl, wget, php-curl, php-mbstring, php-dom, php-pgsql, php-gd, php-bzip2, etc...
>
```bash
   apt install curl > curl wget php-curl php-mbstring php-dom php-pgsql php-gd php-bzip2
```
4. Baixar os nvm para Linux:
>
> https://github.com/nvm-sh/nvm
>

```bash

curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.40.3/install.sh | bash

# ou

wget -qO- https://raw.githubusercontent.com/nvm-sh/nvm/v0.40.3/install.sh | bash

source ~/.bashrc

```
5. Instalar o composer

```bash

    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'.PHP_EOL; } else { echo 'Installer corrupt'.PHP_EOL; unlink('composer-setup.php'); exit(1); }"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"

    #
    # para facilitar os comandos mova o composer.phar criado para um diretório do path do sistema com o nome "composer" simplesmente.
    # assim não precisa digitar 'php composer.phar <comando>'
    #

    mv composer.phar  /usr/local/bin/composer

```

6. Executar o composer para instalar o Laravel e o Laravel/ui

```bash

 composer create-project --prefer-dist laravel/laravel treinamento-ecidade '8.x'  ( versão compatível com o php-7.4 )

 # Mudar o diretório para o diretório do projeto

 cd treinamento-ecidade

 # Execute o composer para instalar o Laravel/ui

 composer require "laravel/ui"

 # Crie o banco de dados

 # Edite o .env e configure o acesso ao servidor pgsql, mysql ou sqlite

 # Execute a migration para gerar as tabelas necessárias do Laravel

 php artisan migrate

 ```

7. Adicionar integração com o Vue

 ```bash

    php artisan ui vue --auth


 ```

8. Adicione suporte para o Português Brasil
>
> [lucascudo](https://github.com/lucascudo/laravel-pt-BR-localization)
>

```bash

composer require lucascudo/laravel-pt-br-localization --dev
php artisan vendor:publish --tag=laravel-pt-br-localization


// Altere Linha 85 do arquivo config/app.php para:
'locale' => 'pt_BR'

// Para versões >= 11.x altere a linha 8 do arquivo .env
APP_LOCALE=pt_BR

```


6. Instalar o node a partir do nvm
```bash
nvm install node

# ou uma versão específica

npm install 21.3

```

7. Agora executar os comandos a seguir

```bash

composer install
npm install && npm run dev

#Excutar novamente o mix
npm install && npm run dev

# Executar o servidor de desenvolvimento do Laravel - em um novo terminal


   php artisan serve

   #Agora a página está disponível  em http://localhost:8000
```
