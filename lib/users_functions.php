<?php

/***
 * Recuperation des données
 */
function getUser(){

    $users = json_decode(file_get_contents(filename: __DIR__ ."/data_base.json"), true);

    return $users;
}

/**
 * Retourne un utilisateur
 */
function getUserId($id){

    $users = getUser();

    foreach ($users as $user) {
        
        if ($user['id'] == $id) {
            
            return $user;
        }
    }
}

/**
 * MODIFIER LES INFORMATIONS D'UN CONTACT
 */
function updateUser($data, $id){
    $updateUser = [];
    $users = getUser();

    foreach ($users as $key => $user) {
        
        if ($user["id"] == $id) {
            
            $users[$key] = $updateUser = array_merge($user, $data);
        }
    }

    file_put_contents("lib/data_base.json", json_encode($users, JSON_PRETTY_PRINT));

    return $updateUser;
}

/***
 * EFFACER UN CONTACT
 */
function deleteUser($id){

    $users = getUser();

    foreach ($users as $key => $user) {
        
        if ($user['id'] == $id) {
            
            array_splice($users, $key, 1);
        }
    }

    file_put_contents("lib/data_base.json", json_encode($users, JSON_PRETTY_PRINT));
}

/***
 * CREER UN NOUVEAU CONTACT
 */
function createUser($data){
    $users = getUser();
    $data['id'] = rand(1, 1000);
    
    $users[] = $data;

    file_put_contents("lib/data_base.json", json_encode($users, JSON_PRETTY_PRINT));

    return $data;

}
