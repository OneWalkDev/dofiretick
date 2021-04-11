<?php

declare(strict_types=1);

namespace Meru\dofiretick;

use pocketmine\event\block\BlockBurnEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }


    public function onBurn(BlockBurnEvent $event) {
        $event->setCancelled();
    }

}
