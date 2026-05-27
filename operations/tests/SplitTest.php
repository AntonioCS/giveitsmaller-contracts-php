<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations\Tests;

use PHPUnit\Framework\TestCase;
use Gisl\Generated\Operations\SplitAudioMode;
use Gisl\Generated\Operations\SplitAudioOptions;
use Gisl\Generated\Operations\SplitAudioPrecision;
use Gisl\Generated\Operations\SplitDocumentPdfMode;
use Gisl\Generated\Operations\SplitDocumentPdfOptions;
use Gisl\Generated\Operations\SplitImageGifOptions;
use Gisl\Generated\Operations\SplitImageGifOutputFormat;
use Gisl\Generated\Operations\SplitVideoMode;
use Gisl\Generated\Operations\SplitVideoOptions;
use Gisl\Generated\Operations\SplitVideoPrecision;

final class SplitTest extends TestCase
{
    public function testSplitImageGifOutputFormatPngBackingValue(): void
    {
        $enum = SplitImageGifOutputFormat::from('png');
        $this->assertSame(SplitImageGifOutputFormat::Png, $enum);
        $this->assertSame('png', $enum->value);
    }

    public function testSplitImageGifOutputFormatWebpBackingValue(): void
    {
        $enum = SplitImageGifOutputFormat::from('webp');
        $this->assertSame(SplitImageGifOutputFormat::Webp, $enum);
        $this->assertSame('webp', $enum->value);
    }

    public function testSplitImageGifOutputFormatJpgBackingValue(): void
    {
        $enum = SplitImageGifOutputFormat::from('jpg');
        $this->assertSame(SplitImageGifOutputFormat::Jpg, $enum);
        $this->assertSame('jpg', $enum->value);
    }

    public function testSplitImageGifOutputFormatCaseCount(): void
    {
        $this->assertCount(3, SplitImageGifOutputFormat::cases());
    }

    public function testSplitImageGifOptionsDefaultConstruction(): void
    {
        $obj = new SplitImageGifOptions(
            frame_range: 'test_value',
        );
        $this->assertInstanceOf(SplitImageGifOptions::class, $obj);
        $this->assertSame(SplitImageGifOutputFormat::Png, $obj->output_format);
    }

    public function testSplitImageGifOptionsFullConstruction(): void
    {
        $obj = new SplitImageGifOptions(
            frame_range: 'test_value',
            output_format: SplitImageGifOutputFormat::Png,
        );
        $this->assertInstanceOf(SplitImageGifOptions::class, $obj);
    }

    public function testSplitDocumentPdfModePageRangeBackingValue(): void
    {
        $enum = SplitDocumentPdfMode::from('page_range');
        $this->assertSame(SplitDocumentPdfMode::PageRange, $enum);
        $this->assertSame('page_range', $enum->value);
    }

    public function testSplitDocumentPdfModePageGroupsBackingValue(): void
    {
        $enum = SplitDocumentPdfMode::from('page_groups');
        $this->assertSame(SplitDocumentPdfMode::PageGroups, $enum);
        $this->assertSame('page_groups', $enum->value);
    }

    public function testSplitDocumentPdfModeCaseCount(): void
    {
        $this->assertCount(2, SplitDocumentPdfMode::cases());
    }

    public function testSplitDocumentPdfOptionsDefaultConstruction(): void
    {
        $obj = new SplitDocumentPdfOptions();
        $this->assertInstanceOf(SplitDocumentPdfOptions::class, $obj);
        $this->assertSame(SplitDocumentPdfMode::PageRange, $obj->mode);
        $this->assertNull($obj->page_range);
        $this->assertNull($obj->page_groups);
    }

    public function testSplitDocumentPdfOptionsFullConstruction(): void
    {
        $obj = new SplitDocumentPdfOptions(
            mode: SplitDocumentPdfMode::PageRange,
            page_range: 'test_value',
            page_groups: 2,
        );
        $this->assertInstanceOf(SplitDocumentPdfOptions::class, $obj);
    }

    public function testSplitAudioModeIntervalBackingValue(): void
    {
        $enum = SplitAudioMode::from('interval');
        $this->assertSame(SplitAudioMode::Interval, $enum);
        $this->assertSame('interval', $enum->value);
    }

    public function testSplitAudioModeCountBackingValue(): void
    {
        $enum = SplitAudioMode::from('count');
        $this->assertSame(SplitAudioMode::Count, $enum);
        $this->assertSame('count', $enum->value);
    }

