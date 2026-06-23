<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class CompressImageJpegOptions
{
    /**
     * @param list<string>|null $keep_metadata
     */
    public function __construct(
        public readonly CompressImageJpegEncodingMode $encoding_mode = CompressImageJpegEncodingMode::Quality,
        public readonly CompressImageJpegMetadata $metadata = CompressImageJpegMetadata::Strip,
        public readonly bool $progressive = true,
        public readonly CompressImageJpegOutputFormat $output_format = CompressImageJpegOutputFormat::Original,
        public readonly ?int $quality = null,
        public readonly ?int $target_size_bytes = null,
        public readonly ?array $keep_metadata = null,
        public readonly ?CompressImageJpegChromaSubsampling $chroma_subsampling = null,
        public readonly ?bool $lossless = null,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?CompressImageJpegFit $fit = null,
    ) {}
}
