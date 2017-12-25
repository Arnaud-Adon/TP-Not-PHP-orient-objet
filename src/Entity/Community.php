<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 15/12/2017
 * Time: 11:12
 */

declare(strict_types = 1);

namespace Application\Entity;


final class Community
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * Community constructor.
     * @param string $name
     */
    public function __construct(string $id,string $name)
    {
        $this->id =$id;
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
}