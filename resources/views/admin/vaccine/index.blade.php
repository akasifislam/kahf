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

                    <div class="container mx-auto mt-8">
                        <div class="flex justify-between">
                            <div>
                                <h1 class="text-2xl font-bold mb-4">Vaccine Centers</h1>
                            </div>
                            <div>
                                <a href="{{ route('vaccinecenters.create') }}">Create</a>
                            </div>
                        </div>

                        <!-- Table -->
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white rounded-lg shadow-md">
                                <thead class="bg-gray-200">
                                    <tr>
                                        <th class="py-3 px-6 text-left">SL</th>
                                        <th class="py-3 px-6 text-left">Center Name</th>
                                        <th class="py-3 px-6 text-left">Address</th>
                                        <th class="py-3 px-6 text-left">Daily Limit</th>
                                        <th class="py-3 px-6 text-left">Created At</th>
                                        <th class="py-3 px-6 text-left">Updated At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vaccineCenters as $key => $center)
                                        <tr class="border-b">
                                            <td class="py-3 px-6">{{ $key + 1 }}</td>
                                            <td class="py-3 px-6">{{ $center->center_name }}</td>
                                            <td class="py-3 px-6">{{ $center->address }}</td>
                                            <td class="py-3 px-6">{{ $center->daily_limit }}</td>
                                            <td class="py-3 px-6">{{ $center->created_at->format('Y-m-d H:i') }}</td>
                                            <td class="py-3 px-6">{{ $center->updated_at->format('Y-m-d H:i') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
