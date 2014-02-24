<?php
namespace GircTest;

use Girc\Bot;

class BotTest extends \PHPUnit_Framework_TestCase
{
    protected $bot;

    public function setUp()
    {

    }

    public function testGetEventManager()
    {
        $connection = $this->getMockBuilder('Girc\Connection\Socket')
            ->setConstructorArgs(array('irc.freenode.net', 6667))
            ->getMock();
        $b = new Bot($connection);
        $this->assertInstanceOf('\Zend\EventManager\EventManager', $b->getEventManager());
    }

    public function testGetConnection()
    {
        $connection = $this->getMockBuilder('Girc\Connection\Socket')
            ->setConstructorArgs(array('irc.freenode.net', 6667))
            ->getMock();
        $b = new Bot($connection);
        $this->assertInstanceOf('\Girc\Connection\Socket', $b->getConnection());
    }
}
