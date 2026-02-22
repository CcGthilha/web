<html>

<head></head>

<body>
    <?php include 'headerstd.php' ?>
    <main>
        <?php
        $row = $data['result']->fetch_assoc(); // ดึงข้อมูลออกมาเก็บในตัวแปร $row
        ?>
        <h1><?= $data['title'] ?> <?= $row ? $row['first_name'] : 'ไม่พบชื่อ' ?> <?= $row ? $row['last_name'] : 'ไม่พบนามสกุล' ?></h1>
    </main>
    <?php include 'footer.php' ?>
</body>

</html>