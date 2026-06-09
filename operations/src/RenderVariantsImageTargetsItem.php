<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class RenderVariantsImageTargetsItem
{
    public function __construct(
        public readonly string $id,
        public readonly RenderVariantsImageTargetsItemFit $fit = RenderVariantsImageTargetsItemFit::Max,
        public readonly int $quality = 85,
        public readonly string $background = '#FFFFFF',
        public readonly bool $allow_upscale = false,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?RenderVariantsImageTargetsItemOutputFormat $output_format = null,
    ) {}
}
