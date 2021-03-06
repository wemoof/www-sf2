<?php

namespace WEMOOF\BackendBundle\Repository;

use Doctrine\Common\Collections\Collection;
use WEMOOF\BackendBundle\Entity\Event;
use WEMOOF\BackendBundle\Entity\User;

interface TalkRepositoryInterface
{
    /**
     * @param Event $event
     * @return \PhpOption\Option
     */
    function getTalksForEvent(Event $event);

    /**
     * @param Event $event
     * @return mixed
     */
    function getSpotlightsForEvent(Event $event);

    /**
     * @param User $user
     * @return \PhpOption\Option
     */
    function getTalksForUser(User $user);

    /**
     * @param int $id
     * @return \PhpOption\Option
     */
    function getTalk($id);

    /**
     * @return Collection
     */
    function getTalks();
}
