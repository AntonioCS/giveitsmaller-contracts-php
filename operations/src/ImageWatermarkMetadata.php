<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class ImageWatermarkMetadata
{
    public static function instance(): OperationMetadata
    {
        return new OperationMetadata(
            features: [
                'multi_overlay_stack' => new FeatureEntry(
                    availability: 'planned',
                    description: 'Allow up to 8 overlay inputs per job (currently capped at 1 overlay). Per-overlay placement via per-input placement options. Backend support not yet confirmed; tagged planned. Scope is image-base only at the time this feature was specified; extension to GIF / video bases tracks alongside the corresponding mime_group `planned` → `stable` flips. ',
                ),
            ],
            mime_groups: [
                'image' => new MimeGroupMetadata(
                    processing_class: [],
                    per_mime_availability: [],
                    options: [
                        'anchor' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'margin_x' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'margin_y' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'opacity' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'overlay_width' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                    ],
                    per_input_options: [],
                ),
                'image_gif' => new MimeGroupMetadata(
                    availability: 'planned',
                    processing_class: [],
                    per_mime_availability: [],
                    options: [
                        'anchor' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'margin_x' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'margin_y' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'opacity' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'overlay_width' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                    ],
                    per_input_options: [],
                ),
                'image_tiff' => new MimeGroupMetadata(
                    processing_class: [],
                    per_mime_availability: [],
                    options: [
                        'anchor' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'margin_x' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'margin_y' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'opacity' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'overlay_width' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                    ],
                    per_input_options: [],
                ),
                'image_bmp' => new MimeGroupMetadata(
                    processing_class: [],
                    per_mime_availability: [],
                    options: [
                        'anchor' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'margin_x' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'margin_y' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'opacity' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'overlay_width' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                    ],
                    per_input_options: [],
                ),
            ],
        );
    }
}
