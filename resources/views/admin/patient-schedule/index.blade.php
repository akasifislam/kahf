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
                                <h1 class="text-2xl font-bold mb-4">
                                    Patient schedule list
                                </h1>
                            </div>
                        </div>

                        <!-- Table -->
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white rounded-lg shadow-md">
                                <thead class="bg-gray-200">
                                    <tr>
                                        <th class="py-3 px-6 text-left">SL</th>
                                        <th class="py-3 px-6 text-left">Patient</th>
                                        <th class="py-3 px-6 text-left">Phone</th>
                                        <th class="py-3 px-6 text-left">Email</th>
                                        <th class="py-3 px-6 text-left">Nid</th>
                                        <th class="py-3 px-6 text-left">Schedule Time</th>
                                        <th class="py-3 px-6 text-left">Notified Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($patients as $key => $patient)
                                        <tr class="border-b">
                                            <td class="py-3 px-6">{{ $key + 1 }}</td>
                                            <td class="py-3 px-6">{{ $patient->name }}</td>
                                            <td class="py-3 px-6">{{ $patient->phone }}</td>
                                            <td class="py-3 px-6">{{ $patient->email }}</td>
                                            <td class="py-3 px-6">{{ $patient->nid }}</td>
                                            <td class="py-3 px-6">
                                                @if ($patient->registration)
                                                    {{ $patient->registration->status }}
                                                    <br>
                                                    {{ $patient->registration->vaccinationSchedule->scheduled_date }}
                                                @else
                                                    Not Registered
                                                @endif
                                            </td>
                                            <td class="py-3 px-6">
                                                @if ($patient->registration && $patient->registration->vaccinationSchedule)
                                                    {{ $patient->registration->vaccinationSchedule->scheduled_date }}
                                                @else
                                                    No Schedule
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $patients->links() }}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
