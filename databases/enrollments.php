<?php
// reg/databases/enrollments.php
function getEnrollments(): mysqli_result|bool
{
    global $conn;
    $sql = 'select e.enrollment_id, c.course_name, c.course_code, c.instructor 
            from enrollment e 
            join courses c on e.course_id = c.course_id 
            where e.student_id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $_SESSION['student_id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $conn->close();
    return $result;
}

function insertEnrollment($course): bool
{
    global $conn;
    $sql = 'insert into enrollment (student_id, course_id) VALUES (?,?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ii', $_SESSION['student_id'], $course['id']);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        return true;
    } else {
        return false;
    }
}
// เพิ่มใน reg/databases/enrollments.php
function isAlreadyEnrolled(int $student_id, int $course_id): bool
{
    global $conn;
    $sql = 'select * from enrollment where student_id = ? and course_id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ii', $student_id, $course_id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->num_rows > 0;
}

function deleteEnrollmentById(int $id): bool
{
    global $conn;
    $sql = 'delete from enrollment where enrollment_id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    return $stmt->affected_rows > 0;
}