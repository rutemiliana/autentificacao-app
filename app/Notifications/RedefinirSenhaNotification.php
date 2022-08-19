<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RedefinirSenhaNotification extends Notification
{
    use Queueable;

    //Atributo
    public $token;
    /**
     * Create a new notification instance.
     *
     * @return void
     */

     
     //metodo construtor
    public function __construct($token)
    {
        //recuperando atributo e o adiciona como parÂmetro
        $this->token = $token;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = 'http://localhost:8000/reset/password/'.$this->token;
        $minutos = config('auth.passwords.'.config('auth.defaults.passwords').'.expire');
        return (new MailMessage)
                ->subject('Atualização de senha')
                ->line('Esqueceu sua senha? Então resetaremos ela!')
                ->action('Clique aqui para resetar sua senha', $url)
                ->line('O link expira em '. $minutos. ' minutos.')
                ->line('Se você não solicitou a alteração de senha, então não é necessário realizar nenhuma ação');
        // linhas do return adaptadas do arquivo app\vendor\laravel\framework\src\Illuminate\Auth\Notifications\ResetPassword.php
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
