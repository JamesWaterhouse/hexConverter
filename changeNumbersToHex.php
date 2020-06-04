<?php

function changeNumberstoHex(Array $users) : array {

    foreach ($users as $key=>$user) {

        $users[$key]['id'] = dechex($user['id']);
    
    }
    return $users;
}