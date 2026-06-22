<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class CompressImagePngOptions
{
    public function __construct(
        public readonly int $quality = 80,
        public readonly CompressImagePngMetadata $metadata = CompressImagePngMetadata::All,
        public readonly int $optimization_level = 3,
        public readonly CompressImagePngOutputFormat $output_format = CompressImagePngOutputFormat::Original,
        public readonly bool $lossy = false,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?CompressImagePngFit $fit = null,
    ) {}
}
