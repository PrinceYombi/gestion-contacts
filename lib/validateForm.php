<?php

    if (!$user['nom']) {
        $isValid = false;
        $errors['nom'] = "Votre nom est requis svp";
    }
    if (!$user['prenom']) {
        $isValid = false;
        $errors['prenom'] = "Votre prenom est requis svp";
    }
    if (!$user['email'] && !filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        $errors['email'] = "Votre email est incorrect";
    }
    if (!$user['telephone'] && !filter_var($user['telephone'], FILTER_VALIDATE_INT)) {
        $isValid = false;
        $errors['telephone'] = "Votre numeror de telephone est requis svp";
    }