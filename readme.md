https://www.youtube.com/watch?v=apVlDI_pWuk&list=PLxUDM49DgcpCD0m7sE-K7POzTHCRY-f0d&index=4

# first run

make u
make cli

composer create-project symfony/skeleton:"6.4.*" project
composer require webapp
mv -r project/* ../

# чтобы вкл debug панель
APP_DEBUG=1

#
bin/console
bin/console make
bin/console make:controller
bin/console debug:router - список роутов
bin/console debug:match /default/1 - найти роут по урлу
bin/console make:entity - создать сущность
bin/console make:crud - создать crud

bin/console doctrine:migrations:generate - создаст пустой файл миграции
bin/console doctrine:migrations:diff - создать миграцию, на разницу в entity и БД
bin/console doctrine:migrations:migrate - запустить миграции
bin/console doctrine:migrations:migrate -v
bin/console doctrine:migrations:migrate -vv
bin/console doctrine:migrations:migrate -vvv - режимы отладки выполнения запросов