<?php
namespace Girc\Command;

class Join extends AbstractCommand
{
    static public function send($channel)
    {
        return "JOIN $channel";
    }
}
