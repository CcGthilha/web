<?php include 'header.php' ?>
<main class="container mx-auto px-6 py-20 flex justify-center">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">เข้าสู่ระบบ</h1>
        
        <?php if (isset($data['error'])): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <?= $data['error'] ?>
            </div>
        <?php endif; ?>

        <form action="login" method="post" class="space-y-4">
            <div>
                <label class="block text-gray-700 mb-2">อีเมลผู้ใช้</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" placeholder="example@mail.com" required>
            </div>
            <div>
                <label class="block text-gray-700 mb-2">รหัสผ่าน</label>
                <input type="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" placeholder="••••••••" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                เข้าสู่ระบบ
            </button>
        </form>
    </div>
</main>
<?php include 'footer.php' ?>