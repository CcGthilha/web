<?php
$result = getCourses();
renderView('courses', [
    'title' => 'รายวิชาที่เปิดให้ลงทะเบียน',
    'result' => $result
]);