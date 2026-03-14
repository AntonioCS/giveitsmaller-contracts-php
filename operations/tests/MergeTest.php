<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations\Tests;

use PHPUnit\Framework\TestCase;
use Gisl\Generated\Operations\MergeAudioOptions;
use Gisl\Generated\Operations\MergeAudioPerInputOptions;
use Gisl\Generated\Operations\MergeAudioTransition;
use Gisl\Generated\Operations\MergeDocumentOptions;
use Gisl\Generated\Operations\MergeDocumentPerInputOptions;
use Gisl\Generated\Operations\MergeImageImageFormat;
use Gisl\Generated\Operations\MergeImageLayout;
use Gisl\Generated\Operations\MergeImageOptions;
use Gisl\Generated\Operations\MergeImageOutputType;
use Gisl\Generated\Operations\MergeImageResizeMode;
use Gisl\Generated\Operations\MergeImageTransition;
use Gisl\Generated\Operations\MergeImageVideoFormat;
use Gisl\Generated\Operations\MergeVideoOptions;
use Gisl\Generated\Operations\MergeVideoPerInputOptions;
use Gisl\Generated\Operations\MergeVideoTransition;

final class MergeTest extends TestCase
{
    public function testMergeImageOutputTypeImageBackingValue(): void
    {
        $enum = MergeImageOutputType::from('image');
        $this->assertSame(MergeImageOutputType::Image, $enum);
        $this->assertSame('image', $enum->value);
    }

    public function testMergeImageOutputTypeGifBackingValue(): void
    {
        $enum = MergeImageOutputType::from('gif');
        $this->assertSame(MergeImageOutputType::Gif, $enum);
        $this->assertSame('gif', $enum->value);
    }

    public function testMergeImageOutputTypeVideoBackingValue(): void
    {
        $enum = MergeImageOutputType::from('video');
        $this->assertSame(MergeImageOutputType::Video, $enum);
        $this->assertSame('video', $enum->value);
    }

    public function testMergeImageOutputTypeCaseCount(): void
    {
        $this->assertCount(3, MergeImageOutputType::cases());
    }

    public function testMergeImageLayoutGridBackingValue(): void
    {
        $enum = MergeImageLayout::from('grid');
        $this->assertSame(MergeImageLayout::Grid, $enum);
        $this->assertSame('grid', $enum->value);
    }

    public function testMergeImageLayoutHorizontalBackingValue(): void
    {
        $enum = MergeImageLayout::from('horizontal');
        $this->assertSame(MergeImageLayout::Horizontal, $enum);
        $this->assertSame('horizontal', $enum->value);
    }

    public function testMergeImageLayoutVerticalBackingValue(): void
    {
        $enum = MergeImageLayout::from('vertical');
        $this->assertSame(MergeImageLayout::Vertical, $enum);
        $this->assertSame('vertical', $enum->value);
    }

    public function testMergeImageLayoutCaseCount(): void
    {
        $this->assertCount(3, MergeImageLayout::cases());
    }

    public function testMergeImageResizeModeFitBackingValue(): void
    {
        $enum = MergeImageResizeMode::from('fit');
        $this->assertSame(MergeImageResizeMode::Fit, $enum);
        $this->assertSame('fit', $enum->value);
    }

    public function testMergeImageResizeModeFillBackingValue(): void
    {
        $enum = MergeImageResizeMode::from('fill');
        $this->assertSame(MergeImageResizeMode::Fill, $enum);
        $this->assertSame('fill', $enum->value);
    }

    public function testMergeImageResizeModeNoneBackingValue(): void
    {
        $enum = MergeImageResizeMode::from('none');
        $this->assertSame(MergeImageResizeMode::None, $enum);
        $this->assertSame('none', $enum->value);
    }

    public function testMergeImageResizeModeCaseCount(): void
    {
        $this->assertCount(3, MergeImageResizeMode::cases());
    }

    public function testMergeImageImageFormatJpegBackingValue(): void
    {
        $enum = MergeImageImageFormat::from('jpeg');
        $this->assertSame(MergeImageImageFormat::Jpeg, $enum);
        $this->assertSame('jpeg', $enum->value);
    }

    public function testMergeImageImageFormatPngBackingValue(): void
    {
        $enum = MergeImageImageFormat::from('png');
        $this->assertSame(MergeImageImageFormat::Png, $enum);
        $this->assertSame('png', $enum->value);
    }

