<?php

namespace ayd1ndemirci\ServerCounter;

use ayd1ndemirci\ServerCounter\listener\EventListener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
    }
}