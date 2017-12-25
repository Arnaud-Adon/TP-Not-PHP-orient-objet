<<<<<<< HEAD
<?php

if (!file_exists(__DIR__.'/vendor/autoload.php')) {
    throw new Exception('Exec composer install');
}
require __DIR__.'/vendor/autoload.php';

echo (new \Application\Application())->dispatch($_SERVER['REQUEST_URI']);

=======
<?php

if (!file_exists(__DIR__.'/vendor/autoload.php')) {
    throw new Exception('Exec composer install');
}
require __DIR__.'/vendor/autoload.php';

echo (new \Application\Application())->dispatch($_SERVER['REQUEST_URI']);

>>>>>>> 93581b0622f135979b57bb3d33a82a009fd86947
