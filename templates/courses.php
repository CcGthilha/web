<html>

<head></head>

<body>
    <?php include 'headerstd.php' ?>
    <main>
        <h1><?= $data['title'] ?></h1>
    </main>
    <?php
    if ($data['result'] != []) {
        while ($row = $data['result']->fetch_object()) {
    ?>
            <?= $row->course_id ?>
            <?= $row->course_name ?>
            <?= $row->course_code ?>
            <?= $row->instructor ?>
            <form action="courses-insert" method="post">
                <input type="hidden" name="id" value="<?= $row->course_id ?>">
                <button type="submit" onclick="return confirmSubmission()">ลงทะเบียน</button>
            </form>
            <br>
    <?php
        }
    }
    ?>
    <?php include 'footer.php' ?>
</body>
<script>
    function confirmSubmission() {
        return confirm("ต้องการลงทะเบียนรายวิชาจริงหรือไม่ ?");
    }
</script>

</html>