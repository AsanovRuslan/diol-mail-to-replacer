<?php

namespace AsanovR\DiolMailToReplacer\Listeners;

use Illuminate\Mail\Events\MessageSending;

class MailToReplacer
{
    /**
     * @var MailToReplacer
     */
    private $messageToReplacer;

    public function __construct(\AsanovR\DiolMailToReplacer\MailToReplacer $messageToReplacer)
    {
        $this->messageToReplacer = $messageToReplacer;
    }

    public function handle(MessageSending $event)
    {
        $this->messageToReplacer->replace($event->message);
    }
}
