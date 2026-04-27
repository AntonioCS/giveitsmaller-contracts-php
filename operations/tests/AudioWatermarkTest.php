<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations\Tests;

use PHPUnit\Framework\TestCase;
use Gisl\Generated\Operations\AudioWatermarkAudioDensity;
use Gisl\Generated\Operations\AudioWatermarkAudioMethod;
use Gisl\Generated\Operations\AudioWatermarkAudioOptions;
use Gisl\Generated\Operations\AudioWatermarkAudioRobustness;
use Gisl\Generated\Operations\AudioWatermarkVideoDensity;
use Gisl\Generated\Operations\AudioWatermarkVideoMethod;
use Gisl\Generated\Operations\AudioWatermarkVideoOptions;
use Gisl\Generated\Operations\AudioWatermarkVideoRobustness;

final class AudioWatermarkTest extends TestCase
{
    public function testAudioWatermarkAudioMethodAutoBackingValue(): void
    {
        $enum = AudioWatermarkAudioMethod::from('auto');
        $this->assertSame(AudioWatermarkAudioMethod::Auto, $enum);
        $this->assertSame('auto', $enum->value);
    }

    public function testAudioWatermarkAudioMethodPsychoacousticBackingValue(): void
    {
        $enum = AudioWatermarkAudioMethod::from('psychoacoustic');
        $this->assertSame(AudioWatermarkAudioMethod::Psychoacoustic, $enum);
        $this->assertSame('psychoacoustic', $enum->value);
    }

    public function testAudioWatermarkAudioMethodNeuralBackingValue(): void
    {
        $enum = AudioWatermarkAudioMethod::from('neural');
        $this->assertSame(AudioWatermarkAudioMethod::Neural, $enum);
        $this->assertSame('neural', $enum->value);
    }

    public function testAudioWatermarkAudioMethodCaseCount(): void
    {
        $this->assertCount(3, AudioWatermarkAudioMethod::cases());
    }

    public function testAudioWatermarkAudioRobustnessLightBackingValue(): void
    {
        $enum = AudioWatermarkAudioRobustness::from('light');
        $this->assertSame(AudioWatermarkAudioRobustness::Light, $enum);
        $this->assertSame('light', $enum->value);
    }

    public function testAudioWatermarkAudioRobustnessCompressionResistantBackingValue(): void
    {
        $enum = AudioWatermarkAudioRobustness::from('compression_resistant');
        $this->assertSame(AudioWatermarkAudioRobustness::CompressionResistant, $enum);
        $this->assertSame('compression_resistant', $enum->value);
    }

    public function testAudioWatermarkAudioRobustnessBroadcastGradeBackingValue(): void
    {
        $enum = AudioWatermarkAudioRobustness::from('broadcast_grade');
        $this->assertSame(AudioWatermarkAudioRobustness::BroadcastGrade, $enum);
        $this->assertSame('broadcast_grade', $enum->value);
    }

    public function testAudioWatermarkAudioRobustnessCaseCount(): void
    {
        $this->assertCount(3, AudioWatermarkAudioRobustness::cases());
    }

    public function testAudioWatermarkAudioDensitySparseBackingValue(): void
    {
        $enum = AudioWatermarkAudioDensity::from('sparse');
        $this->assertSame(AudioWatermarkAudioDensity::Sparse, $enum);
        $this->assertSame('sparse', $enum->value);
    }

    public function testAudioWatermarkAudioDensityNormalBackingValue(): void
    {
        $enum = AudioWatermarkAudioDensity::from('normal');
        $this->assertSame(AudioWatermarkAudioDensity::Normal, $enum);
        $this->assertSame('normal', $enum->value);
    }

    public function testAudioWatermarkAudioDensityDenseBackingValue(): void
    {
        $enum = AudioWatermarkAudioDensity::from('dense');
        $this->assertSame(AudioWatermarkAudioDensity::Dense, $enum);
        $this->assertSame('dense', $enum->value);
    }

    public function testAudioWatermarkAudioDensityCaseCount(): void
    {
        $this->assertCount(3, AudioWatermarkAudioDensity::cases());
    }

    public function testAudioWatermarkAudioOptionsDefaultConstruction(): void
    {
        $obj = new AudioWatermarkAudioOptions();
        $this->assertInstanceOf(AudioWatermarkAudioOptions::class, $obj);
        $this->assertSame(AudioWatermarkAudioMethod::Auto, $obj->method);
        $this->assertSame(AudioWatermarkAudioRobustness::CompressionResistant, $obj->robustness);
        $this->assertSame(AudioWatermarkAudioDensity::Normal, $obj->density);
        $this->assertNull($obj->payload);
    }

