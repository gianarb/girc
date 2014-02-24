<?php
namespace Girc\Command;

class User extends AbstractCommand
{
    public static function send($nick, $rn)
    {
        return "USER $nick 8 * : $rn";
    }
}
