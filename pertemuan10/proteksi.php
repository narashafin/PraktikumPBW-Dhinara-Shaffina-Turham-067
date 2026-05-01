<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php?message=".urlencode("usernameee salaahhhh....."));
    exit;
}
?>