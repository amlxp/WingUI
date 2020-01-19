<?php

namespace Wings\Tasks;

use Wings\Main;
use pocketmine\scheduler\Task;
use pocketmine\level\particle\CriticalParticle;
use pocketmine\Player;
use pocketmine\math\Vector3;

class PhoniexWing extends Task{
	
	public function __construct(Main $plugin){
		$this->plugin = $plugin;
		$this->plugin->getScheduler()->scheduleRepeatingTask($this, 5);
	}

	public function onRun(int $currentTick){
		        if($this->plugin instanceof Main){
		foreach($this->plugin->getServer()->getOnlinePlayers() as $player) {
			$name = $player->getName();
		if(in_array($name, $this->plugin->wingphoniex)){
			$x = $player->getX();
			$y = $player->getY();
			$z = $player->getZ();
			$r = 255;
            $g = 255;
            $b = 0;
			$level = $player->getLevel();
			$playerPosition = $player->getPosition()->add(0, 1.2, 0);
		switch($player->getDirection()){
		case 0:
$position = $playerPosition->add(-0.5, 1.4, 0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1.4, -0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 1.2, 0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1.2, -0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 1.2, 1); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1.2, -1); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 1, 0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1, -0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 1, 0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1, -0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 1, 1); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1, -1); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 1, 1.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 1, -1.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.8, 0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.8, -0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.8, 0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.8, -0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.8, 1); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.8, -1); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.8, 1.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.8, -1.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.6, 0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.6, -0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.6, 0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.6, -0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.6, 0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.6, -0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.6, 1); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.6, -1); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.4, 0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.4, -0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.4, 0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.4, -0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.4, 0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.4, -0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.4, 0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.4, -0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.2, 0); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.2, -0); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.2, 0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.2, -0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.2, 0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.2, -0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0.2, 0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0.2, -0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0, 0); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0, -0); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0, 0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0, -0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, 0, 0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, 0, -0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.2, 0); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.2, -0); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.2, 0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.2, -0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.4, 0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.4, -0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.4, 0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.4, -0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.6, 0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.6, -0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.6, 0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.6, -0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.6, 0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.6, -0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.8, 0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.8, -0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -0.8, 0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -0.8, -0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(-0.5, -1, 0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.5, -1, -0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10));
						break 1;
					case 1:
$position = $playerPosition->add(0.8, 1.4, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 1.4, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.8, 1.2, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 1.2, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(1, 1.2, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-1, 1.2, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.6, 1, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 1, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.8, 1, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 1, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(1, 1, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-1, 1, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(1.2, 1, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-1.2, 1, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.6, 0.8, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 0.8, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.8, 0.8, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 0.8, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(1, 0.8, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-1, 0.8, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(1.2, 0.8, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-1.2, 0.8, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.4, 0.6, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.4, 0.6, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.6, 0.6, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 0.6, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.8, 0.6, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 0.6, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(1, 0.6, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-1, 0.6, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.2, 0.4, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.2, 0.4, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.4, 0.4, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.4, 0.4, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.6, 0.4, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 0.4, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.8, 0.4, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 0.4, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0, 0.2, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0, 0.2, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.2, 0.2, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.2, 0.2, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.4, 0.2, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.4, 0.2, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.6, 0.2, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 0.2, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0, 0, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0, 0, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.2, 0, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.2, 0, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.4, 0, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.4, 0, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0, -0.2, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0, -0.2, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.2, -0.2, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.2, -0.2, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.2, -0.4, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.2, -0.4, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.4, -0.4, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.4, -0.4, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.2, -0.6, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.2, -0.6, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.4, -0.6, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.4, -0.6, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.6, -0.6, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.6, -0.6, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.4, -0.8, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.4, -0.8, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.6, -0.8, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.6, -0.8, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.6, -1, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.6, -1, -0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10));
						break 1;
					case 2:
$position = $playerPosition->add(0.5, 1.4, 0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 1.4, -0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 1.2, 0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 1.2, -0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 1.2, 1); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 1.2, -1); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 1, 0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 1, -0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 1, 0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 1, -0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 1, 1); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 1, -1); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 1, 1.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 1, -1.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.8, 0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.8, -0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.8, 0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.8, -0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.8, 1); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.8, -1); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.8, 1.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.8, -1.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.6, 0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.6, -0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.6, 0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.6, -0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.6, 0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.6, -0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.6, 1); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.6, -1); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.4, 0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.4, -0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.4, 0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.4, -0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.4, 0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.4, -0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.4, 0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.4, -0.8); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.2, 0); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.2, -0); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.2, 0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.2, -0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.2, 0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.2, -0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0.2, 0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0.2, -0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0, 0); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0, -0); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0, 0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0, -0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, 0, 0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, 0, -0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, -0.2, 0); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, -0.2, -0); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, -0.2, 0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, -0.2, -0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, -0.4, 0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, -0.4, -0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, -0.4, 0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, -0.4, -0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, -0.6, 0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, -0.6, -0.2); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, -0.6, 0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, -0.6, -0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, -0.6, 0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, -0.6, -0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, -0.8, 0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, -0.8, -0.4); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, -0.8, 0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, -0.8, -0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.5, -1, 0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(0.5, -1, -0.6); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
						break 1;
					case 3:
$position = $playerPosition->add(0.8, 1.4, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 1.4, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.8, 1.2, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 1.2, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(1, 1.2, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-1, 1.2, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.6, 1, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 1, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.8, 1, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 1, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(1, 1, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-1, 1, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(1.2, 1, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-1.2, 1, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.6, 0.8, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 0.8, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.8, 0.8, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 0.8, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(1, 0.8, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-1, 0.8, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(1.2, 0.8, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-1.2, 0.8, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.4, 0.6, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.4, 0.6, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.6, 0.6, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 0.6, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.8, 0.6, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 0.6, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(1, 0.6, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-1, 0.6, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.2, 0.4, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.2, 0.4, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.4, 0.4, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.4, 0.4, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.6, 0.4, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 0.4, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.8, 0.4, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.8, 0.4, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0, 0.2, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0, 0.2, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.2, 0.2, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.2, 0.2, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.4, 0.2, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.4, 0.2, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.6, 0.2, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.6, 0.2, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0, 0, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0, 0, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.2, 0, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.2, 0, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.4, 0, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.4, 0, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0, -0.2, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0, -0.2, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.2, -0.2, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.2, -0.2, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.2, -0.4, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.2, -0.4, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.4, -0.4, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.4, -0.4, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.2, -0.6, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.2, -0.6, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.4, -0.6, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.4, -0.6, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.6, -0.6, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.6, -0.6, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.4, -0.8, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.4, -0.8, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.6, -0.8, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.6, -0.8, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 

$position = $playerPosition->add(0.6, -1, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
$position = $playerPosition->add(-0.6, -1, 0.5); 
$player->getLevel()->addParticle(new CriticalParticle($position, 10)); 
 
						break 1;
				}
			}
	}
}
	}
}
