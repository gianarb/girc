<?php
namespace Girc;
use Girc\Connection\ConnectionInterface;
interface BotInterface
{
    public function __construct(ConnectionInterface $c);

    public function getConnection();

    public function setConnection(ConnectionInterface $connection);

    public function run();
}
