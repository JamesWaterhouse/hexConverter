<?php

function addHexToUsers(Array $users) : array {

    foreach ($users as $key=>$user) {

        $users[$key]['hexId'] = dechex($user['id']);
    
    }

    return $users;
}