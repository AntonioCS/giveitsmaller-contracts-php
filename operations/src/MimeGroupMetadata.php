<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class MimeGroupMetadata
{
    /**
     * @param array<string, AvailabilityEntry> $processing_class
     * @param array<string, AvailabilityEntry> $per_mime_availability
     * @param array<string, OptionMetadata>    $options
     * @param array<string, OptionMetadata>    $per_input_options
     */
    public function __construct(
        public readonly array $processing_class = [],
        public readonly array $per_mime_availability = [],
        public readonly array $options = [],
        public readonly array $per_input_options = [],
        public readonly ?string $availability = null,
        public readonly ?string $required_tier = null,
    ) {}
}
