<?php

/**
 * @param $ar
 */

function debug($ar){
    echo '<pre style="height: 200px; overflow-y: scroll; font-size: .7rem; padding: .6rem; font-family: Consolas, Monospace; background-color: black; color: white;">';
    print_r($ar);
    echo '</pre>';
}


function Abort404()
{
    header('HTTP/1.1 404 Not Found');
    header('Location: ./404.php');
}


/**
 * @param $key
 * @param string $method
 * @return string
 */

function cleanXSS($key): string{
    return trim(strip_tags($_POST[$key]));
}

/**
 * @param $errors
 * @param $key
 */

function viewError($errors, $key){
    echo '<span class="error">';
    if(!empty($errors[$key])){
        echo $errors[$key];
    }
    echo '</span>';
}

/**
 * @param $key
 */

function recuperationInputValue($key){
    if(!empty($_POST[$key])){
        echo $_POST[$key];
    }
}

/**
 * @param $errors
 * @param $email
 * @param $key
 * @return mixed
 */

function emailValidation($errors,$email,$key)
{
    if(!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[$key] = 'Veuillez renseigner un email valide';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner un email';
    }
    return $errors;
}

/**
 * @param $errors
 * @param $value
 * @param $key
 * @param int $minLength
 * @param int $maxLength
 * @return mixed
 */

function textValidation($errors, $value, $key, $minLength = 3, $maxLength = 50)
{
    // validation
    if(!empty($value)) {
        if($minLength > 0 && mb_strlen($value) < $minLength){
            $errors[$key] = 'min '.$minLength.' caractères';
        }
        else if($maxLength > 0 && mb_strlen($value) > $maxLength){
            $errors[$key] = 'max '.$maxLength.' caractères';
        }
    }
    else {
        $errors[$key] = 'Veuillez renseigner ce champ';
    }
    return $errors;
}