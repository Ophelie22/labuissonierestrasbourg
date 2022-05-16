######  Fichiers de manipulation des commandes du terminal pour eviter de les taper à chaque fois.

###### Symfony server
symfony serve:start

###### Symfony ou php
php bin/console make:controller
php bin/console make:controller SecurityController


###### Git
git add .
git commit commit -m
git push
git status
git checkout
git branch

###### Docker
docker compose up -d
docker ps

######  Fixtures
php bin/console d:f:l

######  SQL
###  cleaner
d:d:d --force
###  créer
d:d:c
php bin/console make:migration
### migrer
php bin/console doctrine:migrations:migrate
d:m:m


## linters symfony

./bin/console lint:twig --env=prod src/ templates/