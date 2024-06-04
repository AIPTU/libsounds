<?php

declare(strict_types=1);

namespace aiptu\libsounds;

use pocketmine\math\Vector3;
use pocketmine\network\mcpe\protocol\PlaySoundPacket;
use pocketmine\world\sound\Sound;

class SoundInstance implements Sound {
	private float $volume = 1.0;
	private float $pitch = 1.0;

	public function __construct(
		private string $name,
	) {}

	public function getVolume() : float {
		return $this->volume;
	}

	public function setVolume(float $volume) : void {
		$this->volume = $volume;
	}

	public function getPitch() : float {
		return $this->pitch;
	}

	public function setPitch(float $pitch) : void {
		$this->pitch = $pitch;
	}

	public function encode(Vector3 $pos) : array {
		return [PlaySoundPacket::create($this->name, $pos->getFloorX(), $pos->getFloorY(), $pos->getFloorZ(), $this->volume, $this->pitch)];
	}
}
