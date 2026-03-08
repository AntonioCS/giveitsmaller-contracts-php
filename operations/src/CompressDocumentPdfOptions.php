<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class CompressDocumentPdfOptions
{
    public function __construct(
        public readonly CompressDocumentPdfProfile $profile = CompressDocumentPdfProfile::Web,
        public readonly CompressDocumentPdfColorspace $colorspace = CompressDocumentPdfColorspace::Unchanged,
        public readonly bool $flatten_forms = false,
        public readonly ?string $pages = null,
    ) {}
}
