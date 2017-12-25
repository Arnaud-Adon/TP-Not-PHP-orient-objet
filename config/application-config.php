<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 15/12/2017
 * Time: 12:00
 */

use Application\Router\Router;
use Application\Factory\RouterFactory;
use Application\Controller\IndexController;
use Application\Factory\DateTimeImmutableFactory;
use Application\Router\ParseUriHelper;
use Application\Factory\ParseUriHelperFactory;
use Application\Factory\IndexControllerFactory;
use Application\Repository\CommunityRepository;
use Application\Factory\PdoConnectionFactory;
use Application\Provider\DbConfigProvider;
use Application\Factory\DbConfigProviderFactory;
use Application\Factory\CommunityRepositoryFactory;

return [
    'factories' => [
        Router::class => RouterFactory::class,
        DateTimeInterface::class => DateTimeImmutableFactory::class,
        ParseUriHelper::class => ParseUriHelperFactory::class,
        IndexController::class => IndexControllerFactory::class,
        CommunityRepository::class => CommunityRepositoryFactory::class,
        PDO::class => PdoConnectionFactory::class,
        DbConfigProvider::class => DbConfigProviderFactory::class,
    ],
];