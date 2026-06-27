<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class CompressImagePngOptions
{
    /**
     * @param list<string>|null $keep_metadata
     */
    public function __construct(
        public readonly int $quality = 80,
        public readonly CompressImagePngMetadata $metadata = CompressImagePngMetadata::Strip,
        public readonly int $optimization_level = 3,
        public readonly CompressImagePngOutputFormat $output_format = CompressImagePngOutputFormat::Original,
        public readonly CompressImagePngColorProfile $color_profile = CompressImagePngColorProfile::Keep,
        public readonly bool $auto_orient = true,
        public readonly ?array $keep_metadata = null,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?CompressImagePngFit $fit = null,
    ) {}
}
