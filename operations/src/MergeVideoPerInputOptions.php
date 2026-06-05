<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class MergeVideoPerInputOptions
{
    public function __construct(
        public readonly ?MergeVideoTransition $transition = null,
        public readonly ?float $crossfade_duration = null,
        public readonly ?float $trim_start = null,
        public readonly ?float $trim_end = null,
    ) {}
}
