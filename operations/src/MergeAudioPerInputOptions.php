<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class MergeAudioPerInputOptions
{
    public function __construct(
        public readonly ?MergeAudioTransition $transition = null,
        public readonly ?float $crossfade_duration = null,
        public readonly ?float $gap_duration = null,
        public readonly ?float $trim_start = null,
        public readonly ?float $trim_end = null,
    ) {}
}
