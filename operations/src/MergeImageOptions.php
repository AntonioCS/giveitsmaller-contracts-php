<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class MergeImageOptions
{
    public function __construct(
        public readonly MergeImageOutputType $output_type = MergeImageOutputType::Image,
        public readonly ?MergeImageLayout $layout = null,
        public readonly ?int $columns = null,
        public readonly ?MergeImageResizeMode $resize_mode = null,
        public readonly ?int $spacing = null,
        public readonly ?string $background = null,
        public readonly ?MergeImageImageFormat $image_format = null,
        public readonly ?int $delay = null,
        public readonly ?int $loop_count = null,
        public readonly ?float $duration_per_image = null,
        public readonly ?MergeImageTransition $transition = null,
        public readonly ?float $transition_duration = null,
        public readonly ?int $fps = null,
        public readonly ?MergeImageVideoFormat $video_format = null,
    ) {}
}
