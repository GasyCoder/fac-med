<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Soumission extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Faculté de Médecine - 40e anniversaire')
            ->greeting('Cher(e) ' . $notifiable->full_name . ',')
            ->line('Nous vous remercions pour votre soumission. Votre inscription a bien été reçue et nous reviendrons vers vous dans les meilleurs délais.')
            ->line('Nous apprécions votre intérêt et votre participation.')
            ->salutation('Cordialement,')
            ->salutation('L\'équipe d\'organisation');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
