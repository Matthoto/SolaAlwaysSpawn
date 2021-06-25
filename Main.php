<?php

namespace Matthoto\SolaASpawn;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\math\Vector3;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("Le plugin a était activé");
    }
    public function onJoin(PlayerJoinEvent $event){
        $p = $event->getPlayer();
        $p->teleport(new Vector3($p->getSpawn()->getX(), $p->getSpawn()->getY(), $p->getSpawn()->getZ()));
    }
}