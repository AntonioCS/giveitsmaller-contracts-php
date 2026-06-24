<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class ImageWatermarkImageTiffOptions
{
    public function __construct(
        public readonly ImageWatermarkImageTiffAnchor $anchor = ImageWatermarkImageTiffAnchor::BottomRight,
        public readonly string $margin_x = '0px',
        public readonly string $margin_y = '0px',
        public readonly float $opacity = 0.5,
        public readonly ?string $overlay_width = null,
    ) {}
}
