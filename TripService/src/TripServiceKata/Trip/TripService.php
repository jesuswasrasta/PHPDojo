<?php

namespace TripServiceKata\Trip;

use TripServiceKata\Exception\UserNotLoggedInException;
use TripServiceKata\User\IUsersService;
use TripServiceKata\User\User;

class TripService
{
    private $usersService;

    /**
     * TripService constructor.
     * @param IUsersService $usersService
     */
    public function __construct(IUsersService $usersService)
    {
         $this->usersService = $usersService;
    }

    public function getTripsByUser(User $user) {
        $tripList = array();
        $loggedUser = $this->usersService->getLoggedUser();
        $isFriend = false;
        if ($loggedUser != null) {
            foreach ($user->getFriends() as $friend) {
                if ($friend == $loggedUser) {
                    $isFriend = true;
                    break;
                }
            }
            if ($isFriend) {
                $tripList = TripDAO::findTripsByUser($user);
            }
            return $tripList;
        } else {
            throw new UserNotLoggedInException();
        }
    }
}
