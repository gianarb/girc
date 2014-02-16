<?php
namespace Girc\Command;

class Pong extends AbstractCommand
{
    static public function send()
    {
        return "PONG";
    }
}
