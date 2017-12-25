<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 24/12/2017
 * Time: 13:47
 */

declare(strict_types = 1);

namespace Application\Collection;

use Application\Entity\Community;
use ArrayIterator;
use Iterator;
use IteratorIterator;
use Traversable;


class CommunityCollection extends IteratorIterator implements Iterator
{
    public function  __construct(Community ...$communities)
    {
        parent::__construct(new ArrayIterator($communities));
    }

    public function current() : ?Community
    {
        return parent::current();
    }
}