<?php
namespace Girc\Connection;

class Socket implements ConnectionInterface
{
    protected $socket;

    public function __construct($host, $port)
    {
        $this->socket = fsockopen("irc.freenode.net", 6667);
    }

    public function send($c)
    {
        fwrite($this->socket, $c . "\r\n");
        return $this;
    }

    public function get()
    {
        return fgets($this->socket, 1024);
    }
}
