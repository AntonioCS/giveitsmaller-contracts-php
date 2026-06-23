<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class ConvertImageGifOptions
{
    public function __construct(
        public readonly ConvertImageGifOutputFormat $output_format,
        public readonly ConvertImageGifMetadata $metadata = ConvertImageGifMetadata::Strip,
        public readonly ?int $quality = null,
        public readonly ?string $background = null,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?ConvertImageGifFit $fit = null,
    ) {}
}