    public function testAudioWatermarkAudioOptionsFullConstruction(): void
    {
        $obj = new AudioWatermarkAudioOptions(
            payload: 'test_value',
            method: AudioWatermarkAudioMethod::Auto,
            robustness: AudioWatermarkAudioRobustness::Light,
            density: AudioWatermarkAudioDensity::Sparse,
        );
        $this->assertInstanceOf(AudioWatermarkAudioOptions::class, $obj);
    }

    public function testAudioWatermarkVideoMethodAutoBackingValue(): void
    {
        $enum = AudioWatermarkVideoMethod::from('auto');
        $this->assertSame(AudioWatermarkVideoMethod::Auto, $enum);
        $this->assertSame('auto', $enum->value);
    }

    public function testAudioWatermarkVideoMethodPsychoacousticBackingValue(): void
    {
        $enum = AudioWatermarkVideoMethod::from('psychoacoustic');
        $this->assertSame(AudioWatermarkVideoMethod::Psychoacoustic, $enum);
        $this->assertSame('psychoacoustic', $enum->value);
    }

    public function testAudioWatermarkVideoMethodNeuralBackingValue(): void
    {
        $enum = AudioWatermarkVideoMethod::from('neural');
        $this->assertSame(AudioWatermarkVideoMethod::Neural, $enum);
        $this->assertSame('neural', $enum->value);
    }

    public function testAudioWatermarkVideoMethodCaseCount(): void
    {
        $this->assertCount(3, AudioWatermarkVideoMethod::cases());
    }

    public function testAudioWatermarkVideoRobustnessLightBackingValue(): void
    {
        $enum = AudioWatermarkVideoRobustness::from('light');
        $this->assertSame(AudioWatermarkVideoRobustness::Light, $enum);
        $this->assertSame('light', $enum->value);
    }

    public function testAudioWatermarkVideoRobustnessCompressionResistantBackingValue(): void
    {
        $enum = AudioWatermarkVideoRobustness::from('compression_resistant');
        $this->assertSame(AudioWatermarkVideoRobustness::CompressionResistant, $enum);
        $this->assertSame('compression_resistant', $enum->value);
    }

    public function testAudioWatermarkVideoRobustnessBroadcastGradeBackingValue(): void
    {
        $enum = AudioWatermarkVideoRobustness::from('broadcast_grade');
        $this->assertSame(AudioWatermarkVideoRobustness::BroadcastGrade, $enum);
        $this->assertSame('broadcast_grade', $enum->value);
    }

    public function testAudioWatermarkVideoRobustnessCaseCount(): void
    {
        $this->assertCount(3, AudioWatermarkVideoRobustness::cases());
    }

    public function testAudioWatermarkVideoDensitySparseBackingValue(): void
    {
        $enum = AudioWatermarkVideoDensity::from('sparse');
        $this->assertSame(AudioWatermarkVideoDensity::Sparse, $enum);
        $this->assertSame('sparse', $enum->value);
    }

    public function testAudioWatermarkVideoDensityNormalBackingValue(): void
    {
        $enum = AudioWatermarkVideoDensity::from('normal');
        $this->assertSame(AudioWatermarkVideoDensity::Normal, $enum);
        $this->assertSame('normal', $enum->value);
    }

    public function testAudioWatermarkVideoDensityDenseBackingValue(): void
    {
        $enum = AudioWatermarkVideoDensity::from('dense');
        $this->assertSame(AudioWatermarkVideoDensity::Dense, $enum);
        $this->assertSame('dense', $enum->value);
    }

    public function testAudioWatermarkVideoDensityCaseCount(): void
    {
        $this->assertCount(3, AudioWatermarkVideoDensity::cases());
    }

    public function testAudioWatermarkVideoOptionsDefaultConstruction(): void
    {
        $obj = new AudioWatermarkVideoOptions();
        $this->assertInstanceOf(AudioWatermarkVideoOptions::class, $obj);
        $this->assertSame(AudioWatermarkVideoMethod::Auto, $obj->method);
        $this->assertSame(AudioWatermarkVideoRobustness::CompressionResistant, $obj->robustness);
        $this->assertSame(AudioWatermarkVideoDensity::Normal, $obj->density);
        $this->assertNull($obj->payload);
    }

    public function testAudioWatermarkVideoOptionsFullConstruction(): void
    {
        $obj = new AudioWatermarkVideoOptions(
            payload: 'test_value',
            method: AudioWatermarkVideoMethod::Auto,
            robustness: AudioWatermarkVideoRobustness::Light,
            density: AudioWatermarkVideoDensity::Sparse,
        );
        $this->assertInstanceOf(AudioWatermarkVideoOptions::class, $obj);
    }

}
