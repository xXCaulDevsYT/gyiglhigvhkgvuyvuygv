<?php

namespace Prismeral;

 use pocketmine\command\{CommandSender, Command};
  use pocketmine\plugin\Plugin;
  use pocketmine\plugin\PluginBase;
  use pocketmine\Player;
  use pocketmine\Server; 
  use pocketmine\level\Position;
  use pocketmine\level\particle\HugeExplodeSeedParticle;
  use jojoe77777\FormAPI\FormAPI;

class main extends PluginBase{
  
  public function onEnable(){
    $this->getLogger()->info("[TitaniumGames] The warp plugin is now running! - Prismeral loves you.");
  }
  public function onDisable(){
    $this->getLogger()->info("[TitaniumGames] The warp plugin is now collapsing! - Prismeral loves you.");
  }
  public function onCommand(CommandSender $sender, Command $commandname, string $label, array $args): bool {
    if($commandname->getName() === "prismeral"){
        $sender->sendMessage("\n\n§7Hello, I am landmines1234 the developer of §bTitanium Games §7and you are viewing my profile :)\n\n§l§f* §r§bGamertag: §7landmines1234\n§l§f* §r§bDiscord: §7Prismeral#6475\n§l§f* §r§bYoutube: §7Prismeral\n\n");
    }
    return true;
  }
  public function Form(Player $oyuncu){
    $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
    $form = $api->createSimpleForm(function(Player $oyuncu, $veri){
    if(is_null($veri)){
      return;
    }
    switch($veri){
        case 0:
        $oyuncu->sendMessage("§l§8(§b!§8) §r§7If you spot any bugs make sure to message the developer on discord!");
        break;
      
    }
    });
  $form->setTitle("Landmines1234");
  $form->setContent("§7Hello, I am landmines1234 the developer of §bTitanium Games §7and you are viewing my profile :)\n\n§l§f* §r§bGamertag: §7landmines1234\n§l§f* §r§bDiscord: §7Prismeral#6475\n§l§f* §r§bYoutube: §7Prismeral\n\n");
  $form->addButton("§5Exit");
  $form->sendToPlayer($oyuncu);
  }
}



