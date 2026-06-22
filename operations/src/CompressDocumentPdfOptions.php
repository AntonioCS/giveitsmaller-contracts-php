<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class CompressDocumentPdfOptions
{
    public function __construct(
        public readonly int $quality = 50,
        public readonly bool $grayscale = false,
        public readonly CompressDocumentPdfColorspace $colorspace = CompressDocumentPdfColorspace::Unchanged,
        public readonly bool $flatten_forms = false,
        public readonly ?CompressDocumentPdfProfile $profile = null,
        public readonly ?int $image_dpi = null,
        public readonly ?string $pages = null,
    ) {}
}
