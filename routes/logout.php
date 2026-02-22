<?php
session_start();

$_SESSION = array(); // ล้างข้อมูล session
session_destroy();   // ทำลาย session

header("Location: /logout");

renderView('logout', [
    'title' => 'ยินดีต้อนรับ'
]);

exit();