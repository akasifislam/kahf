<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vaccine Registration Info</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-blue-100 to-blue-200 min-h-screen flex items-center justify-center">

    <div class="max-w-md w-full mx-auto p-8">
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
            <!-- Header -->
            <div class="bg-blue-600 p-6 relative">
                <div class="absolute top-0 left-0 w-full h-full bg-blue-500 opacity-50 transform -skew-y-6"></div>
                <h1 class="text-white text-3xl font-bold relative z-10">COVID-19 Vaccine</h1>
                <p class="text-blue-100 relative z-10">Registration Information</p>
            </div>

            <!-- Main Content -->
            <div class="p-6">
                @if (!$patient)
                    <div class="text-center py-8">
                        <svg class="w-16 h-16 text-yellow-500 mx-auto mb-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                            </path>
                        </svg>
                        <h2 class="text-2xl font-semibold text-gray-800 mb-2">Not Registered</h2>
                        <p class="text-gray-600 mb-6">You haven't registered for the COVID-19 vaccine yet.</p>
                        <a href="{{ route('frontend.reg') }}"
                            class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transition duration-300">
                            Register Now
                        </a>
                    </div>
                @else
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <div class="bg-blue-100 rounded-full p-2">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Name</p>
                                <p class="text-lg font-semibold text-gray-900">{{ $patient->name }}</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="bg-blue-100 rounded-full p-2">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">NID</p>
                                <p class="text-lg font-semibold text-gray-900">{{ $patient->nid }}</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="bg-blue-100 rounded-full p-2">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Phone</p>
                                <p class="text-lg font-semibold text-gray-900">{{ $patient->phone }}</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="bg-blue-100 rounded-full p-2">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Email</p>
                                <p class="text-lg font-semibold text-gray-900">{{ $patient->email }}</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="bg-blue-100 rounded-full p-2">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Scheduled Date</p>
                                <p class="text-lg font-semibold text-gray-900">
                                    {{ $patient->registration->scheduled_date }}</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="bg-green-100 rounded-full p-2">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Status</p>
                                <p class="text-lg font-semibold text-green-600">{{ $patient->status }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Footer -->
            <div class="bg-gray-50 px-6 py-4">
                <p class="text-xs text-gray-600 text-center">
                    @if (!$patient)
                        Please bring this information and a valid ID to your vaccination appointment.
                    @else
                        Register now to get your COVID-19 vaccine and protect yourself and others.
                    @endif
                </p>
            </div>
        </div>
    </div>

</body>

</html>
