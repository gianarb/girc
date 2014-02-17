<?php
namespace GircTest\Connection;

class SocketTest extends \PHPUnit_Framework_TestCase
{
    public function setUp(){}

    public function testGet()
    {
        $n = new \Girc\Connection\Socket("irc.freenode.net", 6667);
        $this->assertEquals(true, is_string($n->get()));
    }

    public function testSend()
    {
        $n = new \Girc\Connection\Socket("irc.freenode.net", 6667);
        $this->assertInstanceOf('Girc\Connection\Socket', $n->send("PING"));
    }
}