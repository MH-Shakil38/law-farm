<?php

namespace App\Console\Commands;

use App\Mail\HearingReminderMail;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\support\Facades\Log;

class HearingDate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hearing-reminder';

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
        $tomorrow = Carbon::tomorrow()->format('Y-m-d'); // Get tomorrow's date
        $clients = Client::whereDate('hearing_date', $tomorrow)->get();

        // Log the client data for debugging
        Log::info('Clients with hearings tomorrow: ' . json_encode($clients));

        foreach ($clients as $client) {
            // Check if the email is valid
            if (filter_var($client->email, FILTER_VALIDATE_EMAIL)) {
                try {
                    // Send the email reminder
                    Mail::send('emails.hearing-reminder', ['client' => $client], function ($message) use ($client) {
                        $message->to($client->email)
                                ->subject('Tomorrow Hearing Date Reminder')
                                ->from('pemalaw5@gmail.com', 'Law Office of Pema Lhamu Bhutia');
                    });

                    // Log success
                    Log::info('Mail successfully sent to: ' . $client->email . ' at ' . Carbon::now()->format('d M y h:i:s A'));
                } catch (\Exception $e) {
                    // Log any email sending errors
                    Log::error('Failed to send mail to: ' . $client->email . ' Error: ' . $e->getMessage());
                }
            } else {
                // Log invalid email addresses
                Log::warning('Invalid email address for client ID: ' . $client->id . ', Email: ' . $client->email);
            }
        }
    }
}