    public function testSplitAudioModeCutPointsBackingValue(): void
    {
        $enum = SplitAudioMode::from('cut_points');
        $this->assertSame(SplitAudioMode::CutPoints, $enum);
        $this->assertSame('cut_points', $enum->value);
    }

    public function testSplitAudioModeCaseCount(): void
    {
        $this->assertCount(3, SplitAudioMode::cases());
    }

    public function testSplitAudioPrecisionFastBackingValue(): void
    {
        $enum = SplitAudioPrecision::from('fast');
        $this->assertSame(SplitAudioPrecision::Fast, $enum);
        $this->assertSame('fast', $enum->value);
    }

    public function testSplitAudioPrecisionExactBackingValue(): void
    {
        $enum = SplitAudioPrecision::from('exact');
        $this->assertSame(SplitAudioPrecision::Exact, $enum);
        $this->assertSame('exact', $enum->value);
    }

    public function testSplitAudioPrecisionCaseCount(): void
    {
        $this->assertCount(2, SplitAudioPrecision::cases());
    }

    public function testSplitAudioOptionsDefaultConstruction(): void
    {
        $obj = new SplitAudioOptions();
        $this->assertInstanceOf(SplitAudioOptions::class, $obj);
        $this->assertSame(SplitAudioMode::Interval, $obj->mode);
        $this->assertSame(SplitAudioPrecision::Fast, $obj->precision);
        $this->assertNull($obj->interval);
        $this->assertNull($obj->count);
        $this->assertNull($obj->cut_points);
    }

    public function testSplitAudioOptionsFullConstruction(): void
    {
        $obj = new SplitAudioOptions(
            mode: SplitAudioMode::Interval,
            interval: 0.001,
            count: 2,
            cut_points: [1.0],
            precision: SplitAudioPrecision::Fast,
        );
        $this->assertInstanceOf(SplitAudioOptions::class, $obj);
    }

    public function testSplitVideoModeIntervalBackingValue(): void
    {
        $enum = SplitVideoMode::from('interval');
        $this->assertSame(SplitVideoMode::Interval, $enum);
        $this->assertSame('interval', $enum->value);
    }

    public function testSplitVideoModeCountBackingValue(): void
    {
        $enum = SplitVideoMode::from('count');
        $this->assertSame(SplitVideoMode::Count, $enum);
        $this->assertSame('count', $enum->value);
    }

    public function testSplitVideoModeCutPointsBackingValue(): void
    {
        $enum = SplitVideoMode::from('cut_points');
        $this->assertSame(SplitVideoMode::CutPoints, $enum);
        $this->assertSame('cut_points', $enum->value);
    }

    public function testSplitVideoModeCaseCount(): void
    {
        $this->assertCount(3, SplitVideoMode::cases());
    }

    public function testSplitVideoPrecisionFastBackingValue(): void
    {
        $enum = SplitVideoPrecision::from('fast');
        $this->assertSame(SplitVideoPrecision::Fast, $enum);
        $this->assertSame('fast', $enum->value);
    }

    public function testSplitVideoPrecisionExactBackingValue(): void
    {
        $enum = SplitVideoPrecision::from('exact');
        $this->assertSame(SplitVideoPrecision::Exact, $enum);
        $this->assertSame('exact', $enum->value);
    }

    public function testSplitVideoPrecisionCaseCount(): void
    {
        $this->assertCount(2, SplitVideoPrecision::cases());
    }

    public function testSplitVideoOptionsDefaultConstruction(): void
    {
        $obj = new SplitVideoOptions();
        $this->assertInstanceOf(SplitVideoOptions::class, $obj);
        $this->assertSame(SplitVideoMode::Interval, $obj->mode);
        $this->assertSame(SplitVideoPrecision::Fast, $obj->precision);
        $this->assertNull($obj->interval);
        $this->assertNull($obj->count);
        $this->assertNull($obj->cut_points);
    }

    public function testSplitVideoOptionsFullConstruction(): void
    {
        $obj = new SplitVideoOptions(
            mode: SplitVideoMode::Interval,
            interval: 0.001,
            count: 2,
            cut_points: [1.0],
            precision: SplitVideoPrecision::Fast,
        );
        $this->assertInstanceOf(SplitVideoOptions::class, $obj);
    }

}
