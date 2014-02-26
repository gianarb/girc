<?php
namespace Girc\Command;

class User extends AbstractCommand
{
    /**
     * @param string $nick
     * @param string $rn
     *
     * @return CommandInterface
     */
    public static function send($nick, $rn)
    {
        return "USER $nick 8 * : $rn";
    }
}
