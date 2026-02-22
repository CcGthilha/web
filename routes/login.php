<?php
// ประมวลผลก่อนแสดงผลหน้า
$_SESSION['student_id'] = $_SESSION['student_id'] ?? null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = checkLogin($username, $password); // เรียกใช้ฟังก์ชันที่แก้ใหม่
    if ($user) {
        $_SESSION['timestamp'] = time();
        $_SESSION['student_id'] = $user['student_id']; // บันทึก ID ลง Session ตรงนี้
        header('Location: /student');
        exit;
    } else {
        renderView('login', ['error' => 'อีเมลหรือรหัสผ่านไม่ถูกต้อง']);
    }

} else {
    renderView('login', ['title' => 'เข้าสู่ระบบ']);
}
