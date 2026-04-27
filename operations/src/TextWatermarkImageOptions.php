<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class TextWatermarkImageOptions
{
    public function __construct(
        public readonly string $text,
        public readonly float $font_size = 48.0,
        public readonly string $color = '#FFFFFF80',
        public readonly TextWatermarkImageFontFamily $font_family = TextWatermarkImageFontFamily::LiberationSans,
        public readonly float $rotation = -45.0,
        public readonly TextWatermarkImageWatermarkMode $watermark_mode = TextWatermarkImageWatermarkMode::Single,
        public readonly TextWatermarkImageAnchor $anchor = TextWatermarkImageAnchor::BottomRight,
        public readonly string $margin_x = '0px',
        public readonly string $margin_y = '0px',
        public readonly float $opacity = 1.0,
        public readonly ?int $tile_spacing = null,
    ) {}
}
