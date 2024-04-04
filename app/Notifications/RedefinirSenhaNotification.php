<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class RedefinirSenhaNotification extends Notification
{
    use Queueable;

    public $token;
    public $email;
    public $name;

    public function __construct($token,$email,$name)
    {
        $this->token = $token;
        $this->email = $email;
        $this->name = $name;
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
        $url = 'http://localhost:8000/password/reset/'.$this->token.'?email='.$this->email;
        $minutos = config('auth.passwords.'.config('auth.defaults.passwords').'.expire');
        return (new MailMessage)
        ->subject(Lang::get('Atualização de senha'))
        ->greeting('Olá '.$this->name)
        ->line(Lang::get('Esqueceu a senha? Sem problemas vamos resolver isso.'))
        ->action(Lang::get('Clique aqui para modificar a senha'), $url)
        ->line(Lang::get('O link acima expira em '.$minutos.' minutos'))
        ->line(Lang::get('Caso você nao tenha requisitado a alteração de senha, nenhuma ação é necessária.'))
        ->salutation('Até breve!');
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
