<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 15/12/2017
 * Time: 10:07
 */

declare(strict_types = 1);

namespace Application\Entity;

use Application\Entity\Meeting;


class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * User constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name=$name;
    }

    /**
     * @return int
     */
    public function getId : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public  function getName() : string
    {
        return $this->name;
    }

    /**
     * @return \Application\Entity\Meeting
     */
    public function create() : Meeting
    {
        return new Meeting();
    }
}