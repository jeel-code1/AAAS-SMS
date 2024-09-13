<!DOCTYPE html>
<html lang="en" class="">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="./styling/style.css">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script     src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    </head>

</head>
<body class="bg-neutral-300 dark:bg-black dark:text-white text-black" >
    <div class="px-6">
        <nav class="flex items-center justify-between text-white mb-4 sticky">
            <div class="p-2 rounded-xl text-2xl flex items-center space-x-1 dark:bg-aaron-dark bg-white text-gray-400 shadow-lg" >
                <div>
                    <h3 class="text-2xl font-semibold text-black dark:text-white">Dashboard</h3>
                </div>
            </div>
            <!-- navbar -->
            <div class="p-2 rounded-xl text-2xl flex items-center space-x-1" >
                <div class="flex rounded-xl items-center space-x mr-3 p-2 px-4 bg-white dark:bg-aaron-dark text-gray-400 shadow-lg" >
                    <ul class="flex items-center space-x-4">
                        <a href="dashboard.php" class="hover:text-black dark:hover:text-white"><li>Dashboard</li></a>
                        <a href="voting.php" class="hover:text-black dark:hover:text-white"><li>Voting</li></a>
                        <a href="#" class="hover:text-black dark:hover:text-white"><li>Result</li></a>
                        <!-- <a href="#"><li>points</li></a> -->
                        <a href="#" class="hover:text-black dark:hover:text-white"><li>Library</li></a>
                        <a href="#" class="hover:text-black dark:hover:text-white"><li>Assignments</li></a>
                    </ul>
                </div>
                <div class="flex justify-between items-center space-x-1 p-2 rounded-xl" >
                    <div>
                        <img class="rounded-full w-9 h-9 border-1 border-white" src="Assets/logo.png" alt="dp">
                    </div>
                    <div>
                        <h3 class="text-2xl dark:text-blue-400 text-blue-500 font-semibold">Arusha <span class="dark:text-yellow-200 text-yellow-500">Science</span></h3>
                    </div>
                </div>
            </div>
        </nav>
        <div class="w-full mt-3 flex flex-1 space-x-5">
            <!-- card 1 for student info-->
            <div class="h-5 w-1/4">
                <div class="rounded-2xl p-3 dark:bg-aaron-dark bg-white shadow-lg hover:shadow-xl transition-shadow delay-100" >
                    <!-- profile picture -->
                    <div class="flex justify-between w-full p-3">
                        <img class="rounded-full border-1 border-white w-14 h-14" src="Assets/dp.jpg" alt="dp">
                        <div>
                            <p class="border-2 rounded-3xl p-1 border-emerald-300 text-emerald-300">Active</p>
                        </div>
                    </div>
                    <!-- username -->
                    <div class="pb-6">
                        <h3 class="text-3xl font-semibold dark:text-white text-slate-800">Aaron Victor</h3>
                    </div>
                    <!-- data -->
                    <div class="flex flex-col space-y-3 text-xl py-2 text-white">
                        <div class="flex justify-between">
                            <div class="dark:text-gray-200 text-gray-800">Class:</div>
                            <div>
                                <p class="font-bold dark:text-white text-stone-600 ">Form 5</p>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div class="dark:text-gray-200 text-gray-800">Points:</div>
                            <div class="font-bold dark:text-white text-stone-600">265 Pts</div>
                        </div>
                        <div class="flex justify-between">
                            <div class="dark:text-gray-200 text-gray-800">Class rank:</div>
                            <div class="font-bold dark:text-white text-stone-600">1 Out of 50</div>
                        </div>
                    </div>
                    <!-- buttons -->
                     <div class="py-3 flex items-center space-x-4 text-white">
                         <button class="dark:bg-zinc-700 bg-gray-400 px-2 py-1 rounded-3xl flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                            stroke-width="1.5" stroke="currentColor" class="size-6"
                            width="18" height="18">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                              </svg>
                            <div>
                                Points
                            </div>
                        </button>
                         <button class="dark:bg-zinc-700 bg-gray-400 px-2 py-1 rounded-3xl flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                            stroke-width="1.5" stroke="currentColor" class="size-6"
                            width="18" height="18">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                              </svg>
                              
                            <div>
                                Class
                            </div>
                        </button>
                         <button class="dark:bg-zinc-700 bg-gray-400 px-2 py-1 rounded-3xl flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                            stroke-width="1.5" stroke="currentColor" class="size-6"
                            width="18" height="18">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                              </svg>
                              
                            <div>Results</div>
                        </button>
                     </div>
                </div>
                <div class="py-2 flex items-center justify-between space-x-4 text-2xl font-bold text-gray-700 dark:text-white">
                    <p>Latest Assignments</p>
                    <button class="bg-white dark:bg-aaron-dark rounded-3xl px-2 flex items-center space-x-1 dark:text-white">
                        <p class="font-normal">filter</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                        stroke-width="1.5" stroke="currentColor" class="size-6 font-bold"
                        width="18" height="18">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                          </svg>
                          
                    </button>
                </div>
                <!-- assignments card -->
                <div class="grid  gap-4 grid-cols-1 h-full" >
                    <!--  assignment card1 -->
                      <a href="#">
                        <div class="dark:bg-zinc-800 bg-white h-40 w-full rounded-2xl p-3 shadow-md">
                              <div class="flex justify-between py-2">
                                  <div>
                                      <div class="border-2 rounded-3xl p-1 border-yellow-300 flex items-center space-x-1">
                                          <svg width="24" height="24" class="text-yellow-600">
                                              <circle cx="12" cy="12" r="10" fill="yellow" />
                                          </svg>
                                          <p class="text-yellow-300">
                                              Pending
                                          </p>
                                      </div>
                                  </div>
                                  <div>
                                      <p class="text-zinc-500 text-xl font-semibold">February 13 2024</p>
                                  </div>
                              </div>
                              <div class="font-bold text-xl mb-3 dark:text-white text-zinc-800">
                                  Physics
                              </div>
                              <div class="text-lg text-zinc-500  mb-5 flex justify-between">
                                  <p>Newtons laws of Motion</p>
                                  <p>Mr. Khalfan</p>
                              </div>
                            </div>
                      </a>
                    <!-- assignment card2 -->
                        <a href="#">
                            <div class="dark:bg-zinc-800 bg-white h-40 w-full rounded-2xl p-3 shadow-md">
                            <div class="flex justify-between py-2">
                                <div>
                                    <div class="border-2 rounded-3xl p-1 dark:border-green-800 border-green-500 flex items-center space-x-1">
                                        <svg width="24" height="24" >
                                            <circle cx="12" cy="12" r="10" fill="green" />
                                        </svg>
                                        <p class="text-green-500">
                                            Accepted
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-zinc-500 text-xl font-semibold">October 8 2024</p>
                                </div>
                            </div>
                            <div class="font-bold text-xl mb-3">
                                Computer Science
                            </div>
                            <div class="text-lg text-zinc-500 mb-5 flex justify-between">
                                <p>Data representation</p>
                                <p>Mr. Gilbert</p>
                            </div>
                        </div>
                    </a>
                        <div class="border-4 border-zinc-500 hover:border-zinc-400 transition-colors delay-75 p-3 rounded-3xl text-center text-2xl font-bold ">
                                <a href="#">View Assignments</a>
                        </div>
                </div>
            </div>

            <!-- card2 for analytics -->
            <div class="h-full w-3/4">
                <div class="h-5 w-full">
                    <div class="rounded-2xl p-4 dark:bg-aaron-dark bg-white shadow-xl" >
                        <!-- title -->
                        <div class="pb-6 flex items-center space-x-2">
                            <h3 class="text-3xl font-semibold">Points analytics</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                            stroke-width="1.5" stroke="currentColor" class="size-6 font-bold" 
                            width="24" height="24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                              </svg>
                        </div>
                        <!-- end of title -->
                         <!-- statistics summary -->
                        <div class="flex items-center space-x-[10%] text-xl py-2">
                            <div class="flex justify-between space-x-3">
                                <div class="dark:text-gray-200 text-gray-800 text-6xl font-bold">265</div>
                                <div class="text-zinc-500">
                                    <p class="">Overall Total</p>
                                    <p>points</p>
                                </div>
                            </div>
                            <div class="flex justify-between space-x-3">
                                <div class="dark:text-gray-200 text-gray-800 text-6xl font-bold">+15</div>
                                <div class="text-zinc-500">
                                    <p class="">Points</p>
                                    <p>gained this week</p>
                                </div>
                            </div>
                            <div class="flex justify-between space-x-3">
                                <div class="dark:text-gray-200 text-gray-800 text-6xl font-bold">+12%</div>
                                <div class="text-zinc-500">
                                    <p class="">Overall Total</p>
                                    <p>points increase</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-[40%] h-[40%] mx-auto my-3">
                            <canvas id="donut-chart"></canvas>
                        </div>
                    </div>
                    <div class="border-4 border-zinc-500 hover:border-zinc-400 transition-colors delay-75 p-3 rounded-3xl text-center text-2xl font-bold mt-6">
                        <a href="#">View Summary of Points</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <!-- for the chart -->
    <script>
        var canvas = document.getElementById('donut-chart');
        
        // Set the chart data
        var data = {
            labels: ['Week1', 'Week2', 'Week3', 'Week4', 'Week5', 'Week6', 'Week7'],
            datasets: [{
                label: 'Points',
                data: [100, 109, 95, 110, 180, 216, 256],
                backgroundColor: [
                    '#EF4444',
                    '#3B82F6',
                    '#FBBF24',
                    '#10B981',
                    '#A78BFA',
                    '#F59E0B'
                ],
                hoverOffset: 4
            }]
        };

        // Set the chart options
        var options = {
            plugins: {
                legend: {
                    display: false
                }
            },
            aspectRatio: 1,
            cutout: '50%',
            animation: {
                animateRotate: true
            }
        };

        // Create the chart
        var chart = new Chart(canvas, {
            type: 'doughnut',
            data: data,
            options: options
        });
    </script>
</body>
</html>