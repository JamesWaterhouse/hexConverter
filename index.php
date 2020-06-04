<?php

require './db.php';
require './putUserIds.php';
require './getUsers.php';
require './changeNumbersToHex.php';

$users = getUsers($db);

$users = changeNumberstoHex($users);

putUserIds($db, $users);
