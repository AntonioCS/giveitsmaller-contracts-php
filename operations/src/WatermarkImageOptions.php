<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class WatermarkImageOptions
{
    public function __construct(
        public readonly WatermarkImageWatermarkType $watermark_type = WatermarkImageWatermarkType::Image,
        public readonly WatermarkImagePosition $position = WatermarkImagePosition::Center,
        public readonly float $opacity = 0.5,
        public readonly ?string $watermark_bucket = null,
        public readonly ?string $watermark_key = null,
        public readonly ?string $text = null,
        public readonly ?float $font_size = null,
        public readonly ?string $color = null,
        public readonly ?WatermarkImageWatermarkMode $watermark_mode = null,
        public readonly ?float $rotation = null,
        public readonly ?int $tile_spacing = null,
    ) {}
}
