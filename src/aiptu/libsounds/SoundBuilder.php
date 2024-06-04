<?php

declare(strict_types=1);

namespace aiptu\libsounds;

class SoundBuilder {
	public static function create(
		SoundTypes $soundType,
		float $volume = 1.0,
		float $pitch = 1.0
	) : SoundInstance {
		$sound = new SoundInstance($soundType->value);
		$sound->setVolume($volume);
		$sound->setPitch($pitch);

		return $sound;
	}
}
