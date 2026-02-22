<?php include 'headerstd.php' ?>

<main class="container mx-auto px-6 py-12 flex justify-center">
    <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-sm w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">เปลี่ยนรหัสผ่าน</h1>

        <?php if (isset($data['result'])): 
            $row = $data['result']->fetch_object(); ?>
            
            <div class="mb-6 text-center p-3 bg-gray-50 rounded-md border border-gray-100">
                <span class="text-gray-500 text-sm block mb-1">บัญชีผู้ใช้</span>
                <span class="text-gray-800 font-medium"><?= $row->first_name ?> <?= $row->last_name ?></span>
            </div>

            <form action="students_chgpwd?id=<?= $row->student_id ?>" method="post" class="space-y-5">
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">รหัสผ่านใหม่</label>
                    <input type="password" name="password" id="password" 
                           class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition" 
                           placeholder="ระบุรหัสผ่านใหม่">
                </div>

                <div>
                    <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">ยืนยันรหัสผ่านใหม่</label>
                    <input type="password" name="confirm_password" id="confirm_password" 
                           class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition" 
                           placeholder="ระบุรหัสผ่านอีกครั้ง">
                </div>

                <div class="pt-2">
                    <button type="submit" 
                            class="w-full bg-indigo-600 text-white py-2.5 rounded-md font-medium hover:bg-indigo-700 transition duration-200 shadow-sm">
                        อัปเดตรหัสผ่าน
                    </button>
                    <a href="/students" class="block text-center text-sm text-gray-500 mt-4 hover:text-gray-700 transition">
                        ยกเลิกและกลับหน้าเดิม
                    </a>
                </div>
            </form>
        <?php endif; ?>
    </div>
</main>

<?php include 'footer.php' ?>