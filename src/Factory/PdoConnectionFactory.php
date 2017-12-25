<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 24/12/2017
 * Time: 15:42
 */

declare(strict_types = 1);

namespace Application\Factory;

use Psr\Container\ContainerInterface;
use PDO;
use Application\Provider\DbConfigProvider;

class PdoConnectionFactory
{
    public function  __invoke(ContainerInterface $container) : PDO
    {
        /** @var DbConfigProvider $configProvider */
        $configProvider = $container->get(DbConfigProvider::class);
        $db = new PDO(
            "mysql:host={$configProvider->host()};dbname={$configProvider->name()}",
            $configProvider->user(),
            $configProvider->pass()
        );
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
}