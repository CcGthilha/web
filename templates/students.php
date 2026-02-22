<?php include 'headerstd.php' ?>
<main class="container mx-auto px-6 py-10">
    <section class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm mb-10">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-4">โปรไฟล์นักเรียน</h1>
        <?php if ($data['result']): ?>
            <?php while ($row = $data['result']->fetch_object()): ?>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-8 text-gray-700">
                    <p><span class="font-semibold text-gray-900">ชื่อ-นามสกุล:</span> <?= $row->first_name ?> <?= $row->last_name ?></p>
                    <p><span class="font-semibold text-gray-900">เบอร์โทรศัพท์:</span> <?= $row->phone_number ?></p>
                    <p><span class="font-semibold text-gray-900">วันเกิด:</span> <?= $row->date_of_birth?></p>
                </div>
                <div class="mt-8 pt-4 border-t border-gray-50">
                    <a href="/students_chgpwd?id=<?= $row->student_id ?>" class="text-indigo-600 hover:text-indigo-800 font-medium text-sm transition">
                        &rarr; เปลี่ยนรหัสผ่าน
                    </a>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

    <section>
        <h2 class="text-xl font-bold text-gray-800 mb-6 px-2">วิชาที่ลงทะเบียนเรียน</h2>
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 font-semibold text-gray-700 text-sm">รหัสวิชา</th>
                        <th class="px-6 py-4 font-semibold text-gray-700 text-sm">ชื่อวิชา</th>
                        <th class="px-6 py-4 font-semibold text-gray-700 text-sm">ผู้สอน</th>
                        <th class="px-6 py-4 font-semibold text-gray-700 text-sm text-center">การจัดการ</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php if ($data['result2']): ?>
                        <?php while ($row = $data['result2']->fetch_object()): ?>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 text-sm text-gray-600"><?= $row->course_code ?></td>
                                <td class="px-6 py-4 font-medium text-gray-800"><?= $row->course_name ?></td>
                                <td class="px-6 py-4 text-sm text-gray-600"><?= $row->instructor ?></td>
                                <td class="px-6 py-4 text-center">
                                    <a href="/courses-delete?id=<?= $row->enrollment_id ?>" 
                                       onclick="return confirmSubmission()"
                                       class="text-red-500 hover:text-red-700 text-sm font-medium">ถอนรายวิชา</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </section>
</main>
<?php include 'footer.php' ?>