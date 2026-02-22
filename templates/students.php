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
                <?= $row->student_id ?>
                <?= $row->first_name ?>
                <?= $row->last_name ?>
                <?= $row->phone_number ?>
                <?= $row->email ?>
                <a href="/students_chgpwd?id=<?= $row->student_id ?>">เปลี่ยนรหัสผ่าน</a>
                <br>
        <?php
            }
        }
        ?>
    </main>
    <?php include 'footer.php' ?>
</body>

</html>