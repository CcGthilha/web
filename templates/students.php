<html>

<head></head>

<body>
    <?php include 'headerstd.php' ?>
    <main>
        <h1><?= $data['title'] ?></h1>
        <?php
        if ($data['result'] != []) {
            while ($row = $data['result']->fetch_object()) {
        ?>
                <?= $row->first_name ?>
                <?= $row->last_name ?>
                <?= $row->date_of_birth ?>
                <?= $row->phone_number ?>
                <a href="/students_chgpwd?id=<?= $row->student_id ?>">เปลี่ยนรหัสผ่าน</a>
                <br>
        <?php
            }
        }
        ?>
        <h1>วิชาที่ลงทะเบียนเรียน</h1>
        <?php
        if ($data['result2'] != []) {
            while ($row = $data['result2']->fetch_object()) {
        ?>
                <?= $row->course_code ?>
                <?= $row->course_name ?>
                <?= $row->instructor ?>
                <a href="/courses-delete?id=<?= $row->enrollment_id ?>" onclick="return confirmSubmission()">ถอนรายวิชา</a>
                <br>
        <?php
            }
        }
        ?>
    </main>
    <?php include 'footer.php' ?>
</body>
<script>
    function confirmSubmission() {
        return confirm("ต้องการถอนรายวิชาจริงหรือไม่ ?");
    }
</script>

</html>