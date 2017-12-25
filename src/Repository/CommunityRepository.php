<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 24/12/2017
 * Time: 13:05
 */

declare(strict_types = 1);

namespace Application\Repository;

use Application\Collection\MeetingCollection;
use Application\Entity\Community;
use Application\Collection\CommunityCollection;
use Application\Entity\Meeting;
use Application\Exception\CommunityNotFoundException;
use PDO;


final class CommunityRepository
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAll() : CommunityCollection
    {
        $result = $this->pdo->query('SELECT id, name FROM communities');
        $communities = [];
        while ($community = $result->fetch()){
            $communities[] = new Community($community['id'], $community['name']);
        }

        return new CommunityCollection(...$communities);
    }

    public function findMeetingCommunity() : MeetingCollection
    {
        $result = $this->pdo->query('SELECT id, title, description, DATE_FORMAT(date_start, "%d-%m-%y %h:%i:%s") AS dateStart, DATE_FORMAT(date_end, "%d-%m-%y %h:%i:%s") AS dateEnd, community_id  FROM meetings');
        $meetings = [];
        while ($meeting = $result->fetch()){
            $meetings[] = new Meeting($meeting['title'], $meeting['description'], $meeting['dateStart'], $meeting['dateEnd'], $meeting['community_id']);
        }

        return new MeetingCollection(...$meetings);
    }

    public function get(string $name): Community
    {
        $statement = $this->pdo->prepare('SELECT id, name FROM  WHERE name = :name');
        $statement->execute([':name' => $name]);
        $community = $statement->fetch();

        if (!$community){
            throw new  CommunityNotFoundException();
        }

        return new Community($community['name']);
    }


}