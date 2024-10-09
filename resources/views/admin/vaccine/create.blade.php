<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('vaccinecenters.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="flex flex-col">
                            <label for="center_name" class="text-sm font-medium text-gray-700">Vaccine Center
                                Name</label>
                            <input type="text" name="center_name" id="center_name"
                                class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
                                value="{{ old('center_name') }}">
                            @error('center_name')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="address" class="text-sm font-medium text-gray-700">Address</label>
                            <input type="text" name="address" id="address"
                                class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
                                value="{{ old('address') }}">
                            @error('address')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex flex-col">
                            <label for="daily_limit" class="text-sm font-medium text-gray-700">Daily Serving
                                Limit</label>
                            <input type="number" name="daily_limit" id="daily_limit"
                                class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
                                value="{{ old('daily_limit') }}">
                            @error('daily_limit')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <button type="submit"
                                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Create
                                Center</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
