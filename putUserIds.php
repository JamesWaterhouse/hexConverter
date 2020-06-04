<?php 

function putUserIds(PDO $db, Array $users) {

    foreach ($users as $user) {
        $query = $db->prepare(
            "UPDATE `users` SET `id` = :id WHERE `email` = :email"
        );
        $query -> bindParam(':id', $user['id']);
        $query -> bindParam(':email', $user['email']);
        $query->execute();
    }
    return true;
}