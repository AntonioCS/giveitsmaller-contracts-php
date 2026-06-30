<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class ThumbnailDocumentOptions
{
    public function __construct(
        public readonly ThumbnailDocumentSource $source = ThumbnailDocumentSource::Page,
        public readonly ThumbnailDocumentFit $fit = ThumbnailDocumentFit::Crop,
        public readonly ThumbnailDocumentFormat $format = ThumbnailDocumentFormat::Jpg,
        public readonly ?int $page = null,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?int $quality = null,
    ) {}
}
