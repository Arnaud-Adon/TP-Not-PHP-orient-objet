<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 24/12/2017
 * Time: 15:32
 */

declare(strict_types = 1);

namespace Application\Factory;

use Application\Repository\CommunityRepository;
use Psr\Container\ContainerInterface;
use Application\Factory\PdoConnectionFactory;
use PDO;

final class CommunityRepositoryFactory
{
   public function __invoke(ContainerInterface $container): CommunityRepository
   {
       return new CommunityRepository($container->get(PDO::class));
   }
}