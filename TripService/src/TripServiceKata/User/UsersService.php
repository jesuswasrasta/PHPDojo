<?php
/**
 * Created by PhpStorm.
 * User: san
 * Date: 24/03/2019
 * Time: 16:58
 */

namespace TripServiceKata\User;


class UsersService implements IUsersService
{
    public function getLoggedUser(): User
    {
        return UserSession::getInstance()->getLoggedUser();
    }
}