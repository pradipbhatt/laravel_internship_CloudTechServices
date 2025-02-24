<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 font-sans">

    <div class="container mx-auto py-8 px-4">
        <h1 class="text-5xl font-semibold text-center text-blue-600">My Projects</h1>
        <p class="mt-6 text-lg text-gray-700 text-center bg-gray-200 p-4 rounded-lg shadow-md">This is the projects page where I showcase my work.</p>
        
        <div class="mt-8 flex justify-center space-x-6">
            <a href="{{ route('home') }}" class="text-blue-500 hover:text-blue-700 text-lg">Home</a>
            <a href="{{ route('about') }}" class="text-blue-500 hover:text-blue-700 text-lg">About</a>
            <a href="{{ route('contact') }}" class="text-blue-500 hover:text-blue-700 text-lg">Contact</a>
        </div>
    </div>

</body>
</html>
