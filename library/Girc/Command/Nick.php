<?php
namespace Girc\Command;

class Nick extends AbstractCommand
{
    /**
     * @param string $username
     *
     * @return CommandInterface
     */
    public static function send($username)
    {
        return "NICK $username";
    }
}
