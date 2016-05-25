<?php

namespace worldedit\shape;

use pocketmine\math\Vector3;
use pocketmine\level\Level;

class Cylinder {
	
	private $center;
	
	private $level;
	
	private $height;
	private $width;
	
	public function __construct(Vector3 $center, Level $level, int $height, $width) {
		$this->center = $center;
		$this->level = $level;
		$this->height = $height;
		$this->width = $width;
	}
}
