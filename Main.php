<?php
namespace MineJonas\Heal;
use pocketmine\command/CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\Server;
use pocketmine\Server;
use pocketmine\utils\TextFormat as c;
class Main extends PluginBase { 
  public function onEnable(){ 
  $this->getLogger()->notice(c::BOLD.c::DARK_PURPLE."(!)",c::RESET.c::DARK_AQUA."Plugin aktiviert.");
    }
  
public function onCommand(CommonSender $sender, Command $cmd, $label, array $args){ 
  if (strtlower($cmd->getName()) == "Heal"){
	  if ($sender->hasPermission("Heal")){
		  $sender->sendMessage(c::BOLD.c::DARK_PURPLE."(!)".c::DARK_AQUA."Du wurdest erfolgreich gehealt.");
	  $sender->setHealth(20.0);
	  }elseIf(!$sender->hasPermission("Heal")){
		  $sender->sendMessage(c:BOLD.c::DARK_RED."(!)".c::RESET.c::RED." Dir fehlt die Heal Permission.");
	  }
    } 
  ) 
  
  public function onDisable(){
	  $this->getLogger()->warning(c::BOLD.c::DARK_RED."(!)".c::RESET.c::RED." Plugin deaktiviert.");
  }
}
	  
