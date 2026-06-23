<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class CompressImageSvgOptions
{
    public function __construct(
        public readonly int $quality = 80,
        public readonly CompressImageSvgMetadata $metadata = CompressImageSvgMetadata::Strip,
        public readonly CompressImageSvgOutputFormat $output_format = CompressImageSvgOutputFormat::Original,
    ) {}
}
