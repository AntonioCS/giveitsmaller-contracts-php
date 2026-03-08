<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class CompressImageOptions
{
    public function __construct(
        public readonly CompressImageMode $mode = CompressImageMode::Lossy,
        public readonly CompressImageMetadata $metadata = CompressImageMetadata::All,
        public readonly CompressImageIccProfile $icc_profile = CompressImageIccProfile::Preserve,
        public readonly bool $auto_orient = true,
        public readonly bool $progressive = true,
        public readonly CompressImageOutputFormat $output_format = CompressImageOutputFormat::Original,
        public readonly ?int $quality = null,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?CompressImageFit $fit = null,
    ) {}
}
