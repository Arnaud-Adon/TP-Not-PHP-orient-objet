<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 15/12/2017
 * Time: 12:12
 */

declare(strict_types = 1);

namespace Application\Controller;

use Application\Repository\CommunityRepository;

final class IndexController
{
    /**
     * @var CommunityRepository
     */
    private $communityRepository;

    public function __construct(CommunityRepository $communityRepository)
    {
        $this->communityRepository = $communityRepository;
    }

    public function indexAction() : string
    {
        $communities = $this->communityRepository->fetchAll();

        $meetings = $this->communityRepository->findMeetingCommunity();

        ob_start();
        include __DIR__.'/../../views/layout.phtml';
        return ob_get_clean();
    }
}