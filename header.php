<!doctype html>
<html lang="ru" class="blur">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="static/font/montserrat.css">
    <link rel="stylesheet" href="style/main.css">
    <title>Document</title>
</head>
<body>

<div class="buyForm" id="buyForm">
    <div class="inside">
        <div class="close" onclick="document.getElementById('buyForm').style.display = 'none';">Закрыть</div>
        <form action="send.php" method="POST">
            <input type="text" name="fio" id="" class="form_text" placeholder="ФИО..." required>
            <input type="text" name="phone" id="" class="form_text" placeholder="Номер телефона..." required>
            <input type="text" name="city" id="" class="form_text" placeholder="Город..." required>
            <p>В течение 20 минут наш менеджер свяжется с Вами для подтвержения оплаты.</p>
            <button>Подтвердить</button> 
        </form>   
    </div>      
</div>