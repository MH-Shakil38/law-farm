<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Hearing;
use App\Mail\HearingReminderMail;
use App\Models\Client;
use Illuminate\Support\Facades\Mail;


class HearingReminderController extends Controller
{
    public function sendReminders()
    {
        $tomorrow = Carbon::tomorrow()->format('Y-m-d'); // Get tomorrow's date

        $hearings = Client::whereDate('hearing_date', $tomorrow)->get();

        foreach ($hearings as $hearing) {
            // Send the email reminder
            Mail::to($hearing->client_email)->send(new HearingReminderMail($hearing->hearing_date));
        }

        return response()->json(['message' => 'Reminder emails sent successfully']);
    }
}
