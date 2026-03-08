<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class ArchiveOptions
{
    public function __construct(
        public readonly ArchiveFormat $format = ArchiveFormat::Zip,
        public readonly ArchiveFolderStructure $folder_structure = ArchiveFolderStructure::Flat,
    ) {}
}
