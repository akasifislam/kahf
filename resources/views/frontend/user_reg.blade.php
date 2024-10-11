<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 Vaccine Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <style>
        /* ... existing styles ... */
        .spinner {
            border: 3px solid #f3f3f3;
            border-top: 3px solid #3498db;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
            display: inline-block;
            margin-right: 10px;
            vertical-align: middle;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="bg-gradient-to-r from-blue-100 to-blue-200 min-h-screen flex items-center justify-center">
    <div class="container mx-auto p-8 max-w-md">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="bg-blue-600 p-4">
                <h1 class="text-2xl font-bold text-white text-center">COVID-19 Vaccine Registration</h1>
            </div>

            <!-- Display success message -->
            @if (session('success'))
                <div class="bg-green-500 text-white p-4 text-center">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Registration Form -->
            <form action="{{ route('vaccine.registration.store') }}" method="POST" class="p-6 space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <input type="text" name="name" id="name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- NID -->
                <div>
                    <label for="nid" class="block text-sm font-medium text-gray-700 mb-1">National ID</label>
                    <input type="text" name="nid" id="nid"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                        value="{{ old('nid') }}">
                    @error('nid')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Phone -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                    <input type="tel" name="phone" id="phone"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                        value="{{ old('phone') }}">
                    @error('phone')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" name="email" id="email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                        value="{{ old('email') }}">
                    @error('email')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Center Name -->
                <div>
                    <label for="center_id" class="block text-sm font-medium text-gray-700 mb-1">Vaccination
                        Center</label>
                    <select name="center_id" id="center_id"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Select a center</option>
                        @foreach ($centers as $center)
                            <option value="{{ $center->id }}">{{ $center->center_name }}</option>
                        @endforeach
                    </select>
                    @error('center_id')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div>
                    <button id="submitButton" type="submit"
                        class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-300">
                        <span id="buttonText">Register for Vaccination</span>
                        <span id="spinner" class="spinner hidden"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            var button = document.getElementById('submitButton');
            var buttonText = document.getElementById('buttonText');
            var spinner = document.getElementById('spinner');

            button.disabled = true;
            button.classList.add('opacity-50', 'cursor-not-allowed');
            buttonText.classList.add('hidden');
            spinner.classList.remove('hidden');
        });
    </script>
</body>

</html>
