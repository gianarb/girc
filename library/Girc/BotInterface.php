<?php
namespace Girc;

use Girc\Connection\ConnectionInterface;

interface BotInterface
{
    /**
     * @return void
     */
    public function __construct(ConnectionInterface $c);

    /**
     * @return ConnectionInterface
     */
    public function getConnection();

    /**
     * @return void
     */
    public function setConnection(ConnectionInterface $connection);

    /**
     * @return void
     */
    public function run();
}
