<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./styling/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 dark:bg-gray-200">

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/5 bg-gray-800 h-screen p-5 flex flex-col justify-between ">
            <div class="flex items-center mb-5">
                <img src="Assets/dp.jpg" alt="User Image"
                    class="rounded-full w-12 h-12 mr-3">
                <span class="text-white font-semibold">Aaron Victor</span>
            </div>
            <div>
                <nav>
                    <ul class="my-auto">
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-blue-500">
                            <svg class="w-5 h-5 mr-3 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7m-9 18V8m-4 4l4 4m4-4l-4-4m4 4v6m0 0l4 4m-8-4H7"></path>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-white">
                            <svg class="w-5 h-5 mr-3 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7m-9 18V8m-4 4l4 4m4-4l-4-4m4 4v6m0 0l4 4m-8-4H7"></path>
                            </svg>
                            Profile
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-white">
                            <svg class="w-5 h-5 mr-3 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7m-9 18V8m-4 4l4 4m4-4l-4-4m4 4v6m0 0l4 4m-8-4H7"></path>
                            </svg>
                            Voting
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-white">
                            <svg class="w-5 h-5 mr-3 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7m-9 18V8m-4 4l4 4m4-4l-4-4m4 4v6m0 0l4 4m-8-4H7"></path>
                            </svg>
                            Results
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-white">
                            <svg class="w-5 h-5 mr-3 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7m-9 18V8m-4 4l4 4m4-4l-4-4m4 4v6m0 0l4 4m-8-4H7"></path>
                            </svg>
                            Timetable
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-white">
                            <svg class="w-5 h-5 mr-3 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7m-9 18V8m-4 4l4 4m4-4l-4-4m4 4v6m0 0l4 4m-8-4H7"></path>
                            </svg>
                            Timetable
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-white">
                            <svg class="w-5 h-5 mr-3 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7m-9 18V8m-4 4l4 4m4-4l-4-4m4 4v6m0 0l4 4m-8-4H7"></path>
                            </svg>
                            Library
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-white">
                            <svg class="w-5 h-5 mr-3 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7m-9 18V8m-4 4l4 4m4-4l-4-4m4 4v6m0 0l4 4m-8-4H7"></path>
                            </svg>
                            Challenges
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
            
            <div class="mt-auto">
                <button class="bg-red-500 text-white py-2 px-4 w-full rounded hover:bg-red-600"
                style="background: linear-gradient(to right, #025376, #016e9c, #0185be, #01bafd);">Sign Out</button>
            </div>
        </div>
        <!-- end of sidebar -->

        <!-- Main Content -->
        <div class="w-4/5 p-8 ml-3">
            <!-- Header -->
            <div class="flex justify-between items-center mb-8 bg-gray-700 rounded-md p-4">
                <div>
                    <h1 class="text-4xl font-semibold dark:text-white">Dashboard</h1>
                    <span class="text-gray-500 dark:text-gray-300">Home</span>
                </div>
                <!-- this place is supposed to be for profile and notifications button -->
                 <!-- notifications -->
                <div class="flex items-center space-x-4">
                    <button class="p-2 rounded-full bg-white text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                        stroke-width="1.5" stroke="currentColor" class="size-6" 
                        width="24" height="24">
                            <path stroke-linecap="round" 
                            stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                        </svg>
                    </button>
                    <!-- this is for customizing the user account -->
                    <button class="p-2 rounded-full bg- bg-white text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                        stroke-width="1.5" stroke="currentColor" class="size-6" 
                        width="24" height="24">
                            <path stroke-linecap="round" 
                            stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </button>
                </div>
                <!-- it ends here -->
            </div>

            <!-- Dashboard Cards -->
            <div class="grid md:grid-cols-2 md:gap-4 grid-cols-1 gap-2 lg:grid-cols-3 lg:grid-gap-4">
                <!-- Card 1 -->
                <div class="p-5 bg-white rounded-lg shadow flex flex-col items-center">
                    <div class="text-blue-500 mb-3">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7m-9 18V8m-4 4l4 4m4-4l-4-4m4 4v6m0 0l4 4m-8-4H7"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold">Notifications</h3>
                    <span class="text-xl">3</span>
                    <span class="text-green-500 mt-2">You have unread Announcemts</span>
                </div>

                <!-- Card 2 -->
                <div class="p-5 bg-white rounded-lg shadow flex flex-col items-center">
                    <div class="text-yellow-500 mb-3">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7m-9 18V8m-4 4l4 4m4-4l-4-4m4 4v6m0 0l4 4m-8-4H7"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold">Recent rank</h3>
                    <span class="text-xl">2/52</span>
                    <span class="text-green-500 mt-2">+5% higher than last month</span>
                </div>

                <!-- Card 3 -->
                <div class="p-5 bg-white rounded-lg shadow flex flex-col items-center">
                    <div class="text-green-500 mb-3">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7m-9 18V8m-4 4l4 4m4-4l-4-4m4 4v6m0 0l4 4m-8-4H7"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold">Auxiliary Points</h3>
                    <span class="text-xl">192</span>
                    <span class="text-green-500 mt-2">No point updates done</span>
                </div>

                <!-- Card 4 -->
                <div class="p-5 bg-white rounded-lg shadow flex flex-col items-center">
                    <div class="text-purple-500 mb-3">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7m-9 18V8m-4 4l4 4m4-4l-4-4m4 4v6m0 0l4 4m-8-4H7"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold">Assignments Pending</h3>
                    <span class="text-xl">3</span>
                    <span class="text-green-500 mt-2">+8% higher than last week</span>
                </div>

                <!-- Card 5 -->
                <div class="p-5 bg-white rounded-lg shadow flex flex-col items-center">
                    <div class="text-gray-500 mb-3">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7m-9 18V8m-4 4l4 4m4-4l-4-4m4 4v6m0 0l4 4m-8-4H7"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold">Total Subjects</h3>
                    <span class="text-xl">4</span>
                    <span class="text-green-500 mt-2">You are not registered in any extras</span>
                </div>
            </div>
        </div>
    </div>
    <!-- a footer is needed after here -->
</body>

</html>
