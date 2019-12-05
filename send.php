<?php
require 'header.php';
require "connect.php";
$body = ' '; 
$id = (int)json_decode($_COOKIE["id"], true);

$q = $db->query("SELECT * FROM product WHERE id=$id");
if($q):
    while($prod = $q->fetch_array(MYSQLI_ASSOC)):
        $body .= '<br> id товара: ' . $prod['id'];
        $body .= '<br> кубатура: ' . $prod['cub'];
        $body .= '<br> радиус передней шины: ' . $prod['radius_front'];
        $body .= '<br> радиус задней шины: ' . $prod['radius_back'];
        $body .= '<br> кол-во шипов: ' . $prod['spike'];
        $body .= '<br> цена товара: ' . $prod['price'];
    endwhile;
endif;

$fio = $_POST['fio'];
$phone = $_POST['phone'];
$city = $_POST['city'];

$fio = htmlspecialchars($fio);
$fio = urldecode($fio);
$fio = trim($fio);

$phone = htmlspecialchars($phone);
$phone = urldecode($phone);
$phone = trim($phone);

$city = htmlspecialchars($city);
$city = urldecode($city);
$city = trim($city);

if (mail("aolychkin@gmail.com", "Заказ с сайта", " ФИО: ".$fio."\r\n Номер телефона: ".$phone . "\r\n Город: ".$city . "\r\n" . $body,"From: aolychkin@gmail.com \r\n")):
     require "header.php";
     ?>
        <div class="success">
            <div class="inside">
                <h1>Заказ принят!</h1>
                <h3>Мы скоро свяжемся с Вами для его подтверждения.</h3>
                <a href='/'>Вернуться назад</a>
            </div>
        </div> 
     <?php
     require "footer.php";
else: 
    echo "<h1>при отправке сообщения возникли ошибки</h1>";
endif;

?>

<?php require 'footer.php'; ?>