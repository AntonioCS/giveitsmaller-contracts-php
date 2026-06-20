<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class ThumbnailVideoOptions
{
    public function __construct(
        public readonly int $width,
        public readonly int $height,
        public readonly string $timestamp = '00:00:01',
        public readonly ThumbnailVideoFit $fit = ThumbnailVideoFit::Crop,
        public readonly ThumbnailVideoFormat $format = ThumbnailVideoFormat::Jpg,
        public readonly ?int $quality = null,
    ) {}
}
