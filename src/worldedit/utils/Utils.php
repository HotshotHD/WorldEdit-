<?php

namespace worldedit\utils;

use pocketmine\Player;
use pocketmine\math\Vector3;
use pocketmine\block\Block;

class Utils {
	
	private $players = [];
	
	
	public function getPos1(Player $player) {
		return $this->players[$player->getName()]["pos1"];
	}
	
	public function getPos2(Player $player) {
		return $this->players[$player->getName()]["pos2"];
	}
	
	public function setPos1(Player $player, Vector3 $pos) {
		$this->players[$player->getName()] = array("pos1" => $pos);
	}
	
	public function setPos2(Player $player, Vector3 $pos) {
		$this->players[$player->getName()] = array("pos2" => $pos);
	}
	
	public function copySelection(Player $player) {
		$pos1 = $this->getPos1($player);
		$pos2 = $this->getPos2($player);
		
		$x1 = $pos1->x;
		$x2 = $pos2->x;
		
		$y1 = $pos1->y;
		$y2 = $pos2->y;
		
		$z1 = $pos1->z;
		$z2 = $pos2->z;
		
		// TODO
	} 
	
	public function pasteSelection(Player $player) {
		$pos1 = $this->getPos1($player);
		$pos2 = $this->getPos2($player);
		
		$x1 = $pos1->x;
		$x2 = $pos2->x;
		
		$y1 = $pos1->y;
		$y2 = $pos2->y;
		
		$z1 = $pos1->z;
		$z2 = $pos2->z;
		
		// TODO
	}
	
	public function cutSelection(Player $player) {
		$pos1 = $this->getPos1($player);
		$pos2 = $this->getPos2($player);
		
		$x1 = $pos1->x;
		$x2 = $pos2->x;
		
		$y1 = $pos1->y;
		$y2 = $pos2->y;
		
		$z1 = $pos1->z;
		$z2 = $pos2->z;
		
		foreach(range($x1, $x2) as $x) {
			foreach(range($y1, $y2) as $y) {
				foreach(range($z1, $z2) as $z) {
					$player->getLevel()->setBlock(new Vector3($x, $y, $z), new Block(Block::AIR, 0, 1));
				}
			}
		}
	}
}
