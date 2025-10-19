https://www.youtube.com/watch?v=TQGN81A_Fp4&list=PLxUDM49DgcpCD0m7sE-K7POzTHCRY-f0d&index=4

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