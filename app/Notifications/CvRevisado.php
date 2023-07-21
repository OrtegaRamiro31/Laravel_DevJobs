<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CvRevisado extends Notification
{
    use Queueable;

    public $candidato;
    public $vacante;
    public $empresa;

    /**
     * Create a new notification instance.
     */
    public function __construct($candidato, $vacante, $empresa)
    {
        $this->candidato = $candidato;
        $this->vacante = $vacante;
        $this->empresa = $empresa;
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
                    ->greeting('¡Han visto tu CV!')
                    ->subject('Felicidades ' . $this->candidato . ' han visto tu CV')
                    ->line('La empresa ' . $this->empresa . ' ha visto tu CV para la vacante ' . $this->vacante)
                    ->line('Debes estar atento a los medios de contacto que has proporcionado. ¡¡Suerte!!');
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
