<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class OptionMetadata
{
    /**
     * @param array<string, AvailabilityEntry> $per_value_availability
     */
    public function __construct(
        public readonly array $per_value_availability = [],
        public readonly ?string $availability = null,
        public readonly ?string $required_tier = null,
    ) {}
}
