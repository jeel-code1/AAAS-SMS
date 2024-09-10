<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting</title>
    <link rel="stylesheet" href="./styling/style.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <!-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> -->

</head>
<body class="dark:bg-black bg-neutral-300">
<nav class="md:flex items-center justify-between text-white m-4 sticky" x-data="{open:false,toogle(){
        this.open = !this.open
    }}">
            <div class="p-2 rounded-xl text-2xl flex items-center space-x-1 dark:bg-aaron-dark bg-white text-gray-400 shadow-lg justify-between" >
                <div class="flex justify-between">
                    <!-- <button class="md:hidden" >toogle</button> -->
                    <h3 class="text-2xl font-semibold text-black dark:text-white" >Voting</h3>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="size-6 text-white md:hidden"
                 width="14" height="14" x-on:click="toogle()">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
            <!-- navbar -->
            <div class="p-2 rounded-xl text-2xl flex items-center space-x-1" >
                <div class="flex rounded-xl items-center space-x mr-3 p-2 px-4 bg-white dark:bg-aaron-dark text-gray-400 shadow-lg" x-show="window.innerWidth >= 768 || open" x-collapse.duration.1000ms>
                    <ul class=" block md:flex items-center space-x-4 ">
                        <a href="#" class="hover:text-black dark:hover:text-white"><li>Dashboard</li></a>
                        <a href="#" class="hover:text-black dark:hover:text-white text-black dark:text-white"><li>Voting</li></a>
                        <a href="#" class="hover:text-black dark:hover:text-white"><li>Result</li></a>
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
        <script>
            import Alpine from 'alpinejs'
            import collapse from '@alpinejs/collapse'
            Alpine.plugin(collapse)
        </script>
</body>
</html>