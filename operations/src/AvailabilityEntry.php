<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class AvailabilityEntry
{
    /**
     * @param ?ProcessingClassConstraints $constraints Conservative BASELINE
     *   (floor) constraints for the processing class — NOT the per-tier cap.
     *   Higher tiers (e.g. Enterprise long-form) permit larger limits, but
     *   those per-tier values are server-owned + mutable and are deliberately
     *   NOT emitted into this typed binding (baking a mutable server policy
     *   into a version-pinned artifact would go stale; see ADR-0011). Do NOT
     *   preflight per-tier size/duration off this field — you will understate
     *   higher-tier caps. There is no read-ahead per-tier-cap API today
     *   (tracked as a follow-up). The caps that applied to a given upload are
     *   reported on a successful UploadResponse's constraints_applied; when a
     *   limit is exceeded the SDK raises its upload-cap-exceeded error (the
     *   413 absolute-cap path is a plain envelope with no typed payload).
     */
    public function __construct(
        public readonly ?string $availability = null,
        public readonly ?string $required_tier = null,
        public readonly ?string $eta = null,
        public readonly ?string $documentation_url = null,
        public readonly ?string $sunset = null,
        public readonly string $description = '',
        public readonly ?ProcessingClassConstraints $constraints = null,
    ) {}
}
