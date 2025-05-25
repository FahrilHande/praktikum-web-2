<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Majors App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto">
            <h1 class="text-xl font-bold">Majors Management</h1>
        </div>
    </nav>
    <div class="container mx-auto mt-6">
        @yield('content')
    </div>
</body>
</html>
