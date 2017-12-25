<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 24/12/2017
 * Time: 16:03
 */

declare(strict_types = 1);

namespace Application\Factory;

use Application\Provider\DbConfigProvider;
use Application\Provider\EnvDbConfigProvider;


final class DbConfigProviderFactory
{
    public function __invoke() : DbConfigProvider
    {
        return new EnvDbConfigProvider();
    }
}