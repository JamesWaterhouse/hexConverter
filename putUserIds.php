<?php 

function putUserIds(PDO $db, Array $users) {

    foreach ($users as $user) {
        $query = $db->prepare(
            "UPDATE `users` SET `id` = :hexId WHERE `id` = :id "
        );
        $query -> bindParam(':hexId', $user['hexId']);
        $query -> bindParam(':id', $user['id']);
        $query->execute();
    }
    return true;
}