<?php

declare(strict_types=1);

namespace aiptu\libsounds;

class InvalidSoundTypeException extends \Exception {
	public function __construct(string $value) {
		parent::__construct("Invalid sound type: {$value}");
	}
}
