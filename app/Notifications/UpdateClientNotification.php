<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

class UpdateClientNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $data,$title,$action;
    public function __construct($title,$data = [])
    {
        $this->data  = $data;
        $this->title = $title;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database','slack'];
    }

    public function toSlack($notifiable){
        return (new SlackMessage)->content($this->title);
    }


    public function toArray(object $notifiable): array
    {
        return [
            'data' => $this->data ?? [],
            'title' => $this->title,
            'user' => auth()->user(),
        ];
    }
}
