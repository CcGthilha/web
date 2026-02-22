<?php
// ประมวลผลก่อนแสดงผลหน้า
$_SESSION['student_id'] = $_SESSION['student_id'] ?? null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (checkLogin($username, $password)) {
        $unix_timestamp = time();
        $_SESSION['timestamp'] = $unix_timestamp;
        header('Location: /student');
        exit;
    } else {
        renderView('login', ['error' => 'อีเมลหรือรหัสผ่านไม่ถูกต้อง']);
    }
} else {
    renderView('login', ['title' => 'เข้าสู่ระบบ']);
}
