<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class CompressImageWebpOptions
{
    public function __construct(
        public readonly CompressImageWebpEncodingMode $encoding_mode = CompressImageWebpEncodingMode::Quality,
        public readonly CompressImageWebpMetadata $metadata = CompressImageWebpMetadata::All,
        public readonly CompressImageWebpOutputFormat $output_format = CompressImageWebpOutputFormat::Original,
        public readonly ?int $quality = null,
        public readonly ?int $target_size_bytes = null,
        public readonly ?bool $lossless = null,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?CompressImageWebpFit $fit = null,
    ) {}
}
