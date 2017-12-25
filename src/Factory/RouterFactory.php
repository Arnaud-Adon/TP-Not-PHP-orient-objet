<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 15/12/2017
 * Time: 12:21
 */

declare(strict_types = 1);

namespace Application\Factory;

use Application\Router\ParseUriHelper;
use Application\Router\Router;
use Psr\Container\ContainerInterface;
use DateTimeInterface;


final class RouterFactory
{
    public function __invoke(ContainerInterface $container) : Router
    {
        return new Router($container->get(ParseUriHelper::class), $container->get(DateTimeInterface::class));
    }
}