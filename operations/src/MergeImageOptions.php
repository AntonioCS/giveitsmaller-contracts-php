<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class MergeImageOptions
{
    public function __construct(
        public readonly MergeImageOutputType $output_type,
        public readonly ?int $delay = null,
        public readonly ?int $loop_count = null,
        public readonly ?float $duration_per_image = null,
        public readonly ?MergeImageTransition $transition = null,
        public readonly ?float $transition_duration = null,
        public readonly ?int $fps = null,
        public readonly ?MergeImageVideoFormat $video_format = null,
    ) {}
}
