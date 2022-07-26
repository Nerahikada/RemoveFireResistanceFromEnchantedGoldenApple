<?php

declare(strict_types=1);

namespace Nerahikada\Rfrfega;

use pocketmine\item\ItemFactory;
use pocketmine\item\ItemIdentifier as IID;
use pocketmine\item\ItemIds as Ids;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

	protected function onLoad() : void{
		$factory = ItemFactory::getInstance();
		$factory->register(new GoldenAppleEnchanted(new IID(Ids::ENCHANTED_GOLDEN_APPLE, 0), "Enchanted Golden Apple"), true);
	}
}
