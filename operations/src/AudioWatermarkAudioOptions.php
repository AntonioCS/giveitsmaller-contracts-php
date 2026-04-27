<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class AudioWatermarkAudioOptions
{
    public function __construct(
        public readonly AudioWatermarkAudioMethod $method = AudioWatermarkAudioMethod::Auto,
        public readonly AudioWatermarkAudioRobustness $robustness = AudioWatermarkAudioRobustness::CompressionResistant,
        public readonly AudioWatermarkAudioDensity $density = AudioWatermarkAudioDensity::Normal,
        public readonly ?string $payload = null,
    ) {}
}
