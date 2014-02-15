<?php
namespace Girc\Command;

class User extends AbstractCommand
{
    static public function send($nick, $rn)
    {
        return "USER $nick 8 * : $rn";
    }
}
