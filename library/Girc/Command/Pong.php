<?php
namespace Girc\Command;

class Pong extends AbstractCommand
{
    public static function send()
    {
        return "PONG";
    }
}
