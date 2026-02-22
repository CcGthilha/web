<?php
// ประมวลผลก่อนแสดงผลหน้า
renderView('student', ['title' => 'สวัสดีจ้า', 'result' => getStudents()]);