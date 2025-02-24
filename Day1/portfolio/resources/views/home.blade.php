<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Add Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 font-sans">

    <div class="container mx-auto py-8 px-4">
        <h1 class="text-5xl font-semibold text-center text-blue-600">Welcome to My Portfolio</h1>
        <p class="mt-6 text-lg text-center text-gray-700">This is the home page of my portfolio.</p>
        
        <div class="mt-8 flex justify-center space-x-6">
            <a href="{{ route('about') }}" class="text-blue-500 hover:text-blue-700 text-lg">About</a>
            <a href="{{ route('projects') }}" class="text-blue-500 hover:text-blue-700 text-lg">Projects</a>
            <a href="{{ route('contact') }}" class="text-blue-500 hover:text-blue-700 text-lg">Contact</a>
        </div>
    </div>

</body>
</html>
