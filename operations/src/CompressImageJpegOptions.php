<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class CompressImageJpegOptions
{
    public function __construct(
        public readonly int $quality = 80,
        public readonly CompressImageJpegMetadata $metadata = CompressImageJpegMetadata::All,
        public readonly bool $progressive = true,
        public readonly CompressImageJpegOutputFormat $output_format = CompressImageJpegOutputFormat::Original,
    ) {}
}
