<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">
    <header class="bg-indigo-600 text-white shadow-lg">
        <div class="container mx-auto px-6 py-4 flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center space-x-3 mb-4 md:mb-0">
                <div class="bg-white p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d=" civic-cap-icon-path-here... 12 14l9-5-9-5-9 5 9 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422A12.083 12.083 0 0112 21.5a12.083 12.083 0 01-6.16-10.922L12 14z" />
                    </svg>
                </div>
                <h1 class="text-2xl font-bold tracking-wide">ระบบลงทะเบียนเรียน</h1>
            </div>
            
            <nav class="flex flex-wrap justify-center gap-2 md:gap-4">
                <a href="/student" class="px-4 py-2 rounded-md hover:bg-indigo-500 transition duration-300">หน้าแรก</a>
                <a href="/students" class="px-4 py-2 rounded-md hover:bg-indigo-500 transition duration-300">ข้อมูลนักเรียน</a>
                <a href="/courses" class="px-4 py-2 rounded-md hover:bg-indigo-500 transition duration-300">รายวิชา</a>
                <a href="/logout" class="ml-2 px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition duration-300 shadow-sm">ออกจากระบบ</a>
            </nav>
        </div>
    </header>