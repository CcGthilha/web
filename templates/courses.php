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
                <br>
        <?php
            }
        }
        ?>
    <?php include 'footer.php' ?>
</body>

</html>