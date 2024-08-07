<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2nd Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class=" flex justify-center content-center my-auto h-screen bg-stone-950 ">
    <div class="my-auto bg-stone-800 p-12 rounded-xl h-1/10 ">
        <div>
            <p class="text-3xl text-white mb-9 ">Student Login</p>
            <form method = "post">
                <input type="text" name="user_name" id="user_name" placeholder="Username" required class="rounded-md pl-2 border"><br><br>
                <input type="password" name="password" placeholder="Password" required id="password" class="rounded-md pl-2 border"><br><br>
                <input type="checkbox" name="staylogged" id="staylogged" class="mr-4">Stay logged in
                
                <center>
                    <input type="submit" value="Login" class="bg-blue-100 rounded-sm px-3 justify-end mx-auto">
                </center>
                <p class="mr-6 mt-5 text-cyan-500">
                    <a href="stafflogin.php"  class="text-blue-500 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500" >Login as Staff</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>