<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;


class NewBlogNotification extends Notification
{
    use Queueable;


    /**
     * Create a new notification instance.
     *
     * @param $post
     */
    public function __construct($post)
    {
        //
        $this->post = $post;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['telegram'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toTelegram($notifiable)
    {
        $post = 'New Blog Posted' . "\n\n";
        $post .= 'Title: ```' . $this->post->title . "```\n";
        $post .= 'User Id: ```' . $this->post->user_id . "```\n";

        return TelegramMessage::create()
            ->to('-1001744163748')
            ->content("UP \n\n" . $post);
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
