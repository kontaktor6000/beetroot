<?php

$validateUser = [];

foreach ($userData as $idUser => $user) {
    if (strlen(trim($user[2])) >= PASS_MIN_LENGTH) {
        $validateUser[] = $userData[$idUser];
    }
}
