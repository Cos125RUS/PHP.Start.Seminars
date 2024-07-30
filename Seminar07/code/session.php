<?php
session_start();
$_SESSION['message'] = 'Пользователь удален';

echo $_SESSION['message'];
echo "<br>";
echo session_id();
//session_destroy();
