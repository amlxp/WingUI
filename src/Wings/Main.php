<?php

namespace Wings;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use Wings\Tasks\{DevilWing, AngleWing, FajarWing, TerrainWing, DarkPurpWing, PhoniexWing, ForceFieldWing, TennyWing};
use pocketmine\Player;
use jojoe77777\FormAPI\SimpleForm;
use pocketmine\utils\Config;

class Main extends PluginBase{

	public $taskwingdevil;
	public $taskwingthienthan;
	public $wingdevil = [];
	public $wingthienthan = [];
	public $wingfajar = [];
	public $wingterrain = [];
	public $wingdarkpurp = [];
	public $wingphoniex = [];
	public $wingforcefield = [];
	public $wingtenny = [];

	/** @var Config */
	public $config;
	public $checker;

	public function onEnable () : void{
		$this->taskwingdevil = new DevilWing($this);
		$this->taskwingthienthan = new AngleWing($this);
		$this->taskwingfajar = new FajarWing($this);
		$this->taskwingterrain = new TerrainWing($this);
		$this->taskwingdarkpurp = new DarkPurpWing($this);
		$this->taskwingphoniex = new PhoniexWing($this);
		$this->taskwingforcefield = new ForceFieldWing($this);
		$this->taskwingtenny = new TennyWing($this);
		$this->saveResource("time.yml");
		$config = new Config($this->getDataFolder() . "time.yml", Config::YAML);
		$this->checker = $config->get("time-update");
		$this->getServer()->getLogger()->info("§aPlugin WingUI Make by AmlxP");
	}

	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
		if ($cmd == "wing"){
			if(!$sender instanceof Player){
				$sender->sendMessage("§l§9WingAP§e> §r§cIngame only!");
				return true;
			}
			$form = new SimpleForm(function (Player $player, ?int $data) {
				if(!is_null($data)) {
					switch($data) {
						case 0:
							if(!$player->hasPermission("devil.wing")){
								$player->sendMessage("§l§9WingAP§e> §r§cDu Hast Keine Rechte Für Diesen Command!");
								return true;
							}
							$name = $player->getName();
								if(in_array($name, $this->wingthienthan)) {
									unset($this->wingthienthan[array_search($name, $this->wingthienthan)]);
									$player->sendMessage("§l§9WingAP§e> §r§aWings Aktiviert");
									$this->wingdevil[] = $name;
								}
									if(!in_array($name, $this->wingdevil)){
										$this->wingdevil[] = $name;
										$player->sendMessage("§l§9WingAP§e> §r§aWings Aktiviert");
									}
									break;
						case 1:
							if(!$player->hasPermission("thienthan.wing")){
								$player->sendMessage("§l§9WingAP§e> §r§cDu hast Keine Rechte Für Diesen Command!");
								return true;
							}
							$name = $player->getName();
								if(in_array($name, $this->wingdevil)) {
									unset($this->wingdevil[array_search($name, $this->wingdevil)]);
									$player->sendMessage("§l§9WingAP§e> §r§aWings Aktiviert");
									$this->wingthienthan[] = $name;
								}
									if(!in_array($name, $this->wingthienthan)){
										$this->wingthienthan[] = $name;
										$player->sendMessage("§l§9WingAP§e> §r§aWings Aktiviert");
									}
									break;
						case 2:
							if(!$player->hasPermission("fajar.wing")){
								$player->sendMessage("§l§9WingAP§e> §r§cDu Hast Keine rechte Für Diesen Command!");
								return true;
							}
							$name = $player->getName();
								if(in_array($name, $this->wingthienthan)) {
									unset($this->wingthienthan[array_search($name, $this->wingthienthan)]);
									$player->sendMessage("§l§9WingAP§e> §r§aWings Aktiviert");
									$this->wingthienthan[] = $name;
								}
									if(!in_array($name, $this->wingfajar)){
										$this->wingfajar[] = $name;
										$player->sendMessage("§l§9WingAP§e> §r§aWings Aktiviert");
									}
									break;
						case 3:
							if(!$player->hasPermission("terrain.wing")){
								$player->sendMessage("§l§9WingAP§e> §r§cDu hast Keine rechte Für Diesen Command!");
								return true;
							}
							$name = $player->getName();
								if(in_array($name, $this->wingfajar)) {
									unset($this->wingfajar[array_search($name, $this->wingfajar)]);
									$player->sendMessage("§l§9WingAP§e> §r§aWing Active");
									$this->wingterrain[] = $name;
								}
									if(!in_array($name, $this->wingterrain)){
										$this->wingterrain[] = $name;
										$player->sendMessage("§l§9WingAP§e> §r§aWings Aktiviert");
									}
									break;
						case 4:
							if(!$player->hasPermission("darkpurp.wing")){
								$player->sendMessage("§l§9WingAP§e> §r§cDu hast Keine rechte Für Diesen Command!");
								return true;
							}
							$name = $player->getName();
								if(in_array($name, $this->wingterrain)) {
									unset($this->wingterrain[array_search($name, $this->wingterrain)]);
									$player->sendMessage("§l§9WingAP§e> §r§aWing Active");
									$this->wingdarkpurp[] = $name;
								}
									if(!in_array($name, $this->wingdarkpurp)){
										$this->wingdarkpurp[] = $name;
										$player->sendMessage("§l§9WingAP§e> §r§aWings Aktiviert");
									}
									break;
						case 5:
							if(!$player->hasPermission("phoniex.wing")){
								$player->sendMessage("§l§9WingAP§e> §r§cDu hast Keine rechte Für Diesen Command!");
								return true;
							}
							$name = $player->getName();
								if(in_array($name, $this->wingdarkpurp)) {
									unset($this->wingterrain[array_search($name, $this->wingdarkpurp)]);
									$player->sendMessage("§l§9WingAP§e> §r§aWings Aktiviert");
									$this->wingphoniex[] = $name;
								}
									if(!in_array($name, $this->wingphoniex)){
										$this->wingphoniex[] = $name;
										$player->sendMessage("§l§9WingAP§e> §r§aWings Aktiviert");
									}
									break;
						case 6:
							if(!$player->hasPermission("forcefield.wing")){
								$player->sendMessage("§l§9WingAP§e> §r§cDu hast Keine rechte Für Diesen Command!");
								return true;
							}
							$name = $player->getName();
								if(in_array($name, $this->wingphoniex)) {
									unset($this->wingterrain[array_search($name, $this->wingphoniex)]);
									$player->sendMessage("§l§9WingAP§e> §r§aWings Aktiviert");
									$this->wingforcefield[] = $name;
								}
									if(!in_array($name, $this->wingforcefield)){
										$this->wingforcefield[] = $name;
										$player->sendMessage("§l§9WingAP§e> §r§aWings Aktiviert");
									}
									break;
						case 7:
							if(!$player->hasPermission("tenny.wing")){
								$player->sendMessage("§l§9WingAP§e> §r§cDu hast Keine rechte Für Diesen Command!");
								return true;
							}
							$name = $player->getName();
								if(in_array($name, $this->wingforcefield)) {
									unset($this->wingforcefield[array_search($name, $this->wingforcefield)]);
									$player->sendMessage("§l§9WingAP§e> §r§aWings Aktiviert");
									$this->wingtenny[] = $name;
								}
									if(!in_array($name, $this->wingtenny)){
										$this->wingtenny[] = $name;
										$player->sendMessage("§l§9WingAP§e> §r§aWings Aktiviert");
									}
									break;
						case 8:
						$name = $player->getName();
							if(in_array($name, $this->wingdevil)){
								unset($this->wingdevil[array_search($name, $this->wingdevil)]);
								$player->sendMessage("§l§9WingAP§e> §r§cWings Aus");
								}elseif(in_array($name, $this->wingthienthan)){
								unset($this->wingthienthan[array_search($name, $this->wingthienthan)]);
								$player->sendMessage("§l§9WingAP§e> §r§cWings Aus");
								}elseif(in_array($name, $this->wingfajar)){
								unset($this->wingfajar[array_search($name, $this->wingfajar)]);
								$player->sendMessage("§l§9WingAP§e> §r§cWings Aus");
								}elseif(in_array($name, $this->wingterrain)){
								unset($this->wingterrain[array_search($name, $this->wingterrain)]);
								$player->sendMessage("§l§9WingAP§e> §r§cWings Aus");
								}elseif(in_array($name, $this->wingdarkpurp)){
								unset($this->wingdarkpurp[array_search($name, $this->wingdarkpurp)]);
								$player->sendMessage("§l§9WingAP§e> §r§cWings Aus");
								}elseif(in_array($name, $this->wingphoniex)){
								unset($this->wingphoniex[array_search($name, $this->wingphoniex)]);
								$player->sendMessage("§l§9WingAP§e> §r§cWings Aus");
								}elseif(in_array($name, $this->wingforcefield)){
								unset($this->wingforcefield[array_search($name, $this->wingforcefield)]);
								$player->sendMessage("§l§9WingAP§e> §r§cWings Aus");
								}elseif(in_array($name, $this->wingtenny)){
								unset($this->wingtenny[array_search($name, $this->wingtenny)]);
								$player->sendMessage("§l§9WingAP§e> §r§cWings Aus");
								}
								break;
								case 9:
								break;
								}
					}
				});
			$form->setTitle("§7- Wings -");
			$form->setContent("§7Tap the §bbutton §7for use!");
			$form->addButton("§l§6Devil\n§r§7Perms: devil.wing");
			$form->addButton("§l§fAngel\n§r§7Perms: angel.wing");
			$form->addButton("§l§cYTFajar§fBlitz7\n§r§7Perms: fajar.wing");
			$form->addButton("§l§cRedst§4circuit\n§r§7Perms: terrain.wing");
			$form->addButton("§l§0Dark§dPurp\n§r§7Perms: darkpurp.wing");
			$form->addButton("§l§6Phon§eiex\n§r§7Perms: phoniex.wing");
			$form->addButton("§l§7ForceF§8ield\n§r§7Perms: forcefield.wing");
			$form->addButton("§l§fTenny\n§r§7Perms: tenny.wing");
			$form->addButton("§4§lDEACTIVE");
			$form->addButton("§c§lEXIT");
            $sender->sendForm($form);
		return true;
		}
	}
}
