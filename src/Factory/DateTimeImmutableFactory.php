<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 15/12/2017
 * Time: 12:42
 */

declare(strict_types = 1);

namespace Application\Factory;

use DateTimeImmutable;

final class DateTimeImmutableFactory
{
    public function __invoke() : DateTimeImmutable
    {
        return new DateTimeImmutable();
    }

}