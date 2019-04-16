<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\User;
use Request;
class UsersController extends BaseController
{
    
    function getAllUsers(){
        $objUser = new User();
        $data = $objUser->get()->toArray();
        return $data;
    }
}
