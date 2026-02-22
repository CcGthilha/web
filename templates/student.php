<?php include 'headerstd.php' ?>

<main class="flex items-center justify-center min-h-[70vh] bg-white">
    <div class="text-center px-4">
        <?php
        $row = $data['result']->fetch_assoc();
        ?>
        
        <h1 class="text-4xl font-bold text-gray-800 mb-4">
            <?= $data['title'] ?>
        </h1>
        
        <div class="text-2xl text-gray-600">
            <span class="text-indigo-600 font-medium">
                <?= $row ? $row['first_name'] : 'ไม่พบชื่อ' ?>
            </span> 
            <?= $row ? $row['last_name'] : 'ไม่พบนามสกุล' ?>
        </div>

        <div class="w-16 h-1 bg-indigo-500 mx-auto mt-6 rounded-full"></div>
    </div>
</main>

<?php include 'footer.php' ?>