<?php
/**
 * Created by PhpStorm.
 * User: san
 * Date: 24/03/2019
 * Time: 17:04
 */

namespace TripServiceKata\User;

interface IUsersService
{
    public function getLoggedUser(): User;
}