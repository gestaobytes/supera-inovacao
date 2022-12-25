
# Setup Docker Para Projetos Laravel 9 com PHP 8

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/gestaobytes/supera-inovacao
```

```sh
cd supera-inovacao /
```

Crie o Arquivo .env
```sh
cd supera-inovacao /
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=supera-inovacao 
APP_URL=http://localhost:8955

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=supera-inovacao 
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Rodar o projeto com as bibliotecas UI
```sh
nvm install node
npm run dev
```


Acesse o projeto
[http://localhost:8955](http://localhost:8955)


### ATENÇÃO

Foi utilizado bibliotecas de UI que requerem o node trabalhando na máquina. 

Execute o comando 
```sh
command -v nvm
```

Caso apareça informações no NVM, não é necessário nenhum passo adicional. Caso contrário, entre no link abaixo e siga os passo para a instalação.

https://learn.microsoft.com/pt-br/windows/dev-environment/javascript/nodejs-on-wsl?WT.mc_id=nodebeginner-ch9-cxa


#### PASSOS A SEREM SEGUIDOS:

- sudo apt update && sudo apt upgrade; sudo apt-get install curl; sudo curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/master/install sh | bash;
- command -v nvm
- export NVM_DIR="$HOME/.nvm"
- [ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"  # This loads nvm
- [ -s "$NVM_DIR/bash_completion" ] && \. "$NVM_DIR/bash_completion"  # This loads nvm bash_completion
- nvm ls
