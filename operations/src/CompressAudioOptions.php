<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class CompressAudioOptions
{
    public function __construct(
        public readonly CompressAudioOutputFormat $output_format = CompressAudioOutputFormat::Original,
        public readonly CompressAudioBitrate $bitrate = CompressAudioBitrate::_128,
        public readonly bool $normalize = false,
        public readonly ?int $channels = null,
        public readonly ?CompressAudioSampleRate $sample_rate = null,
        public readonly ?float $trim_start = null,
        public readonly ?float $trim_end = null,
    ) {}
}
