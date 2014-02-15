<?php
namespace Girc\Command;

class PrivMsg extends AbstractCommand
{
    static public function send($channel, $message)
    {
        return "PRIVMSG $channel :$message";
    }
}
