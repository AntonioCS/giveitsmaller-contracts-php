<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class ThumbnailImageOptions
{
    public function __construct(
        public readonly int $width,
        public readonly int $height,
        public readonly ThumbnailImageFit $fit = ThumbnailImageFit::Crop,
        public readonly ThumbnailImageFormat $format = ThumbnailImageFormat::Jpg,
    ) {}
}
