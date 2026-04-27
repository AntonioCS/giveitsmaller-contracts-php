<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class AvailabilityEntry
{
    public function __construct(
        public readonly ?string $availability = null,
        public readonly ?string $required_tier = null,
        public readonly ?string $eta = null,
        public readonly ?string $documentation_url = null,
        public readonly ?string $sunset = null,
        public readonly string $description = '',
        public readonly ?ProcessingClassConstraints $constraints = null,
    ) {}
}