    public function testMergeImageImageFormatWebpBackingValue(): void
    {
        $enum = MergeImageImageFormat::from('webp');
        $this->assertSame(MergeImageImageFormat::Webp, $enum);
        $this->assertSame('webp', $enum->value);
    }

    public function testMergeImageImageFormatCaseCount(): void
    {
        $this->assertCount(3, MergeImageImageFormat::cases());
    }

    public function testMergeImageTransitionNoneBackingValue(): void
    {
        $enum = MergeImageTransition::from('none');
        $this->assertSame(MergeImageTransition::None, $enum);
        $this->assertSame('none', $enum->value);
    }

    public function testMergeImageTransitionFadeBackingValue(): void
    {
        $enum = MergeImageTransition::from('fade');
        $this->assertSame(MergeImageTransition::Fade, $enum);
        $this->assertSame('fade', $enum->value);
    }

    public function testMergeImageTransitionSlideBackingValue(): void
    {
        $enum = MergeImageTransition::from('slide');
        $this->assertSame(MergeImageTransition::Slide, $enum);
        $this->assertSame('slide', $enum->value);
    }

    public function testMergeImageTransitionCaseCount(): void
    {
        $this->assertCount(3, MergeImageTransition::cases());
    }

    public function testMergeImageVideoFormatMp4BackingValue(): void
    {
        $enum = MergeImageVideoFormat::from('mp4');
        $this->assertSame(MergeImageVideoFormat::Mp4, $enum);
        $this->assertSame('mp4', $enum->value);
    }

    public function testMergeImageVideoFormatWebmBackingValue(): void
    {
        $enum = MergeImageVideoFormat::from('webm');
        $this->assertSame(MergeImageVideoFormat::Webm, $enum);
        $this->assertSame('webm', $enum->value);
    }

    public function testMergeImageVideoFormatCaseCount(): void
    {
        $this->assertCount(2, MergeImageVideoFormat::cases());
    }

    public function testMergeImageOptionsDefaultConstruction(): void
    {
        $obj = new MergeImageOptions();
        $this->assertInstanceOf(MergeImageOptions::class, $obj);
        $this->assertSame(MergeImageOutputType::Image, $obj->output_type);
        $this->assertNull($obj->layout);
        $this->assertNull($obj->columns);
        $this->assertNull($obj->resize_mode);
        $this->assertNull($obj->spacing);
        $this->assertNull($obj->background);
        $this->assertNull($obj->image_format);
        $this->assertNull($obj->delay);
        $this->assertNull($obj->loop_count);
        $this->assertNull($obj->duration_per_image);
        $this->assertNull($obj->transition);
        $this->assertNull($obj->transition_duration);
        $this->assertNull($obj->fps);
        $this->assertNull($obj->video_format);
    }

    public function testMergeImageOptionsFullConstruction(): void
    {
        $obj = new MergeImageOptions(
            output_type: MergeImageOutputType::Image,
            layout: MergeImageLayout::Grid,
            columns: 1,
            resize_mode: MergeImageResizeMode::Fit,
            spacing: 0,
            background: 'test_value',
            image_format: MergeImageImageFormat::Jpeg,
            delay: 10,
            loop_count: 0,
            duration_per_image: 0.5,
            transition: MergeImageTransition::None,
            transition_duration: 0.1,
            fps: 1,
            video_format: MergeImageVideoFormat::Mp4,
        );
        $this->assertInstanceOf(MergeImageOptions::class, $obj);
    }

    public function testMergeVideoTransitionNoneBackingValue(): void
    {
        $enum = MergeVideoTransition::from('none');
        $this->assertSame(MergeVideoTransition::None, $enum);
        $this->assertSame('none', $enum->value);
    }

    public function testMergeVideoTransitionCrossfadeBackingValue(): void
    {
        $enum = MergeVideoTransition::from('crossfade');
        $this->assertSame(MergeVideoTransition::Crossfade, $enum);
        $this->assertSame('crossfade', $enum->value);
    }

    public function testMergeVideoTransitionCaseCount(): void
    {
        $this->assertCount(2, MergeVideoTransition::cases());
    }

