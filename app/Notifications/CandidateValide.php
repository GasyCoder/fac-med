<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CandidateValide extends Notification implements ShouldQueue
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
            ->subject('Confirmation de votre soumission à la journée de la science de la santé - 40e anniversaire de la faculté de médecine')
            ->greeting('Cher(e) ' . $notifiable->full_name . ',')
            ->line('Nous avons le plaisir de vous informer que votre candidature a été retenue.')
            ->line('Nous vous remercions pour votre intérêt et votre participation.')
            ->line('Nous sommes impatients de vous voir à l\'événement.')
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
