<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class CompressImageAvifOptions
{
    public function __construct(
        public readonly CompressImageAvifEncodingMode $encoding_mode = CompressImageAvifEncodingMode::Quality,
        public readonly CompressImageAvifMetadata $metadata = CompressImageAvifMetadata::All,
        public readonly int $avif_speed = 4,
        public readonly CompressImageAvifOutputFormat $output_format = CompressImageAvifOutputFormat::Original,
        public readonly ?int $quality = null,
        public readonly ?int $target_size_bytes = null,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?CompressImageAvifFit $fit = null,
    ) {}
}
