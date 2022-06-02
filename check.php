<?php 
    #print_r($_POST);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $orderId = mt_rand(100, 1000);
    $transportId = mt_rand(10000, 80000);
    $address = $_POST['address'];
    $status = array("Доставка на склад","Доставка на почтамат","Ожидает в пункте выдачи","Получено");
    $error = '';

    if(trim($email)=='')
        $error = 'Incorrect email';
    else if (strlen(trim($phone))<6 && strlen(trim($phone))>=20)
        $error = 'Incorrect phone';

    if ($error != ''){
        echo $error;
        exit;
    }


    #require('table.php');

    #print_r($email);
    #print_r($phone);
    #print_r($address);
    #print_r($error);
?>
<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/source/css/style.css">
    <meta charset="UTF-8">
    <title>Статус заказа</title>
</head>
<body>
    <div class="divTable">
    <!--
    <table class="table">
        <tr id="0">
            <th>Телефон</th>
            <th>Email</th>
            <th>ID Заказа</th>
            <th>ID Транспорта</th>
            <th>ID Почтомата</th>
            <th>Статус заказа</th>
        </tr>
        <tr id="1">
            <th>8-000-000-00-00</th>
            <th>example@exam.ple</th>
            <th>0</th>
            <th>0</th>
            <th>0</th>
            <th name="status">Получен</th>
        </tr>
    </table>
    -->
        <div class="divRow" id="0">
            <div class="divCell" id="0"><p>Телефон</p></div>
            <div class="divCell" id="1"><p>Email</p></div>
            <div class="divCell" id="2"><p>ID Заказа</p></div>
            <div class="divCell" id="3"><p>Сумма</p></div>
            <div class="divCell" id="4"><p>ID Транспорта</p></div>
            <div class="divCell" id="5"><p>ID Почтомата</p></div>
            <div class="divCell" id="6"><p>Статус заказа</p></div>
        </div>
        <div class="divRow" id="1">
            <div class="divCell" id="0"><p><?php echo $phone?></p></div>
            <div class="divCell" id="1"><p><?php echo $email?></p></div>
            <div class="divCell" id="2"><p><?php echo $orderId?></p></div>
            <div class="divCell" id="3"><p>480</p></div>
            <div class="divCell" id="4"><p><?php echo $transportId?></p></div>
            <div class="divCell" id="5"><p><?php echo $address?></p></div>
            <div class="divCell" id="6"><p>Статус заказа</p></div>
        </div>
    
    </div>
    <div class="map">
        <img src="/source/img/map.png">
    </div>
</body>
</html>