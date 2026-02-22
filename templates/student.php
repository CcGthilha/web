<html>

<head></head>

<body>
    <?php include 'headerstd.php' ?>
    <main>
        <h1><?= $data['title'] ?> <?= $data['result']->fetch_assoc()['first_name'] ?></h1>
    </main>
    <?php include 'footer.php' ?>
</body>

</html>