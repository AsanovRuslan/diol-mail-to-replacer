<?php

namespace AsanovR\DiolMailToReplacer;


use Swift_Message;

class MailToReplacer
{
    public function replace(Swift_Message $message)
    {
        if ($this->canReplace()) {
            $message->setTo(config('diol-mail-to-replacer.to'));
        }
    }

    private function canReplace()
    {
        return config('diol-mail-to-replacer.enabled') && !empty(config('diol-mail-to-replacer.to'));
    }
}
