<?php

namespace worldedit;

use pocketmine\plugin\PluginBase;
use worldedit\utils\Utils;
use worldedit\commands\Commands;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class BasePlugin extends PluginBase {
	
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {
		 $cmds = new Commands($this);
		
		$cmds->onCommand($sender,$cmd, $label,$args);
	}
	
	
	public function getUtils() {
		return new Utils();
	}
}
