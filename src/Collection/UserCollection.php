<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 24/12/2017
 * Time: 19:26
 */

declare(strict_types = 1);

namespace Application\Collection;

use Application\Entity\User;
use ArrayIterator;
use Iterator;
use IteratorIterator;
use Traversable;

class UserCollection extends IteratorIterator implements Iterator
{
    public function  __construct(User ...$users)
    {
        parent::__construct(new ArrayIterator($users));
    }

    public function current() : ?User
    {
        return parent::current();
    }
}