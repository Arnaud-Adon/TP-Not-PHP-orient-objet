<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 15/12/2017
 * Time: 10:59
 */

declare(strict_types = 1);

namespace Application\Entity;

use Application\Entity\Meeting;
use Application\Entity\User;

final class Attendee
{
    private $meeting_id;

    private $user_id;

    public function __construct(Meeting $meeting, User $user)
    {
        $this->meeting_id = $meeting->getId();
        $this->user_id = $user->getId();
    }


}