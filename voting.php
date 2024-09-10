<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting</title>
    <link rel="stylesheet" href="./styling/style.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="dark:bg-black bg-neutral-300">
<nav class="md:flex items-center justify-between text-white m-4 sticky" x-data="{open:false,toolgle(){
    this.open = !this.open
}}">
            <div class="p-2 rounded-xl text-2xl flex items-center space-x-1 dark:bg-aaron-dark bg-white text-gray-400 shadow-lg" >
                <div @x-on:click="toolgle">
                    <h3 class="text-2xl font-semibold text-black dark:text-white" >Voting</h3>
                </div>
            </div>
            <!-- navbar -->
            <div class="p-2 rounded-xl text-2xl flex items-center space-x-1">
                <div class="flex rounded-xl items-center space-x mr-3 p-2 px-4 bg-white dark:bg-aaron-dark text-gray-400 shadow-lg" >
                    <ul class="md:flex items-center space-x-4">
                        <a href="#" class="hover:text-black dark:hover:text-white"><li>Dashboard</li></a>
                        <a href="#" class="hover:text-black dark:hover:text-white text-black dark:text-white"><li>Voting</li></a>
                        <a href="#" class="hover:text-black dark:hover:text-white"><li>Result</li></a>
                        <!-- <a href="#"><li>points</li></a> -->
                        <a href="#" class="hover:text-black dark:hover:text-white"><li>Library</li></a>
                        <a href="#" class="hover:text-black dark:hover:text-white"><li>Assignments</li></a>
                    </ul>
                </div>
                <div class=" hidden md:flex justify-between items-center space-x-1 p-2 rounded-xl" >
                    <div>
                        <img class="rounded-full w-9 h-9 border-1 border-white" src="Assets/logo.png" alt="dp">
                    </div>
                    <div>
                        <h3 class="text-2xl dark:text-blue-400 text-blue-500 font-semibold">Arusha <span class="dark:text-yellow-200 text-yellow-500">Science</span></h3>
                    </div>
                </div>
            </div>
        </nav>
</body>
</html>