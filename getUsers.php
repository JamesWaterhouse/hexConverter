<?php

function getUsers(PDO $db) : Array {

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

    $query = $db->prepare(
        'SELECT `id`, `email`
            FROM `users`'
    );

    $query->execute();
    return $query->fetchAll();

}