<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class ThumbnailImageSvgOptions
{
    public function __construct(
        public readonly int $width,
        public readonly int $height,
        public readonly ThumbnailImageSvgFit $fit = ThumbnailImageSvgFit::Crop,
        public readonly ThumbnailImageSvgFormat $format = ThumbnailImageSvgFormat::Jpg,
        public readonly ?int $quality = null,
        public readonly ?string $background = null,
    ) {}
}
