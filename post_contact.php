<?php
/**
 * Created by PhpStorm.
 * User: tdels
 * Date: 30-08-18
 * Time: 11:44
 */
require '_inc.php';

$errors = [];

$validator = new Validator($_POST);
$validator->check('name', 'required', 'Vous n\'avez pas entré votre nom');
$validator->check('firstname', 'required', 'Vous n\'avez pas entré votre prénom');
$validator->check('email', 'required', 'Vous n\'avez pas entré votre email');
$validator->check('email', 'email', 'Vous n\'avez pas entré un email valide');
$validator->check('msg', 'required', 'Vous n\'avez pas entré votre message');
$errors = $validator->errors();

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location:contact.php');
} else {
    $_SESSION['success'] = 1;
    $message = $_POST['msg'];
    $headers = 'FROM: thomasdelsupexhe.be';
    mail('tdelsupexhe@gmail.com', 'Formulaire de contact', $message, $headers);
    header('Location:contact.php');
}



