<?php
include __DIR__. "/../vendor/autoload.php";

$con = new \Girc\Connection\Socket("irc.freenode.net", 6667);
$bot = new \Girc\Bot($con);
$bot->getEventManager()->attach("Bot::run", function(\Zend\EventManager\Event $e){
    $b = $e->getParam('bot');
    if(strpos($b->getConnection()->get(), 'PING') != null){
        $b->getConnection()->send(\Girc\Command\PrivMsg::send("#BotDiProva", "PONG"));
    }
});
$bot->run();
