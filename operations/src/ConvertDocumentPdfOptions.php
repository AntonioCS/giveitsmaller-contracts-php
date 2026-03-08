<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class ConvertDocumentPdfOptions
{
    public function __construct(
        public readonly ConvertDocumentPdfOutputFormat $output_format,
        public readonly string $pages = '1',
        public readonly int $dpi = 150,
    ) {}
}
