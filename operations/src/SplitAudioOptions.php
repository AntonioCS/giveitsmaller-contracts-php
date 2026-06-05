<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class SplitAudioOptions
{
    /**
     * @param list<float>|null $cut_points
     */
    public function __construct(
        public readonly SplitAudioMode $mode = SplitAudioMode::Interval,
        public readonly SplitAudioPrecision $precision = SplitAudioPrecision::Fast,
        public readonly ?float $interval = null,
        public readonly ?int $count = null,
        public readonly ?array $cut_points = null,
        public readonly ?float $silence_threshold_db = null,
        public readonly ?float $silence_min_duration = null,
        public readonly ?SplitAudioSilenceHandling $silence_handling = null,
    ) {}
}
