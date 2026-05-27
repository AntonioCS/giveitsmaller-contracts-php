<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations\Tests;

use PHPUnit\Framework\TestCase;
use Gisl\Generated\Operations\AudioToVideoAudioImageFit;
use Gisl\Generated\Operations\AudioToVideoAudioOptions;
use Gisl\Generated\Operations\AudioToVideoAudioOutputFormat;
use Gisl\Generated\Operations\AudioToVideoAudioOutputResolution;

final class AudioToVideoTest extends TestCase
{
    public function testAudioToVideoAudioOutputResolutionHd720pBackingValue(): void
    {
        $enum = AudioToVideoAudioOutputResolution::from('hd_720p');
        $this->assertSame(AudioToVideoAudioOutputResolution::Hd720p, $enum);
        $this->assertSame('hd_720p', $enum->value);
    }

    public function testAudioToVideoAudioOutputResolutionFhd1080pBackingValue(): void
    {
        $enum = AudioToVideoAudioOutputResolution::from('fhd_1080p');
        $this->assertSame(AudioToVideoAudioOutputResolution::Fhd1080p, $enum);
        $this->assertSame('fhd_1080p', $enum->value);
    }

    public function testAudioToVideoAudioOutputResolutionSd480pBackingValue(): void
    {
        $enum = AudioToVideoAudioOutputResolution::from('sd_480p');
        $this->assertSame(AudioToVideoAudioOutputResolution::Sd480p, $enum);
        $this->assertSame('sd_480p', $enum->value);
    }

    public function testAudioToVideoAudioOutputResolutionCaseCount(): void
    {
        $this->assertCount(3, AudioToVideoAudioOutputResolution::cases());
    }

    public function testAudioToVideoAudioImageFitContainBackingValue(): void
    {
        $enum = AudioToVideoAudioImageFit::from('contain');
        $this->assertSame(AudioToVideoAudioImageFit::Contain, $enum);
        $this->assertSame('contain', $enum->value);
    }

    public function testAudioToVideoAudioImageFitCoverBackingValue(): void
    {
        $enum = AudioToVideoAudioImageFit::from('cover');
        $this->assertSame(AudioToVideoAudioImageFit::Cover, $enum);
        $this->assertSame('cover', $enum->value);
    }

    public function testAudioToVideoAudioImageFitStretchBackingValue(): void
    {
        $enum = AudioToVideoAudioImageFit::from('stretch');
        $this->assertSame(AudioToVideoAudioImageFit::Stretch, $enum);
        $this->assertSame('stretch', $enum->value);
    }

    public function testAudioToVideoAudioImageFitCaseCount(): void
    {
        $this->assertCount(3, AudioToVideoAudioImageFit::cases());
    }

    public function testAudioToVideoAudioOutputFormatMp4BackingValue(): void
    {
        $enum = AudioToVideoAudioOutputFormat::from('mp4');
        $this->assertSame(AudioToVideoAudioOutputFormat::Mp4, $enum);
        $this->assertSame('mp4', $enum->value);
    }

    public function testAudioToVideoAudioOutputFormatCaseCount(): void
    {
        $this->assertCount(1, AudioToVideoAudioOutputFormat::cases());
    }

    public function testAudioToVideoAudioOptionsDefaultConstruction(): void
    {
        $obj = new AudioToVideoAudioOptions();
        $this->assertInstanceOf(AudioToVideoAudioOptions::class, $obj);
        $this->assertSame(AudioToVideoAudioOutputResolution::Hd720p, $obj->output_resolution);
        $this->assertSame('#000000', $obj->background_color);
        $this->assertSame(AudioToVideoAudioImageFit::Contain, $obj->image_fit);
        $this->assertSame(2, $obj->framerate);
        $this->assertSame(AudioToVideoAudioOutputFormat::Mp4, $obj->output_format);
    }

    public function testAudioToVideoAudioOptionsFullConstruction(): void
    {
        $obj = new AudioToVideoAudioOptions(
            output_resolution: AudioToVideoAudioOutputResolution::Hd720p,
            background_color: 'test_value',
            image_fit: AudioToVideoAudioImageFit::Contain,
            framerate: 1,
            output_format: AudioToVideoAudioOutputFormat::Mp4,
        );
        $this->assertInstanceOf(AudioToVideoAudioOptions::class, $obj);
    }

}
