<?php

namespace Teunboeke\JoinItem;

use pocketmine\plugin\PluginBase;
use pocketmine\Command\Command;
use pocketmine\Command\CommandSender;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\Event\Listener;
use pocketmine\Event\Player\PlayerJoinEvent;
use pocketmine\Item\Item;

class Main extends PluginBase implements Listener{

public function onEnable(){
        $this->getserver()->getPluginManager()->registerEvents($this, $this);       
        $this->saveDefaultConfig();
}

public function onDisable(){
  $this->getlogger()->info("ItemJoin by Teunboeke has been deactivated");
}

public function onJoin(PlayerJoinEvent $event){

$player = $event->getPlayer();
$name = $player->getname();
                           
         $item = Item::get(399, 1, 1);
         $item->setCustomName("§aSkyBlockUI");
         $player->getInventory()->setItem(9, $item);
                  }
            }
    }




