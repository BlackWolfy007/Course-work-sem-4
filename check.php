<?php 
    print_r($_POST);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $error = '';

    if(trim($email)=='')
        $error = 'Incorrect email';
    else if (strlen(trim($phone))<6 && strlen(trim($phone))>=20)
        $error = 'Incorrect phone';
    print_r($email);
    print_r($phone);
    print_r($address);
    print_r($error);
?>