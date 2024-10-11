<?php

namespace App\Console\Commands;

use App\Mail\VaccineReminder;
use App\Models\Admin\Patient;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendVaccineReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vaccine:send-reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $now = Carbon::now();

        $patients = Patient::with(['registration.vaccinationSchedule' => function ($query) use ($now) {
            $query->where('notified_at', '<=', $now)
                ->where('notified_at', '>', $now->copy()->subMinutes(5));
        }])
            ->whereHas('registration.vaccinationSchedule', function ($query) use ($now) {
                $query->where('notified_at', '<=', $now)
                    ->where('notified_at', '>', $now->copy()->subMinutes(5));
            })
            ->cursor();

        foreach ($patients as $patient) {
            if ($patient->registration && $patient->registration->vaccinationSchedule) {
                Mail::to($patient->email)->send(new VaccineReminder($patient));

                // আপডেট notified_at to prevent sending duplicate emails
                $patient->registration->vaccinationSchedule->update(['notified_at' => null]);
            }
        }

        $this->info('Vaccine reminders sent successfully!');
    }
}
