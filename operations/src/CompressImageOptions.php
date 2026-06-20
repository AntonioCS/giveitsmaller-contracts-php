<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class CompressImageOptions
{
    public function __construct(
        public readonly int $quality = 80,
        public readonly CompressImageMetadata $metadata = CompressImageMetadata::All,
        public readonly CompressImageOutputFormat $output_format = CompressImageOutputFormat::Original,
    ) {}
}
