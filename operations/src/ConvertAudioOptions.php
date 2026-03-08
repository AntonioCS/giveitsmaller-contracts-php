<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class ConvertAudioOptions
{
    public function __construct(
        public readonly ConvertAudioOutputFormat $output_format,
        public readonly ?ConvertAudioBitrate $bitrate = null,
    ) {}
}
