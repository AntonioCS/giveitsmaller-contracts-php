<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class AudioToVideoAudioOptions
{
    public function __construct(
        public readonly AudioToVideoAudioOutputResolution $output_resolution = AudioToVideoAudioOutputResolution::Hd720p,
        public readonly string $background_color = '#000000',
        public readonly AudioToVideoAudioImageFit $image_fit = AudioToVideoAudioImageFit::Contain,
        public readonly int $framerate = 2,
        public readonly AudioToVideoAudioOutputFormat $output_format = AudioToVideoAudioOutputFormat::Mp4,
    ) {}
}
