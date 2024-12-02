<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indonesian Kuliner Login</title>
    
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto min-h-screen flex items-center justify-center p-4">
        <div class="flex w-full max-w-4xl bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Login Form Section -->
            <div class="w-full md:w-1/2 p-8">
                <form id="loginForm" class="space-y-6">
                    <div class="text-center">
                        <h1 class="text-2xl font-bold text-gray-900 mb-2">Welcome to Indonesian Kuliner</h1>
                        <p class="text-gray-600 mb-6">Enter your Username and Password</p>
                    </div>
                    
                    <div class="space-y-2">
                        <label for="username" class="block text-sm font-medium text-gray-700">
                            Username
                        </label>
                        <input 
                            type="text" 
                            id="username" 
                            name="username" 
                            required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500"
                        >
                    </div>

                    <div class="space-y-2">
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Password
                        </label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500"
                        >
                    </div>

                    <button 
                        type="submit"
                        class="w-full bg-orange-500 text-white py-2 px-4 rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 transition duration-150"
                    >
                        Login
                    </button>
                </form>
            </div>

            <!-- Image Section -->
            <div class="hidden md:block md:w-1/2 bg-orange-100">
                <img 
                    src="Assets/img/—Pngtree—illustration of kolak pisang indonesian_15347016.png"
                    alt="Indonesian Food"
                    class="w-full h-full object-cover"
                >
            </div>
        </div>
    </div>
    <script src="Assets/js/login.js"></script>
</body>
</html>