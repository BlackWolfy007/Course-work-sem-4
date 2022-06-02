<?php 
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
?>
<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/source/css/style.css">
    <script src="/source/js/timer.js" defer></script>
    <meta charset="UTF-8">
    <title>Статус заказа</title>
</head>
<body>
    <div class="divTable">
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
            <div class="divCell" id="5"><p id="postOfficeID"><?php echo $address?></p></div>
            <div class="divCell" id="6"><p id="status">Доставка на склад</p></div>
        </div>
    
    </div>
    <div class="info">
        <p id="infoText">Расчетное время доставки заказа:</p>
        <div class="time">
            <p id="timer">timer</p>
        </div>
    </div>
    <div class="map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Adedb1ecef24f72136956c4ca7f4cfbdbada95b7e27df3a54d92fd936197591e4&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe>
    </div>
    
</body>
</html>