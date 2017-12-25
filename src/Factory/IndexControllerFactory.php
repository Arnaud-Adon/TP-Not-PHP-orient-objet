<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 23/12/2017
 * Time: 21:42
 */

declare(strict_types = 1);

namespace Application\Factory;

use Application\Controller\IndexController;
use Application\Repository\CommunityRepository;
use Psr\Container\ContainerInterface;

final class IndexControllerFactory
{
    public function __invoke(ContainerInterface $container) : IndexController
    {
        return new IndexController($container->get(CommunityRepository::class));
    }
}