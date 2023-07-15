<?php

namespace ayd1ndemirci\ServerCounter\listener;

use pocketmine\event\Listener;
use pocketmine\event\server\QueryRegenerateEvent;
use pocketmine\Server;

class EventListener implements Listener
{
    public function onQuery(QueryRegenerateEvent $event): void
    {
        $onlinePlayers = count(Server::getInstance()->getOnlinePlayers());
        $event->getQueryInfo()->setMaxPlayerCount($onlinePlayers + 1);
    }
}