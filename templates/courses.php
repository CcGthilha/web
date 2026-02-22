<?php include 'headerstd.php' ?>
<main class="container mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold text-gray-800 mb-8"><?= $data['title'] ?></h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php if ($data['result']): ?>
            <?php while ($row = $data['result']->fetch_object()): ?>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="text-sm text-blue-600 font-bold mb-1"><?= $row->course_code ?></div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2"><?= $row->course_name ?></h3>
                    <p class="text-gray-600 mb-4">อาจารย์ผู้สอน: <?= $row->instructor ?></p>
                    
                    <form action="courses-insert" method="post">
                        <input type="hidden" name="id" value="<?= $row->course_id ?>">
                        <button type="submit" onclick="return confirmSubmission()" 
                                class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 transition font-medium">
                            ลงทะเบียนเรียน
                        </button>
                    </form>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>
<?php include 'footer.php' ?>