<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 15/12/2017
 * Time: 10:13
 */

declare(strict_types = 1);

namespace Application\Entity;

use Application\Entity\User;
use Application\Entity\Meeting;


final class Organizer
{
    /**
     * @var int
     */
    private $meeting_id;

    /**
     * @var int
     */
    private $user_id;

    /**
     * Organizer constructor.
     * @param \Application\Entity\Meeting $meeting
     * @param \Application\Entity\User $user
     */
    public function __construct(Meeting $meeting, User $user)
    {
        $this->meeting_id = $meeting->getId();
        $this->user_id = $user->getId();
    }

    public function delete() : void
    {

    }
}