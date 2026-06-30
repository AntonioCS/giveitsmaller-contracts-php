<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class CompressImageOptions
{
    public function __construct(
        public readonly int $quality = 80,
        public readonly CompressImageMetadata $metadata = CompressImageMetadata::Strip,
        public readonly CompressImageOutputFormat $output_format = CompressImageOutputFormat::Original,
        public readonly CompressImageColorProfile $color_profile = CompressImageColorProfile::Keep,
        public readonly bool $auto_orient = true,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?CompressImageFit $fit = null,
    ) {}
}
