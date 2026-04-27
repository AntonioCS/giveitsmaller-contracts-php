<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class AudioWatermarkVideoOptions
{
    public function __construct(
        public readonly AudioWatermarkVideoMethod $method = AudioWatermarkVideoMethod::Auto,
        public readonly AudioWatermarkVideoRobustness $robustness = AudioWatermarkVideoRobustness::CompressionResistant,
        public readonly AudioWatermarkVideoDensity $density = AudioWatermarkVideoDensity::Normal,
        public readonly ?string $payload = null,
    ) {}
}
