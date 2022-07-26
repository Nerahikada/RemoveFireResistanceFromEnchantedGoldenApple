<?php

declare(strict_types=1);

namespace Nerahikada\Rfrfega;

use pocketmine\entity\effect\EffectInstance;
use pocketmine\entity\effect\VanillaEffects;

class GoldenAppleEnchanted extends \pocketmine\item\GoldenAppleEnchanted{

	public function getAdditionalEffects() : array{
		return [
			new EffectInstance(VanillaEffects::REGENERATION(), 600, 4),
			new EffectInstance(VanillaEffects::ABSORPTION(), 2400, 3),
			new EffectInstance(VanillaEffects::RESISTANCE(), 6000)
		];
	}
}
