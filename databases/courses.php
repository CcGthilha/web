<?php
// ฟังก์ชันสำหรับดึงข้อมูลนักเรียนจากฐานข้อมูล
function getCourses(): mysqli_result|bool
{
    global $conn;
    $sql = 'select * from courses';
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}


