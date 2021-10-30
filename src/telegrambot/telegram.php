<?php

/* https://api.telegram.org/bot1278769588:AAH61S9opD4WXDX6iYMmO06AR_rm1hh41tE/getUpdates, где, 1278769588:AAH61S9opD4WXDX6iYMmO06AR_rm1hh41tE - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "1278769588:AAH61S9opD4WXDX6iYMmO06AR_rm1hh41tE";
$chat_id = "-413988984";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>