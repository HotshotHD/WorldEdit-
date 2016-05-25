<?php
namespace worldedit\command;

use worldedit\BasePlugin;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Commands {
	
	public $plugin;
	
	public function __construct(BasePlugin $plugin) {
		$this->plugin = $plugin;
	}
	
	public function getPlugin() {
		return $this->plugin;
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {
		// COMANDS GO HERE
	}
}
	
