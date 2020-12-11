<?php

namespace Teunboeke\JoinItem;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\item\Item;

class main extends PluginBase implements Listener{

public function onEnable(){
        $this->getserver()->getPluginManager()->registerEvents($this, $this);
$this);       
        @mkdir($this->getDataFolder();
        $this->saveResource("config.yml");
        $this->seveDefaultConfig();
}

public function onDisable(){
  $this->getlogger()->info("ItemJoin by Teunboeke has been deactivated
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




