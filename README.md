## Instalando o VagasRits

Para rodar o projeto, se faz necessário:
1) Cloná-lo do GitHub:
$ git clone https://github.com/lucascasoares/VagasRits.git

2) Acessar a pasta do projeto e executar:
$ composer install
$ npm install
$ npm run dev
$ npm run production

3) Criar um .env a partir de .env-example
$ cp .env-example .env

4) Criar um app/key:
$ php artisan key:generate

5) Editar o .env e colocar as seguintes informações:

DB_CONNECTION=pgsql
DB_HOST=postgres
DB_PORT=5432
DB_DATABASE=VagasRits
DB_USERNAME=VagasRits
DB_PASSWORD=VagasRits

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=from@example.com
MAIL_FROM_NAME="${APP_NAME}"

Preenchendo MAIL_USERNAME e MAIL_PASSWORD com os dados da sua conta do mailtrap. As informações acima referentes ao postgres e redis estão configuradas no docker-compose.yml.

6) Criar as tabelas do banco de dados:
$ docker-compose run web php artisan migrate

7) Por fim basta rodar:
$ docker-compose up

## Utilizando o VagasRits
1) O sistema irá rodar na porta 80, portanto basta acessar http://localhost

2) A rota para o cadastro de candidatos é http://localhost/candidates

3) A rota para cadastro e login de administrador é a raiz: http://localhost. Após efetuar o login aparecerão as informações dos candidatos cadastrados, podendo clicar em um candidato específico e ver todas as informações referentes a este.
