<?php
namespace Nawaf1b;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
class Nawaf1b extends PluginBase implements Listener {
  
    public function onEnable() {
        $this->getLogger()->info(TextFormat::BLUE ."===============");
        $this->getLogger()->info(TextFormat::GREEN ."Plugin By Nawaf");
        $this->getLogger()->info(TextFormat::BLUE ."===============");
        $this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
    }
    public function getName(){
      return "[1B]";
    }
   public function onPE1B(\pocketmine\event\server\QueryRegenerateEvent $sev){
        switch(mt_rand(1,3)){
          case 1:
                   $sev->setMaxPlayerCount(1000);
                $sev->setPlayerCount(999);
            break;
            case 2:
              $sev->setMaxPlayerCount(1000);
                $sev->setPlayerCount(998);
              break;
          case 3:
                     $sev->setMaxPlayerCount(1000);
                $sev->setPlayerCount(1000);
                break;
        }
        }
    }
<?
