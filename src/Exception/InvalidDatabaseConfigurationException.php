<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 24/12/2017
 * Time: 16:12
 */

declare(strict_types = 1);

namespace Application\Exception;

use LogicException;

final class InvalidDatabaseConfigurationException
{
    public function __construct(string  $message ='La config bdd est invalide')
    {
        parent::__construct($message);
    }
}