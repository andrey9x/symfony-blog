https://youtu.be/TW-NaTfafoE?list=PLxUDM49DgcpCD0m7sE-K7POzTHCRY-f0d&t=204

# first run

make u
make cli

composer create-project symfony/skeleton:"6.4.*" project
composer require webapp
mv -r project/* ../

# Чтобы вкл debug панель
APP_DEBUG=1

#
bin/console
bin/console make
bin/console make:controller
bin/console debug:router - список роутов
bin/console debug:match /default/1 - найти роут по урлу
bin/console make:entity - создать сущность
bin/console make:crud - создать crud
bin/console make:migration - создать миграцию, на разницу в entity и БД

bin/console doctrine:migrations:generate - создаст пустой файл миграции
bin/console doctrine:migrations:diff - создать миграцию, на разницу в entity и БД
bin/console doctrine:migrations:migrate - запустить миграции
bin/console doctrine:migrations:migrate -v
bin/console doctrine:migrations:migrate -vv
bin/console doctrine:migrations:migrate -vvv - режимы отладки выполнения запросов
bin/console d:m:m - сокращенно bin/console doctrine:migrations:migrate
bin/console doctrine:migrations:status
bin/console doctrine:migrations:execute 'DoctrineMigrations\Version20251022204154' --down - откатить миграцию

# авторизация
composer require symfony/security-bundle
composer require symfonycasts/verify-email-bundle
bin/console make:user
bin/console make:registration-form
bin/console make:controller Login

# пагинация
composer require knplabs/knp-paginator-bundle

# фикстуры
composer require --dev orm-fixtures
bin/console doctrine:fixtures:load - применить фикстуры

bin/console debug:container | grep ContentWatchApi