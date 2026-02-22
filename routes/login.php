<?php
// ประมวลผลก่อนแสดงผลหน้า
$_SESSION['student_id'] = $_SESSION['student_id'] ?? null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = checkLogin($username, $password); // รับค่า array ข้อมูลผู้ใช้มาเก็บไว้
    if ($user) {
        $unix_timestamp = time();
        $_SESSION['timestamp'] = $unix_timestamp;
        $_SESSION['student_id'] = $user['student_id']; // <--- เพิ่มบรรทัดนี้เพื่อเก็บ ID
        header('Location: /student');
        exit;
    } else {
        renderView('login', ['error' => 'อีเมลหรือรหัสผ่านไม่ถูกต้อง']);
    }
} else {
    renderView('login', ['title' => 'เข้าสู่ระบบ']);
}
