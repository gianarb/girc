<?php
namespace Girc\Command;

class Nick extends AbstractCommand
{
    static public function send($username)
    {
        return "NICK $username";
    }
}
