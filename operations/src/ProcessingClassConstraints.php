<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class ProcessingClassConstraints
{
    public function __construct(
        public readonly ?string $max_input_duration = null,
        public readonly ?int $max_input_size_bytes = null,
        public readonly ?int $max_output_size_bytes = null,
        public readonly ?string $max_total_duration = null,
        public readonly ?int $max_total_input_size_bytes = null,
    ) {}
}
