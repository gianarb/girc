<?php
namespace Girc\Command;

class Nick extends AbstractCommand
{
    public static function send($username)
    {
        return "NICK $username";
    }
}
