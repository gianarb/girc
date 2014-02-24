<?php
namespace Girc\Command;

class Join extends AbstractCommand
{
    public static function send($channel)
    {
        return "JOIN $channel";
    }
}
