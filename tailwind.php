<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <!-- Include Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* .dropdown:hover .dropdown-content {
            display: block;
        } */
    </style>
</head>

<body class="bg-gray-80">

    <!-- Navbar -->
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="text-white text-lg font-bold">Your Logo</a>

            <!-- Navbar Items -->
            <div class="space-x-4">
                <!-- Home Dropdown -->
                <div class="relative inline-block text-white dropdown">
                    <button class="hover:text-gray-300 focus:outline-none">
                        Home
                    </button>
                    <!-- Dropdown Content -->
                    <div class="hidden absolute z-10 bg-white text-gray-800 mt-2 p-2 shadow-md dropdown-content">
                        <a href="#" class="block py-2">Option 1</a>
                        <a href="#" class="block py-2">Option 2</a>
                        <a href="#" class="block py-2">Option 3</a>
                    </div>
                </div>

                <!-- About Dropdown -->
                <div class="relative inline-block text-white dropdown">
                    <button class="hover:text-gray-300 focus:outline-none">
                        About
                    </button>
                    <!-- Dropdown Content -->
                    <div class="hidden absolute z-10 bg-white text-gray-800 mt-2 p-2 shadow-md dropdown-content">
                        <a href="#" class="block py-2">Info 1</a>
                        <a href="#" class="block py-2">Info 2</a>
                        <a href="#" class="block py-2">Info 3</a>
                    </div>
                </div>

                <!-- Services Dropdown -->
                <div class="relative inline-block text-white dropdown">
                    <button class="hover:text-gray-300 focus:outline-none">
                        Services
                    </button>
                    <!-- Dropdown Content -->
                    <div class="hidden absolute z-10 bg-white text-gray-800 mt-2 p-2 shadow-md dropdown-content">
                        <a href="#" class="block py-2">Service 1</a>
                        <a href="#" class="block py-2">Service 2</a>
                        <a href="#" class="block py-2">Service 3</a>
                    </div>
                </div>

                <!-- Contact Dropdown -->
                <div class="relative inline-block text-white dropdown">
                    <button class="hover:text-gray-300 focus:outline-none">
                        Contact
                    </button>
                    <!-- Dropdown Content -->
                    <div class="hidden absolute z-10 bg-white text-gray-800 mt-2 p-2 shadow-md dropdown-content">
                        <a href="#" class="block py-2">Contact Option 1</a>
                        <a href="#" class="block py-2">Contact Option 2</a>
                        <a href="#" class="block py-2">Contact Option 3</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold mb-4">Welcome to Your Website</h1>
        <p>Your content goes here...</p>
    </div>

    <script>
        // Close dropdowns when clicking outside
        document.addEventListener('click', function (event) {
            var dropdowns = document.querySelectorAll('.dropdown');
            dropdowns.forEach(function (dropdown) {
                if (!dropdown.contains(event.target)) {
                    dropdown.querySelector('.dropdown-content').style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>
