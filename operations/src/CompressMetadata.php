<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations;

final class CompressMetadata
{
    public static function instance(): OperationMetadata
    {
        return new OperationMetadata(
            features: [],
            mime_groups: [
                'image' => new MimeGroupMetadata(
                    processing_class: [],
                    per_mime_availability: [
                        'image/avif' => new AvailabilityEntry(
                            availability: 'beta',
                        ),
                    ],
                    options: [
                        'mode' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'quality' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'metadata' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'icc_profile' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'progressive' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'output_format' => new OptionMetadata(
                            per_value_availability: [
                                'auto' => new AvailabilityEntry(
                                    availability: 'planned',
                                ),
                                'smallest' => new AvailabilityEntry(
                                    availability: 'planned',
                                ),
                                'jpeg' => new AvailabilityEntry(
                                    availability: 'planned',
                                ),
                                'png' => new AvailabilityEntry(
                                    availability: 'planned',
                                ),
                                'avif' => new AvailabilityEntry(
                                    availability: 'planned',
                                ),
                            ],
                        ),
                    ],
                    per_input_options: [],
                ),
                'audio' => new MimeGroupMetadata(
                    processing_class: [],
                    per_mime_availability: [],
                    options: [
                        'output_format' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'bitrate' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'channels' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'sample_rate' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'normalize' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'trim_start' => new OptionMetadata(
                            availability: 'planned',
                            per_value_availability: [],
                        ),
                        'trim_end' => new OptionMetadata(
                            availability: 'planned',
                            per_value_availability: [],
                        ),
                    ],
                    per_input_options: [],
                ),
                'video' => new MimeGroupMetadata(
                    processing_class: [
                        'short_form' => new AvailabilityEntry(
                            availability: 'stable',
                            constraints: new ProcessingClassConstraints(
                                max_input_duration: 'PT5M',
                                max_input_size_bytes: 524288000,
                                max_output_size_bytes: 524288000,
                            ),
                        ),
                        'long_form' => new AvailabilityEntry(
                            availability: 'beta',
                            required_tier: 'pro',
                            constraints: new ProcessingClassConstraints(
                                max_input_duration: 'PT12H',
                                max_input_size_bytes: 5000000000,
                                max_output_size_bytes: 5000000000,
                            ),
                        ),
                    ],
                    per_mime_availability: [],
                    options: [
                        'output_format' => new OptionMetadata(
                            per_value_availability: [
                                'mp4' => new AvailabilityEntry(
                                    availability: 'planned',
                                ),
                                'webm' => new AvailabilityEntry(
                                    availability: 'planned',
                                ),
                                'ogg' => new AvailabilityEntry(
                                    availability: 'planned',
                                ),
                            ],
                        ),
                        'codec' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'encoding_mode' => new OptionMetadata(
                            per_value_availability: [
                                'target_size' => new AvailabilityEntry(
                                    availability: 'planned',
                                ),
                            ],
                        ),
                        'crf' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'target_size_bytes' => new OptionMetadata(
                            availability: 'planned',
                            per_value_availability: [],
                        ),
                        'preset' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'width' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'height' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'fit' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'fps' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'faststart' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'audio_codec' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'audio_bitrate' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'trim_start' => new OptionMetadata(
                            availability: 'planned',
                            per_value_availability: [],
                        ),
                        'trim_end' => new OptionMetadata(
                            availability: 'planned',
                            per_value_availability: [],
                        ),
                    ],
                    per_input_options: [],
                ),
                'document_pdf' => new MimeGroupMetadata(
                    processing_class: [],
                    per_mime_availability: [],
                    options: [
                        'profile' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'colorspace' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'pages' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'flatten_forms' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                    ],
                    per_input_options: [],
                ),
                'document_office' => new MimeGroupMetadata(
                    processing_class: [],
                    per_mime_availability: [],
                    options: [
                        'image_quality' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'strip_macros' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'strip_hidden_data' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'strip_unused_fonts' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                    ],
                    per_input_options: [],
                ),
                'document_odf' => new MimeGroupMetadata(
                    processing_class: [],
                    per_mime_availability: [],
                    options: [
                        'image_quality' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'strip_metadata' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'strip_unused_styles' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                    ],
                    per_input_options: [],
                ),
                'document_epub' => new MimeGroupMetadata(
                    processing_class: [],
                    per_mime_availability: [],
                    options: [
                        'image_quality' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'font_subsetting' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                        'strip_unused_css' => new OptionMetadata(
                            per_value_availability: [],
                        ),
                    ],
                    per_input_options: [],
                ),
            ],
        );
    }
}
