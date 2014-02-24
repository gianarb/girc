## Girc
Girc is a simple irc Bot written in PHP.

### Use Case
``` php
$con = new \Girc\Connection\Socket("irc.freenode.net", 6667);
$bot = new \Girc\Bot($con);
$bot->getEventManager()->attach("Bot::run", function(\Zend\EventManager\Event $e){
    $b = $e->getParam('bot');
    $m = $e->getParam('message');
    if(preg_match("/!hello/", $m)){
        $b->getConnection()->send(\Girc\Command\PrivMsg::send("#BotDiProva", "Hi!!"));
    }
});
$bot->run();
```

### Install
``` bash
git clone https://github.com/gianarb/girc.git
cd girc
composer install
```
