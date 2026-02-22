<?php
// แก้ไขใน reg/routes/courses.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_id = $_SESSION['student_id'] ?? 0;
    $course_id = $_POST['id'] ?? 0;

    // 1. ตรวจสอบว่าเคยลงทะเบียนไปแล้วหรือยัง
    if (isAlreadyEnrolled($student_id, $course_id)) {
        echo "<script>alert('คุณได้ลงทะเบียนวิชานี้ไปแล้ว'); window.location='/courses';</script>";
        exit;
    }

    // 2. ถ้ายังไม่เคยลง ให้ทำการ Insert
    $course = [
        'student_id' => $student_id,
        'id' => $course_id,
    ];

    if (insertEnrollment($course)) {
        header('Location: /students'); // ลงทะเบียนเสร็จให้ไปหน้า "ข้อมูลนักเรียน" เพื่อดูผล
        exit;
    } else {
        echo "Error enrolling in course.";
    }
}