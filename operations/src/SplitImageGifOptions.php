<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class SplitImageGifOptions
{
    public function __construct(
        public readonly string $frame_range,
        public readonly SplitImageGifOutputFormat $output_format = SplitImageGifOutputFormat::Png,
    ) {}
}
