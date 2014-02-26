<?php
namespace Girc\Command;

class Join extends AbstractCommand
{
    /**
     * @param string $channel
     *
     * @return CommandInterface
     */
    public static function send($channel)
    {
        return "JOIN $channel";
    }
}
