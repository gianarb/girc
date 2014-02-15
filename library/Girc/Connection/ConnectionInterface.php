<?php
namespace Girc\Connection;

use Girc\Command\CommandInterface;

interface ConnectionInterface
{
    /**
     * @param array $c
     */
    public function __construct($host, $port);

    /**
     * @param CommandInterface $c
     * @return $this
     */
    public function send($c);

    /**
     * @return string
     */
    public function get();
}
