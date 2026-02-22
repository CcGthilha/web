<?php
// ฟังก์ชันสำหรับดึงข้อมูลนักเรียนจากฐานข้อมูล
function getStudents(): mysqli_result|bool
{
    global $conn;
    $sql = 'select * from students where student_id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $_SESSION['student_id']);
    $stmt->execute();
    $result = $stmt->get_result();
    // ห้ามมี $conn->close(); ตรงนี้เด็ดขาด
    return $result;
}

function checkLogin(string $email, string $password): array|null
{
    global $conn;
    $sql = 'select * from students where email = ?'; // ดึงข้อมูลทั้งหมดมา
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            return $row; // คืนค่าเป็น array ของข้อมูลนักเรียน
        }
    }
    return null;
}

function getStudentById(int $id): mysqli_result|bool
{
    global $conn;
    $sql = 'select * from students where student_id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function updateStudentPassword(int $id, string $hashed_password): bool
{
    global $conn;
    $sql = 'update students set password = ? where student_id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $hashed_password, $id);
    $stmt->execute();
    return  $stmt->affected_rows > 0;
}