<?php

$title = "Новая заявка:";
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$token = "6182539161:AAHsYcyvLMkZVekFU3xR0H441N0cIHrLoXs";
$chat_id = "-861115225";
$arr = array(
   ''=> $title,
  'Имя заказчика: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  $message = 'Заявка отправлена!';
} else {
   $message = 'Ошибка. Попробуйте позже';
}
?>