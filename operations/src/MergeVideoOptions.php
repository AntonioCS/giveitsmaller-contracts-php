<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class MergeVideoOptions
{
    public function __construct(
        public readonly MergeVideoTransition $transition = MergeVideoTransition::None,
        public readonly bool $normalize_audio = true,
        public readonly ?float $crossfade_duration = null,
    ) {}
}
