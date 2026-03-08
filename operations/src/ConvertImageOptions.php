<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class ConvertImageOptions
{
    public function __construct(
        public readonly ConvertImageOutputFormat $output_format,
        public readonly ?int $quality = null,
        public readonly ?string $background = null,
    ) {}
}
