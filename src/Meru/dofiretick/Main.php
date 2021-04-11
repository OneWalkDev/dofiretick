<?php

declare(strict_types=1);

namespace Meru\dofiretick;

/** 使わないのに描いてるuse文あります。
 *　ごめんなさい。殴らないで
 */
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\block\BlockBurnEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\PLayer;

class Main extends PluginBase implements Listener {

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("§c=========");
        $this->getLogger()->info("§cプラグインを有効化しました。");
        $this->getLogger()->info("§cこのプラグインが有効時は火の延焼がfalse(無効)になります。");
        $this->getLogger()->info("§c=========");
    }

    public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        $player->sendMessage("§7ゲームルール dofiretick をfalse(無効)にしました。これにより火の延焼が行われません。 \n開発元：める");
    }

    public function onBurn(BlockBurnEvent $event) {
        $event->setCancelled();
    }

}
