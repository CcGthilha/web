<?php
$result = getStudents();
renderView('students', [
    'title' => 'ข้อมูลนักเรียน',
    'result' => $result
]);