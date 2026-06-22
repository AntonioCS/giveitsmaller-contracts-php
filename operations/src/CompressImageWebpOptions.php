<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class CompressImageWebpOptions
{
    public function __construct(
        public readonly int $quality = 80,
        public readonly CompressImageWebpMetadata $metadata = CompressImageWebpMetadata::All,
        public readonly CompressImageWebpOutputFormat $output_format = CompressImageWebpOutputFormat::Original,
        public readonly bool $lossless = false,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?CompressImageWebpFit $fit = null,
    ) {}
}
