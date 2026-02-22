<?php include 'header.php' ?>

<main class="flex items-center justify-center min-h-[80vh] bg-white">
    <div class="text-center px-4">
        <h1 class="text-5xl font-bold text-gray-800 mb-4">
            <?= $data['title'] ?>
        </h1>
        
        <p class="text-gray-500 text-lg mb-8">
            ยินดีต้อนรับเข้าสู่ระบบลงทะเบียนเรียน
        </p>

        <a href="/login" class="inline-block px-10 py-3 bg-gray-900 text-white rounded-md hover:bg-gray-700 transition">
            เข้าสู่ระบบ
        </a>
    </div>
</main>

<?php include 'footer.php' ?>