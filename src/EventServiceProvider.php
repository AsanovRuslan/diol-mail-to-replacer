<?php


namespace AsanovR\DiolMailToReplacer;


use AsanovR\DiolMailToReplacer\Listeners\MailToReplacer;
use Illuminate\Mail\Events\MessageSending;

class EventServiceProvider extends \Illuminate\Foundation\Support\Providers\EventServiceProvider
{
    protected $listen = [
        MessageSending::class => [
            MailToReplacer::class
        ]
    ];
}
