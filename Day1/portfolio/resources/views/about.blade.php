<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 font-sans">

    <div class="container mx-auto py-8 px-4">
        <h1 class="text-5xl font-semibold text-center text-blue-600">About Me</h1>
        <p class="mt-6 text-lg text-gray-700 text-center">This is the about page of my portfolio. Here you can find more information about my background, skills, and experiences.</p>
        
        <div class="mt-8 flex justify-center space-x-6">
            <a href="{{ route('home') }}" class="text-blue-500 hover:text-blue-700 text-lg">Home</a>
            <a href="{{ route('projects') }}" class="text-blue-500 hover:text-blue-700 text-lg">Projects</a>
            <a href="{{ route('contact') }}" class="text-blue-500 hover:text-blue-700 text-lg">Contact</a>
        </div>
    </div>

</body>
</html>
