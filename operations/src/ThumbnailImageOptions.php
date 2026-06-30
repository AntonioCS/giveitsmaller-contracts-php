<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class ThumbnailImageOptions
{
    public function __construct(
        public readonly ThumbnailImageFit $fit = ThumbnailImageFit::Crop,
        public readonly ThumbnailImageFormat $format = ThumbnailImageFormat::Jpg,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?int $quality = null,
        public readonly ?string $background = null,
    ) {}
}
