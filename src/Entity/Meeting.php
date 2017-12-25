<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 15/12/2017
 * Time: 09:53
 */

declare(strict_types = 1);

namespace Application\Entity;

use DateTime;

final class Meeting
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $startDate;

    /**
     * @var string
     */
    private $endDate;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $community_id;


    public function __construct(string $title, string $description, string $startDate, string $endDate, string $community_id)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->title = $title;
        $this->description = $description;
        $this->community_id = $community_id;
    }

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public  function getStartDate() : string
    {
        return $this->startDate;
    }

    /**
     * @return string
     */
    public function  getEndDate() : string
    {
        return $this->endDate;
    }

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getCommunityId() : string
    {
        return $this->community_id;
    }

}