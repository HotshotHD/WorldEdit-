<?php

namespace worldedit;

use pocketmine\event\Listener;
use worldedit\BasePlugin;

class EventListener implements Listener {
	
	private $plugin;
	
	public function __construct(BasePlugin $plugin) {
		$this->plugin = $plugin;
	}
	
	public function getPlugin() {
		return $this->plugin;
	}

}