    public function testMergeVideoOptionsDefaultConstruction(): void
    {
        $obj = new MergeVideoOptions();
        $this->assertInstanceOf(MergeVideoOptions::class, $obj);
        $this->assertSame(MergeVideoTransition::None, $obj->transition);
        $this->assertSame(true, $obj->normalize_audio);
        $this->assertNull($obj->crossfade_duration);
    }

    public function testMergeVideoOptionsFullConstruction(): void
    {
        $obj = new MergeVideoOptions(
            transition: MergeVideoTransition::None,
            crossfade_duration: 0.1,
            normalize_audio: true,
        );
        $this->assertInstanceOf(MergeVideoOptions::class, $obj);
    }

    public function testMergeVideoPerInputOptionsDefaultConstruction(): void
    {
        $obj = new MergeVideoPerInputOptions();
        $this->assertInstanceOf(MergeVideoPerInputOptions::class, $obj);
        $this->assertNull($obj->transition);
        $this->assertNull($obj->crossfade_duration);
    }

    public function testMergeVideoPerInputOptionsFullConstruction(): void
    {
        $obj = new MergeVideoPerInputOptions(
            transition: MergeVideoTransition::None,
            crossfade_duration: 0.1,
        );
        $this->assertInstanceOf(MergeVideoPerInputOptions::class, $obj);
    }

    public function testMergeAudioTransitionNoneBackingValue(): void
    {
        $enum = MergeAudioTransition::from('none');
        $this->assertSame(MergeAudioTransition::None, $enum);
        $this->assertSame('none', $enum->value);
    }

    public function testMergeAudioTransitionCrossfadeBackingValue(): void
    {
        $enum = MergeAudioTransition::from('crossfade');
        $this->assertSame(MergeAudioTransition::Crossfade, $enum);
        $this->assertSame('crossfade', $enum->value);
    }

    public function testMergeAudioTransitionCaseCount(): void
    {
        $this->assertCount(2, MergeAudioTransition::cases());
    }

    public function testMergeAudioOptionsDefaultConstruction(): void
    {
        $obj = new MergeAudioOptions();
        $this->assertInstanceOf(MergeAudioOptions::class, $obj);
        $this->assertSame(MergeAudioTransition::None, $obj->transition);
        $this->assertSame(0.0, $obj->gap_duration);
        $this->assertSame(true, $obj->normalize_audio);
        $this->assertNull($obj->crossfade_duration);
    }

    public function testMergeAudioOptionsFullConstruction(): void
    {
        $obj = new MergeAudioOptions(
            transition: MergeAudioTransition::None,
            crossfade_duration: 0.0,
            gap_duration: 0.0,
            normalize_audio: true,
        );
        $this->assertInstanceOf(MergeAudioOptions::class, $obj);
    }

    public function testMergeAudioPerInputOptionsDefaultConstruction(): void
    {
        $obj = new MergeAudioPerInputOptions();
        $this->assertInstanceOf(MergeAudioPerInputOptions::class, $obj);
        $this->assertNull($obj->transition);
        $this->assertNull($obj->crossfade_duration);
        $this->assertNull($obj->gap_duration);
    }

    public function testMergeAudioPerInputOptionsFullConstruction(): void
    {
        $obj = new MergeAudioPerInputOptions(
            transition: MergeAudioTransition::None,
            crossfade_duration: 0.0,
            gap_duration: 0.0,
        );
        $this->assertInstanceOf(MergeAudioPerInputOptions::class, $obj);
    }

    public function testMergeDocumentOptionsDefaultConstruction(): void
    {
        $obj = new MergeDocumentOptions();
        $this->assertInstanceOf(MergeDocumentOptions::class, $obj);
        $this->assertNull($obj->page_range);
    }

    public function testMergeDocumentOptionsFullConstruction(): void
    {
        $obj = new MergeDocumentOptions(
            page_range: 'test_value',
        );
        $this->assertInstanceOf(MergeDocumentOptions::class, $obj);
    }

    public function testMergeDocumentPerInputOptionsDefaultConstruction(): void
    {
        $obj = new MergeDocumentPerInputOptions();
        $this->assertInstanceOf(MergeDocumentPerInputOptions::class, $obj);
        $this->assertNull($obj->page_range);
    }

    public function testMergeDocumentPerInputOptionsFullConstruction(): void
    {
        $obj = new MergeDocumentPerInputOptions(
            page_range: 'test_value',
        );
        $this->assertInstanceOf(MergeDocumentPerInputOptions::class, $obj);
    }

}
