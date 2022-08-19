<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RedefinirSenhaNotification extends Notification
{
    use Queueable;

    //Atributos
    public $token;
    public $email;
    public $name;
    /**
     * Create a new notification instance.
     *
     * @return void
     */

     
     //metodo construtor
    public function __construct($token, $email, $name)
    {
        //recuperando atributo e o adiciona como parÂmetro
        $this->token = $token;
        $this->email = $email;
        $this->name = $name;

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
        $url = 'http://localhost:8000/password/reset/'.$this->token.'?email='. $this->email;
        $minutos = config('auth.passwords.'.config('auth.defaults.passwords').'.expire');
        $saudacao = 'Olá '. $this->name;
        return (new MailMessage)
                ->subject('Atualização de senha')
                ->greeting($saudacao)
                ->line('Esqueceu sua senha? Então resetaremos ela!')
                ->action('Clique aqui para resetar sua senha', $url)
                ->line('O link expira em '. $minutos. ' minutos.')
                ->line('Se você não solicitou a alteração de senha, então não é necessário realizar nenhuma ação')
                ->salutation('Até breve!');
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
