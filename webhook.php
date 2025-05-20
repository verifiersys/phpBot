<?php
$input = json_decode(file_get_contents('php://input'), true);

$chat_id = $input['message']['chat']['id'] ?? '';
$message = "What do you want";

$token = getenv('BOT_TOKEN');
$url = "https://api.telegram.org/bot$token/sendMessage";

file_get_contents($url . "?chat_id=$chat_id&text=" . urlencode($message));
?>
