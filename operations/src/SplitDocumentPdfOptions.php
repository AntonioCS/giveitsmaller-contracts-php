<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class SplitDocumentPdfOptions
{
    public function __construct(
        public readonly SplitDocumentPdfMode $mode = SplitDocumentPdfMode::PageRange,
        public readonly ?string $page_range = null,
        public readonly ?int $page_groups = null,
    ) {}
}
