<?php

function sanitizeFormString($inputText)
{
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText); // replace each single space with empty string
    $inputText = ucfirst(strtolower($inputText)); // lower all and upper the first char
    return $inputText;
}

function sanitizeFormUsername($inputText)
{
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText); // replace each single space with empty string
    return $inputText;
}

function sanitizeFormPassword($inputText)
{
    $inputText = strip_tags($inputText);
    return $inputText;
}

if (isset($_POST['registerButton'])) {
    // echo "register button was pressed";
    $username = sanitizeFormUsername($_POST['username']);
    $firstName = sanitizeFormString($_POST['firstName']);
    $lastName = sanitizeFormString($_POST['lastName']);
    $email = sanitizeFormString($_POST['email']);
    $email2 = sanitizeFormString($_POST['email2']);
    $password = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormPassword($_POST['password2']);

    $wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);
    if($wasSuccessful) {
        header("Location: index.php");
    }
}
