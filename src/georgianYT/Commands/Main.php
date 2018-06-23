<?php
namespace georgianYT\Commands;
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
	    
           case "rules":

		  $sender->sendMessage(TextFormat::GREEN."The following rules must be respected :");
		  $sender->sendMessage(TextFormat::RED."1. Do not cheat.");
		  $sender->sendMessage(TextFormat::RED."2. Do not spam or write in Maj");
		  $sender->sendMessage(TextFormat::RED."3. Do not do pubs");
		  $sender->sendMessage(TextFormat::RED."4. Do not usebugs");
		  $sender->sendMessage(TextFormat::RED."5. Do not try to log in to a member's account");
		  $sender->sendMessage(TextFormat::RED."6. Do not insult");
		  $sender->sendMessage(TextFormat::RED."7. Forbidden to leave fight (Clear + Kill)");
		  $sender->sendMessage(TextFormat::RED."8. No attempt to kill from a safezone");
		  $sender->sendMessage(TextFormat::RED."9. TP kill allowed");
		  $sender->sendMessage(TextFormat::RED."10. Betrayals Authorized Actions");
	       return true;

           case "mod":

		  $sender->sendMessage(TextFormat::GREEN."Here are the few modded items the server brings to your Gameplay :");
		  $sender->sendMessage(TextFormat::RED." - Hyplexium");
		  $sender->sendMessage(TextFormat::RED." - Hyplexeium Blocks");
		  $sender->sendMessage(TextFormat::RED." - New swords");
		  $sender->sendMessage(TextFormat::RED." - Gun");
	       return true;
          }
     }
}
