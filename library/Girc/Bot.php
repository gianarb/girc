<?php
namespace Girc;
use Girc\BotInterface;
use Girc\Command\Join;
use Girc\Command\Nick;
use Girc\Command\Pong;
use Girc\Command\User;
use Girc\Connection\ConnectionInterface;
use Zend\EventManager\EventManager;

class Bot implements BotInterface
{
    /**
     * @var ConnectionInterface
     */
    protected $connection;

    protected $eventManager;

    public function __construct(ConnectionInterface $c)
    {
        $this->getEventManager();
        $this->setConnection($c);
        $this->getConnection()->send(User::send('BotDiProva','BotDiProva'));
        $this->getConnection()->send(Nick::send('BotDiProva'));
        $this->getConnection()->send(Join::send('#BotDiProva'));
    }

    public function getEventManager()
    {
        if($this->eventManager instanceof EventManager){
            return $this->eventManager;
        }
        return $this->eventManager = new EventManager();
    }

    /**
     * @return ConnectionInterface
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @param ConnectionInterface $connection
     */
    public function setConnection(ConnectionInterface $connection)
    {
        $this->connection  = $connection;
    }

    public function run()
    {
        do {
            $message = $this->getConnection()->get();
            if(preg_match("/PING/", $message)){
                $this->getConnection()->send(Pong::send());
            }
            $this->getEventManager()->trigger("Bot::run", $this, array('bot' => $this, 'message' => $message));
        } while (true);
    }
}
