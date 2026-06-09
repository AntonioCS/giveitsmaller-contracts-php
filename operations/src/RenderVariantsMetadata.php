<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class RenderVariantsMetadata
{
    public static function instance(): OperationMetadata
    {
        return new OperationMetadata(
            availability: 'planned',
            features: [],
            mime_groups: [
                'image' => new MimeGroupMetadata(
                    availability: 'planned',
                    processing_class: [],
                    per_mime_availability: [],
                    options: [
                        'targets' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                    ],
                    per_input_options: [],
                ),
            ],
        );
    }
}
