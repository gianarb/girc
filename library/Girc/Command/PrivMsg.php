<?php
namespace Girc\Command;

class PrivMsg extends AbstractCommand
{
    public static function send($channel, $message)
    {
        return "PRIVMSG $channel :$message";
    }
}
