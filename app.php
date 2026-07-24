<?php
// app.php
session_start();
require_once 'db.php';
require_once 'auth.php';

$page = $_GET['page'] ?? 'home';

if ($page === 'login') {
    echo "<h1>Login Page</h1>";
} elseif ($page === 'register') {
    echo "<h1>Register Page (7 Ranks System & AI Mini Check)</h1>";
} elseif ($page === 'middleman') {
    echo "<h1>Middleman & APK Secure Zone</h1>";
} else {
    echo "<h1>Unity Studio Core App</h1>";
}
?>
