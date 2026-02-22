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
                <?= $row->phone_number ?>
                <a href="/students_chgpwd?id=<?= $row->student_id ?>">เปลี่ยนรหัสผ่าน</a>
                <br>
        <?php
            }
        }
        ?>
        <h1>วิชาที่ลงทะเบียนเรียน</h1>
        <!-- <?php
        if ($data['result2'] != []) {
            while ($row = $data['result2']->fetch_object()) {
        ?>                <?= $row->course_name ?>
                <br>
        <?php
            }        }
        ?> -->
    </main>
    <?php include 'footer.php' ?>
</body>

</html>