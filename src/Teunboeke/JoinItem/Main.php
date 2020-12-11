<?php

namespace Teunboeke\JoinItem;

use pocketmine\Plugin\PluginBase;
use pocketmine\Command\Command;
use pocketmine\Command\CommandSender;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\Event\Listener;
use pocketmine\Event\Player\PlayerJoinEvent;
use pocketmine\Item\Item;

class Main extends PluginBase implements Listener{

public function onEnable(){
        $this->getserver()->getPluginManager()->registerEvents($this, 
$this);       
        @mkdir($this->getDataFolder();
        $this->saveResource("config.yml");
        $this->seveDefaultConfig();
}

public function onDisable(){
  $this->getlogger()->info("ItemJoin by Teunboeke has been deactivated");
}

public function onJoin(PlayerJoinEvent $event){

$player = $event->getPlayer();
$name = $player->getname();

if($this->getConfig()->exists($name)){
         $this->getConfig()set($name, 1);
         $this->getConfig()->save();
}else{
         $this->getConfig()->set($name, 0);
         $this->getConfig()->save();
         
         $item = Item::get(1, 0, 1);
         $item->setCustomName("§aSkyBlockUI");
         $player->getInventory()->setItem(0, $item);
                  }
            }
    }




