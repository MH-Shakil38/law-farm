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
    public $data,$title,$action,$url;
    public function __construct($title,$data = [],$action = 'Access',$url = null)
    {
        $this->data     = $data;
        $this->title    = $title;
        $this->action   = $action;
        $this->url      = $url ?? request()->fullUrl();
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
        // return ['database','slack'];
    }

    public function toSlack($notifiable){
        $webhookUrl = config('services.slack.webhook_url');

        return (new SlackMessage)
            ->from('AppName', ':robot_face:')
            ->to('#general') // Optional: specify the channel
            ->content($this->title)
            ->attachment(function ($attachment) {
                $attachment->fields($this->data);
            });
    }


    public function toArray(object $notifiable): array
    {
        return [
            'data' => $this->data ?? [],
            'title' => $this->title,
            'user' => auth()->user(),
            'action' => $this->action,
            'url' => $this->url,
        ];
    }
}
