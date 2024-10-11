<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona Vaccine Information</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
    <!-- Header -->
    <header class="bg-blue-600 text-white">
        <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
            <div class="text-xl font-bold">
                VaccineInfo
            </div>
            <div>
                <a href="#" class="px-3 py-2 hover:bg-blue-700 rounded">Home</a>
                <a href="#" class="px-3 py-2 hover:bg-blue-700 rounded">About</a>
                <a href="#" class="px-3 py-2 hover:bg-blue-700 rounded">Vaccines</a>
                <a href="#" class="px-3 py-2 hover:bg-blue-700 rounded">Contact</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="bg-blue-500 text-white py-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="text-center md:text-left mb-8 md:mb-0">
                    <h1 class="text-4xl font-bold mb-4">Get Informed About COVID-19 Vaccines</h1>
                    <p class="text-xl mb-8">Protect yourself and others. Learn about vaccine safety, efficacy, and
                        availability.</p>
                    <a href="{{ route('frontend.reg') }}"
                        class="bg-white text-blue-500 px-6 py-3 rounded-full font-bold hover:bg-blue-100 transition duration-300 inline-block">
                        Vaccine Registration
                    </a>
                </div>
                <div class="w-full md:w-auto">
                    <form class="flex items-center" action="{{ route('vaccine.card') }}" method="POST">
                        @csrf
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="simple-search" name="nid"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 {{ $errors->has('nid') ? 'border-red-500' : 'border-gray-300' }}"
                                placeholder="Search">

                        </div>

                        <button type="submit"
                            class="p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Information Blocks -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-bold mb-4 text-blue-600">Vaccine Safety</h2>
                    <p>Learn about the rigorous testing and monitoring processes ensuring vaccine safety.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-bold mb-4 text-blue-600">Effectiveness</h2>
                    <p>Discover how vaccines work and their effectiveness in preventing severe COVID-19.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-bold mb-4 text-blue-600">Availability</h2>
                    <p>Find information on vaccine distribution and eligibility in your area.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2023 VaccineInfo. All rights reserved.</p>
            <div class="mt-4">
                <a href="#" class="hover:underline mx-2">Privacy Policy</a>
                <a href="#" class="hover:underline mx-2">Terms of Service</a>
                <a href="#" class="hover:underline mx-2">Contact Us</a>
            </div>
        </div>
    </footer>
</body>

</html>
