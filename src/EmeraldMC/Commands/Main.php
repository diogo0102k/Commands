<?php

namespace EmeraldMC\Commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\permission\ServerOperator;
use pocketmine\event\player\PlayerCommandPreprocessEvent;

//Coded by georgianYT.

class Main extends PluginBase implements Listener{
  
    public function onEnable(){
                  $this->getLogger()->info(TextFormat::BLUE . "activated.");
		  $this->getServer()->getPluginManager()->registerEvents($this,$this);
  	       }
    
    public function onDisable(){
                  $this->getLogger()->info(TextFormat::BLUE . "has been disabled.");
   	       }
	
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
	   switch($command->getName()){
	    
           case "spawners":

		  $sender->sendMessage(TextFormat::RED."§3===============================");
		  $sender->sendMessage(TextFormat::RED."§l§bCowCraftPE Spawners");
		  $sender->sendMessage(TextFormat::RED."§3===============================");
		  $sender->sendMessage(TextFormat::RED." §7IronGolems, Blaze, Wither, Zombie,");
		  $sender->sendMessage(TextFormat::RED." §7WitherSkeleton, Enderman, Wolf,");
		  $sender->sendMessage(TextFormat::RED." §7Chicken, Cow, Pig, Squid, Parrot,");
		  $sender->sendMessage(TextFormat::RED." §7Skeleton, Steve, WitherBoss,");
		  $sender->sendMessage(TextFormat::RED." §7DragonBoss, ZombieBoss, BlazeBoss,");
		  $sender->sendMessage(TextFormat::RED." §7Pigman, Spider, Villager, Witch,");
		  $sender->sendMessage(TextFormat::RED." §7Ocelot, Horse, Donkey");
		  $sender->sendMessage(TextFormat::RED."§3==============================");
	       return true;

           case "ccseason":

		  $sender->sendMessage(TextFormat::RED."§3==============================");
		  $sender->sendMessage(TextFormat::RED." §l§bCowCraftPE");
		  $sender->sendMessage(TextFormat::RED." §dSeason 1");
		  $sender->sendMessage(TextFormat::RED." §dVersion 2");
		  $sender->sendMessage(TextFormat::RED."§3==============================");
	       return true;
			   
	   case "ccversion":
			   
		  $sender->sendMessage(TextFormat::RED."§l§bCOWCRAFTPE§r§7 Is Running CowPE-stable v1.7.0");
	       return true;
			   
           case "ceshop":
			   
		  $sender->sendMessage(TextFormat::RED."§l§aGLOBAL");
		  $sender->sendMessage(TextFormat::RED."§fComing Soon §7100 Gems");
	       return true;
			   
           case "traps":
			   
                  $sender->sendMessage(TextFormat::RED."§l§dTRAPS");
	          $sender->sendMessage(TextFormat::RED."§fThrowable 3x3 | §710,000");
                  $sender->sendMessage(TextFormat::RED."§fRemote Access 3x3 | §775,000");
		  $sender->sendMessage(TextFormat::RED."§fShooter 3x3 | §7100,000");
	       return true;

	   case "spawnerupgrade":
			   
		  $sender->sendMessage(TextFormat::RED."§aTap a spawner to upgrade §eCosts: §7100,000 Gems");
	       return true;
			   
	   case "godkit":
			   
		  $sender->sendMessage(TextFormat::RED."§cYou need a §7God Kit Scroll §cto open a god kit!");
	       return true;
          }
     }
}
