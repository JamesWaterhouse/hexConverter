<?php

require './db.php';
require './putUserIds.php';
require './getUsers.php';
require './addHexToUsers.php';

$users = getUsers($db);

$users = addHexToUsers($users);

putUserIds($db, $users);
