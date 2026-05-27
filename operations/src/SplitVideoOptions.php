<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class SplitVideoOptions
{
    /**
     * @param list<float>|null $cut_points
     */
    public function __construct(
        public readonly SplitVideoMode $mode = SplitVideoMode::Interval,
        public readonly SplitVideoPrecision $precision = SplitVideoPrecision::Fast,
        public readonly ?float $interval = null,
        public readonly ?int $count = null,
        public readonly ?array $cut_points = null,
    ) {}
}
