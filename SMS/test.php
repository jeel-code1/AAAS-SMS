<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1st Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-slate-300 container">
    <center>
    <div class="mt-40 flex justify-between md:p-6 lg:p-12 bg-white shadow-md rounded-xl w-1/2">
        <div class="mr-2 w-1/2 flex justify-start mt-6">
            <h1 class="text-4xl font-bold hover:text-cyan-950">Student Login</h1>
        </div>
        <div class="flex-auto">
            <form>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-base font-bold mb-2">Username</label>
                    <input type="email" id="email" class="shadow appearance-none border-2 border-stone-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" id="password" class="shadow appearance-none border-2 border-stone-400 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex items-center justify-between">
                <input type="submit" value="Submit" class="bg-orange-500 hover:bg-orange-700 text-black font-bold py-2 px-4 rounded">
                <a href="#" class="text-sm text-gray-600 hover:text-gray-900">Forgot password?</a>
                </div>
            </form>
        </div>
    </div>
    </center>
</body>
</html>