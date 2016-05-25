<?php

namespace worldedit\shape;

use pocketmine\math\Vector3;
use pocketmine\level\Level;

class Sphere {
	
	private $center;
	
	private $level;
	
	private $size;
	
	public function __construct(Vector3 $center, Level $level, int $size) {
		$this->center = $center;
		$this->level = $level;
		$this->size = $size;
	}
}
