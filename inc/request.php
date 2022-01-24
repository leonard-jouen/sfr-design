<?php

/**
 * @param $email
 * @param $message
 */

function insertMessage($email, $message){
    global $pdo;
    $sql = "INSERT INTO contact (email, message, created_at)
                VALUES (:email,:message,NOW())";
    $query = $pdo->prepare($sql);
    $query->bindValue(':email',$email,PDO::PARAM_STR);
    $query->bindValue(':message',$message,PDO::PARAM_STR);
    $query->execute();
}

/**
 * @param $email
 * @param $message
 * @return int
 */

function checkMessageExist($email, $message): int{
    global $pdo;
    $sql = "SELECT count(id) FROM contact WHERE email = :email AND message = :message";
    $query = $pdo->prepare($sql);
    $query->bindValue(':email',$email,PDO::PARAM_STR);
    $query->bindValue(':message',$message,PDO::PARAM_STR);
    $query->execute();
    return $query->fetchColumn();
}