<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations\Tests;

use PHPUnit\Framework\TestCase;
use Gisl\Generated\Operations\CompressAudioBitrate;
use Gisl\Generated\Operations\CompressAudioOptions;
use Gisl\Generated\Operations\CompressAudioOutputFormat;
use Gisl\Generated\Operations\CompressAudioSampleRate;
use Gisl\Generated\Operations\CompressDocumentEpubOptions;
use Gisl\Generated\Operations\CompressDocumentOdfOptions;
use Gisl\Generated\Operations\CompressDocumentOfficeOptions;
use Gisl\Generated\Operations\CompressDocumentPdfColorspace;
use Gisl\Generated\Operations\CompressDocumentPdfOptions;
use Gisl\Generated\Operations\CompressDocumentPdfProfile;
use Gisl\Generated\Operations\CompressImageIccProfile;
use Gisl\Generated\Operations\CompressImageMetadata;
use Gisl\Generated\Operations\CompressImageMode;
use Gisl\Generated\Operations\CompressImageOptions;
use Gisl\Generated\Operations\CompressImageOutputFormat;
use Gisl\Generated\Operations\CompressVideoAudioBitrate;
use Gisl\Generated\Operations\CompressVideoAudioCodec;
use Gisl\Generated\Operations\CompressVideoCodec;
use Gisl\Generated\Operations\CompressVideoEncodingMode;
use Gisl\Generated\Operations\CompressVideoFit;
use Gisl\Generated\Operations\CompressVideoOptions;
use Gisl\Generated\Operations\CompressVideoPreset;

final class CompressTest extends TestCase
{
    public function testCompressImageModeLossyBackingValue(): void
    {
        $enum = CompressImageMode::from('lossy');
        $this->assertSame(CompressImageMode::Lossy, $enum);
        $this->assertSame('lossy', $enum->value);
    }

    public function testCompressImageModeLosslessBackingValue(): void
    {
        $enum = CompressImageMode::from('lossless');
        $this->assertSame(CompressImageMode::Lossless, $enum);
        $this->assertSame('lossless', $enum->value);
    }

    public function testCompressImageModeAutoBackingValue(): void
    {
        $enum = CompressImageMode::from('auto');
        $this->assertSame(CompressImageMode::Auto, $enum);
        $this->assertSame('auto', $enum->value);
    }

    public function testCompressImageModeCaseCount(): void
    {
        $this->assertCount(3, CompressImageMode::cases());
    }

    public function testCompressImageMetadataAllBackingValue(): void
    {
        $enum = CompressImageMetadata::from('all');
        $this->assertSame(CompressImageMetadata::All, $enum);
        $this->assertSame('all', $enum->value);
    }

    public function testCompressImageMetadataNoneBackingValue(): void
    {
        $enum = CompressImageMetadata::from('none');
        $this->assertSame(CompressImageMetadata::None, $enum);
        $this->assertSame('none', $enum->value);
    }

    public function testCompressImageMetadataCopyrightBackingValue(): void
    {
        $enum = CompressImageMetadata::from('copyright');
        $this->assertSame(CompressImageMetadata::Copyright, $enum);
        $this->assertSame('copyright', $enum->value);
    }

    public function testCompressImageMetadataSensitiveBackingValue(): void
    {
        $enum = CompressImageMetadata::from('sensitive');
        $this->assertSame(CompressImageMetadata::Sensitive, $enum);
        $this->assertSame('sensitive', $enum->value);
    }

    public function testCompressImageMetadataCaseCount(): void
    {
        $this->assertCount(4, CompressImageMetadata::cases());
    }

    public function testCompressImageIccProfilePreserveBackingValue(): void
    {
        $enum = CompressImageIccProfile::from('preserve');
        $this->assertSame(CompressImageIccProfile::Preserve, $enum);
        $this->assertSame('preserve', $enum->value);
    }

    public function testCompressImageIccProfileStripBackingValue(): void
    {
        $enum = CompressImageIccProfile::from('strip');
        $this->assertSame(CompressImageIccProfile::Strip, $enum);
        $this->assertSame('strip', $enum->value);
    }

    public function testCompressImageIccProfileSrgbBackingValue(): void
    {
        $enum = CompressImageIccProfile::from('srgb');
        $this->assertSame(CompressImageIccProfile::Srgb, $enum);
        $this->assertSame('srgb', $enum->value);
    }

    public function testCompressImageIccProfileCaseCount(): void
    {
        $this->assertCount(3, CompressImageIccProfile::cases());
    }

    public function testCompressImageOutputFormatOriginalBackingValue(): void
    {
        $enum = CompressImageOutputFormat::from('original');
        $this->assertSame(CompressImageOutputFormat::Original, $enum);
        $this->assertSame('original', $enum->value);
    }

    public function testCompressImageOutputFormatAutoBackingValue(): void
    {
        $enum = CompressImageOutputFormat::from('auto');
        $this->assertSame(CompressImageOutputFormat::Auto, $enum);
        $this->assertSame('auto', $enum->value);
    }

    public function testCompressImageOutputFormatSmallestBackingValue(): void
    {
        $enum = CompressImageOutputFormat::from('smallest');
        $this->assertSame(CompressImageOutputFormat::Smallest, $enum);
        $this->assertSame('smallest', $enum->value);
    }

    public function testCompressImageOutputFormatJpegBackingValue(): void
    {
        $enum = CompressImageOutputFormat::from('jpeg');
        $this->assertSame(CompressImageOutputFormat::Jpeg, $enum);
        $this->assertSame('jpeg', $enum->value);
    }

    public function testCompressImageOutputFormatPngBackingValue(): void
    {
        $enum = CompressImageOutputFormat::from('png');
        $this->assertSame(CompressImageOutputFormat::Png, $enum);
        $this->assertSame('png', $enum->value);
    }

    public function testCompressImageOutputFormatWebpBackingValue(): void
    {
        $enum = CompressImageOutputFormat::from('webp');
        $this->assertSame(CompressImageOutputFormat::Webp, $enum);
        $this->assertSame('webp', $enum->value);
    }

    public function testCompressImageOutputFormatAvifBackingValue(): void
    {
        $enum = CompressImageOutputFormat::from('avif');
        $this->assertSame(CompressImageOutputFormat::Avif, $enum);
        $this->assertSame('avif', $enum->value);
    }

    public function testCompressImageOutputFormatCaseCount(): void
    {
        $this->assertCount(7, CompressImageOutputFormat::cases());
    }

    public function testCompressImageOptionsDefaultConstruction(): void
    {
        $obj = new CompressImageOptions();
        $this->assertInstanceOf(CompressImageOptions::class, $obj);
        $this->assertSame(CompressImageMode::Lossy, $obj->mode);
        $this->assertSame(CompressImageMetadata::All, $obj->metadata);
        $this->assertSame(CompressImageIccProfile::Preserve, $obj->icc_profile);
        $this->assertSame(true, $obj->progressive);
        $this->assertSame(CompressImageOutputFormat::Original, $obj->output_format);
        $this->assertNull($obj->quality);
    }

    public function testCompressImageOptionsFullConstruction(): void
    {
        $obj = new CompressImageOptions(
            mode: CompressImageMode::Lossy,
            quality: 1,
            metadata: CompressImageMetadata::All,
            icc_profile: CompressImageIccProfile::Preserve,
            progressive: true,
            output_format: CompressImageOutputFormat::Original,
        );
        $this->assertInstanceOf(CompressImageOptions::class, $obj);
    }

    public function testCompressAudioOutputFormatOriginalBackingValue(): void
    {
        $enum = CompressAudioOutputFormat::from('original');
        $this->assertSame(CompressAudioOutputFormat::Original, $enum);
        $this->assertSame('original', $enum->value);
    }

    public function testCompressAudioOutputFormatMp3BackingValue(): void
    {
        $enum = CompressAudioOutputFormat::from('mp3');
        $this->assertSame(CompressAudioOutputFormat::Mp3, $enum);
        $this->assertSame('mp3', $enum->value);
    }

    public function testCompressAudioOutputFormatAacBackingValue(): void
    {
        $enum = CompressAudioOutputFormat::from('aac');
        $this->assertSame(CompressAudioOutputFormat::Aac, $enum);
        $this->assertSame('aac', $enum->value);
    }

    public function testCompressAudioOutputFormatOggBackingValue(): void
    {
        $enum = CompressAudioOutputFormat::from('ogg');
        $this->assertSame(CompressAudioOutputFormat::Ogg, $enum);
        $this->assertSame('ogg', $enum->value);
    }

    public function testCompressAudioOutputFormatFlacBackingValue(): void
    {
        $enum = CompressAudioOutputFormat::from('flac');
        $this->assertSame(CompressAudioOutputFormat::Flac, $enum);
        $this->assertSame('flac', $enum->value);
    }

    public function testCompressAudioOutputFormatWavBackingValue(): void
    {
        $enum = CompressAudioOutputFormat::from('wav');
        $this->assertSame(CompressAudioOutputFormat::Wav, $enum);
        $this->assertSame('wav', $enum->value);
    }

    public function testCompressAudioOutputFormatCaseCount(): void
    {
        $this->assertCount(6, CompressAudioOutputFormat::cases());
    }

    public function testCompressAudioBitrate_64BackingValue(): void
    {
        $enum = CompressAudioBitrate::from(64);
        $this->assertSame(CompressAudioBitrate::_64, $enum);
        $this->assertSame(64, $enum->value);
    }

    public function testCompressAudioBitrate_96BackingValue(): void
    {
        $enum = CompressAudioBitrate::from(96);
        $this->assertSame(CompressAudioBitrate::_96, $enum);
        $this->assertSame(96, $enum->value);
    }

    public function testCompressAudioBitrate_128BackingValue(): void
    {
        $enum = CompressAudioBitrate::from(128);
        $this->assertSame(CompressAudioBitrate::_128, $enum);
        $this->assertSame(128, $enum->value);
    }

    public function testCompressAudioBitrate_192BackingValue(): void
    {
        $enum = CompressAudioBitrate::from(192);
        $this->assertSame(CompressAudioBitrate::_192, $enum);
        $this->assertSame(192, $enum->value);
    }

    public function testCompressAudioBitrate_256BackingValue(): void
    {
        $enum = CompressAudioBitrate::from(256);
        $this->assertSame(CompressAudioBitrate::_256, $enum);
        $this->assertSame(256, $enum->value);
    }

    public function testCompressAudioBitrate_320BackingValue(): void
    {
        $enum = CompressAudioBitrate::from(320);
        $this->assertSame(CompressAudioBitrate::_320, $enum);
        $this->assertSame(320, $enum->value);
    }

    public function testCompressAudioBitrateCaseCount(): void
    {
        $this->assertCount(6, CompressAudioBitrate::cases());
    }

    public function testCompressAudioSampleRate_22050BackingValue(): void
    {
        $enum = CompressAudioSampleRate::from(22050);
        $this->assertSame(CompressAudioSampleRate::_22050, $enum);
        $this->assertSame(22050, $enum->value);
    }

    public function testCompressAudioSampleRate_44100BackingValue(): void
    {
        $enum = CompressAudioSampleRate::from(44100);
        $this->assertSame(CompressAudioSampleRate::_44100, $enum);
        $this->assertSame(44100, $enum->value);
    }

    public function testCompressAudioSampleRate_48000BackingValue(): void
    {
        $enum = CompressAudioSampleRate::from(48000);
        $this->assertSame(CompressAudioSampleRate::_48000, $enum);
        $this->assertSame(48000, $enum->value);
    }

    public function testCompressAudioSampleRateCaseCount(): void
    {
        $this->assertCount(3, CompressAudioSampleRate::cases());
    }

    public function testCompressAudioOptionsDefaultConstruction(): void
    {
        $obj = new CompressAudioOptions();
        $this->assertInstanceOf(CompressAudioOptions::class, $obj);
        $this->assertSame(CompressAudioOutputFormat::Original, $obj->output_format);
        $this->assertSame(CompressAudioBitrate::_128, $obj->bitrate);
        $this->assertSame(false, $obj->normalize);
        $this->assertNull($obj->channels);
        $this->assertNull($obj->sample_rate);
        $this->assertNull($obj->trim_start);
        $this->assertNull($obj->trim_end);
    }

    public function testCompressAudioOptionsFullConstruction(): void
    {
        $obj = new CompressAudioOptions(
            output_format: CompressAudioOutputFormat::Original,
            bitrate: CompressAudioBitrate::_64,
            channels: 1,
            sample_rate: CompressAudioSampleRate::_22050,
            normalize: true,
            trim_start: 0.0,
            trim_end: 0.0,
        );
        $this->assertInstanceOf(CompressAudioOptions::class, $obj);
    }

    public function testCompressVideoCodecH264BackingValue(): void
    {
        $enum = CompressVideoCodec::from('h264');
        $this->assertSame(CompressVideoCodec::H264, $enum);
        $this->assertSame('h264', $enum->value);
    }

    public function testCompressVideoCodecH265BackingValue(): void
    {
        $enum = CompressVideoCodec::from('h265');
        $this->assertSame(CompressVideoCodec::H265, $enum);
        $this->assertSame('h265', $enum->value);
    }

    public function testCompressVideoCodecVp9BackingValue(): void
    {
        $enum = CompressVideoCodec::from('vp9');
        $this->assertSame(CompressVideoCodec::Vp9, $enum);
        $this->assertSame('vp9', $enum->value);
    }

    public function testCompressVideoCodecAv1BackingValue(): void
    {
        $enum = CompressVideoCodec::from('av1');
        $this->assertSame(CompressVideoCodec::Av1, $enum);
        $this->assertSame('av1', $enum->value);
    }

    public function testCompressVideoCodecCaseCount(): void
    {
        $this->assertCount(4, CompressVideoCodec::cases());
    }

    public function testCompressVideoEncodingModeCrfBackingValue(): void
    {
        $enum = CompressVideoEncodingMode::from('crf');
        $this->assertSame(CompressVideoEncodingMode::Crf, $enum);
        $this->assertSame('crf', $enum->value);
    }

    public function testCompressVideoEncodingModeTargetSizeBackingValue(): void
    {
        $enum = CompressVideoEncodingMode::from('target_size');
        $this->assertSame(CompressVideoEncodingMode::TargetSize, $enum);
        $this->assertSame('target_size', $enum->value);
    }

    public function testCompressVideoEncodingModeCaseCount(): void
    {
        $this->assertCount(2, CompressVideoEncodingMode::cases());
    }

    public function testCompressVideoPresetUltrafastBackingValue(): void
    {
        $enum = CompressVideoPreset::from('ultrafast');
        $this->assertSame(CompressVideoPreset::Ultrafast, $enum);
        $this->assertSame('ultrafast', $enum->value);
    }

    public function testCompressVideoPresetSuperfastBackingValue(): void
    {
        $enum = CompressVideoPreset::from('superfast');
        $this->assertSame(CompressVideoPreset::Superfast, $enum);
        $this->assertSame('superfast', $enum->value);
    }

    public function testCompressVideoPresetVeryfastBackingValue(): void
    {
        $enum = CompressVideoPreset::from('veryfast');
        $this->assertSame(CompressVideoPreset::Veryfast, $enum);
        $this->assertSame('veryfast', $enum->value);
    }

    public function testCompressVideoPresetFasterBackingValue(): void
    {
        $enum = CompressVideoPreset::from('faster');
        $this->assertSame(CompressVideoPreset::Faster, $enum);
        $this->assertSame('faster', $enum->value);
    }

    public function testCompressVideoPresetFastBackingValue(): void
    {
        $enum = CompressVideoPreset::from('fast');
        $this->assertSame(CompressVideoPreset::Fast, $enum);
        $this->assertSame('fast', $enum->value);
    }

    public function testCompressVideoPresetMediumBackingValue(): void
    {
        $enum = CompressVideoPreset::from('medium');
        $this->assertSame(CompressVideoPreset::Medium, $enum);
        $this->assertSame('medium', $enum->value);
    }

    public function testCompressVideoPresetSlowBackingValue(): void
    {
        $enum = CompressVideoPreset::from('slow');
        $this->assertSame(CompressVideoPreset::Slow, $enum);
        $this->assertSame('slow', $enum->value);
    }

    public function testCompressVideoPresetSlowerBackingValue(): void
    {
        $enum = CompressVideoPreset::from('slower');
        $this->assertSame(CompressVideoPreset::Slower, $enum);
        $this->assertSame('slower', $enum->value);
    }

    public function testCompressVideoPresetVeryslowBackingValue(): void
    {
        $enum = CompressVideoPreset::from('veryslow');
        $this->assertSame(CompressVideoPreset::Veryslow, $enum);
        $this->assertSame('veryslow', $enum->value);
    }

    public function testCompressVideoPresetCaseCount(): void
    {
        $this->assertCount(9, CompressVideoPreset::cases());
    }

    public function testCompressVideoFitMaxBackingValue(): void
    {
        $enum = CompressVideoFit::from('max');
        $this->assertSame(CompressVideoFit::Max, $enum);
        $this->assertSame('max', $enum->value);
    }

    public function testCompressVideoFitCropBackingValue(): void
    {
        $enum = CompressVideoFit::from('crop');
        $this->assertSame(CompressVideoFit::Crop, $enum);
        $this->assertSame('crop', $enum->value);
    }

    public function testCompressVideoFitScaleBackingValue(): void
    {
        $enum = CompressVideoFit::from('scale');
        $this->assertSame(CompressVideoFit::Scale, $enum);
        $this->assertSame('scale', $enum->value);
    }

    public function testCompressVideoFitPadBackingValue(): void
    {
        $enum = CompressVideoFit::from('pad');
        $this->assertSame(CompressVideoFit::Pad, $enum);
        $this->assertSame('pad', $enum->value);
    }

    public function testCompressVideoFitCaseCount(): void
    {
        $this->assertCount(4, CompressVideoFit::cases());
    }

    public function testCompressVideoAudioCodecAacBackingValue(): void
    {
        $enum = CompressVideoAudioCodec::from('aac');
        $this->assertSame(CompressVideoAudioCodec::Aac, $enum);
        $this->assertSame('aac', $enum->value);
    }

    public function testCompressVideoAudioCodecOpusBackingValue(): void
    {
        $enum = CompressVideoAudioCodec::from('opus');
        $this->assertSame(CompressVideoAudioCodec::Opus, $enum);
        $this->assertSame('opus', $enum->value);
    }

    public function testCompressVideoAudioCodecVorbisBackingValue(): void
    {
        $enum = CompressVideoAudioCodec::from('vorbis');
        $this->assertSame(CompressVideoAudioCodec::Vorbis, $enum);
        $this->assertSame('vorbis', $enum->value);
    }

    public function testCompressVideoAudioCodecCopyBackingValue(): void
    {
        $enum = CompressVideoAudioCodec::from('copy');
        $this->assertSame(CompressVideoAudioCodec::Copy, $enum);
        $this->assertSame('copy', $enum->value);
    }

    public function testCompressVideoAudioCodecCaseCount(): void
    {
        $this->assertCount(4, CompressVideoAudioCodec::cases());
    }

    public function testCompressVideoAudioBitrate_64BackingValue(): void
    {
        $enum = CompressVideoAudioBitrate::from(64);
        $this->assertSame(CompressVideoAudioBitrate::_64, $enum);
        $this->assertSame(64, $enum->value);
    }

    public function testCompressVideoAudioBitrate_96BackingValue(): void
    {
        $enum = CompressVideoAudioBitrate::from(96);
        $this->assertSame(CompressVideoAudioBitrate::_96, $enum);
        $this->assertSame(96, $enum->value);
    }

    public function testCompressVideoAudioBitrate_128BackingValue(): void
    {
        $enum = CompressVideoAudioBitrate::from(128);
        $this->assertSame(CompressVideoAudioBitrate::_128, $enum);
        $this->assertSame(128, $enum->value);
    }

    public function testCompressVideoAudioBitrate_192BackingValue(): void
    {
        $enum = CompressVideoAudioBitrate::from(192);
        $this->assertSame(CompressVideoAudioBitrate::_192, $enum);
        $this->assertSame(192, $enum->value);
    }

    public function testCompressVideoAudioBitrate_256BackingValue(): void
    {
        $enum = CompressVideoAudioBitrate::from(256);
        $this->assertSame(CompressVideoAudioBitrate::_256, $enum);
        $this->assertSame(256, $enum->value);
    }

    public function testCompressVideoAudioBitrate_320BackingValue(): void
    {
        $enum = CompressVideoAudioBitrate::from(320);
        $this->assertSame(CompressVideoAudioBitrate::_320, $enum);
        $this->assertSame(320, $enum->value);
    }

    public function testCompressVideoAudioBitrateCaseCount(): void
    {
        $this->assertCount(6, CompressVideoAudioBitrate::cases());
    }

    public function testCompressVideoOptionsDefaultConstruction(): void
    {
        $obj = new CompressVideoOptions();
        $this->assertInstanceOf(CompressVideoOptions::class, $obj);
        $this->assertSame(CompressVideoCodec::H264, $obj->codec);
        $this->assertSame(CompressVideoEncodingMode::Crf, $obj->encoding_mode);
        $this->assertSame(CompressVideoPreset::Medium, $obj->preset);
        $this->assertSame(true, $obj->faststart);
        $this->assertSame(CompressVideoAudioCodec::Copy, $obj->audio_codec);
        $this->assertNull($obj->crf);
        $this->assertNull($obj->target_size_bytes);
        $this->assertNull($obj->width);
        $this->assertNull($obj->height);
        $this->assertNull($obj->fit);
        $this->assertNull($obj->fps);
        $this->assertNull($obj->audio_bitrate);
        $this->assertNull($obj->trim_start);
        $this->assertNull($obj->trim_end);
    }

    public function testCompressVideoOptionsFullConstruction(): void
    {
        $obj = new CompressVideoOptions(
            codec: CompressVideoCodec::H264,
            encoding_mode: CompressVideoEncodingMode::Crf,
            crf: 0,
            target_size_bytes: 1048576,
            preset: CompressVideoPreset::Ultrafast,
            width: 2,
            height: 2,
            fit: CompressVideoFit::Max,
            fps: 1.0,
            faststart: true,
            audio_codec: CompressVideoAudioCodec::Aac,
            audio_bitrate: CompressVideoAudioBitrate::_64,
            trim_start: 0.0,
            trim_end: 0.0,
        );
        $this->assertInstanceOf(CompressVideoOptions::class, $obj);
    }

    public function testCompressDocumentPdfProfileWebBackingValue(): void
    {
        $enum = CompressDocumentPdfProfile::from('web');
        $this->assertSame(CompressDocumentPdfProfile::Web, $enum);
        $this->assertSame('web', $enum->value);
    }

    public function testCompressDocumentPdfProfilePrintBackingValue(): void
    {
        $enum = CompressDocumentPdfProfile::from('print');
        $this->assertSame(CompressDocumentPdfProfile::Print, $enum);
        $this->assertSame('print', $enum->value);
    }

    public function testCompressDocumentPdfProfileArchiveBackingValue(): void
    {
        $enum = CompressDocumentPdfProfile::from('archive');
        $this->assertSame(CompressDocumentPdfProfile::Archive, $enum);
        $this->assertSame('archive', $enum->value);
    }

    public function testCompressDocumentPdfProfileMaxBackingValue(): void
    {
        $enum = CompressDocumentPdfProfile::from('max');
        $this->assertSame(CompressDocumentPdfProfile::Max, $enum);
        $this->assertSame('max', $enum->value);
    }

    public function testCompressDocumentPdfProfileCaseCount(): void
    {
        $this->assertCount(4, CompressDocumentPdfProfile::cases());
    }

    public function testCompressDocumentPdfColorspaceUnchangedBackingValue(): void
    {
        $enum = CompressDocumentPdfColorspace::from('unchanged');
        $this->assertSame(CompressDocumentPdfColorspace::Unchanged, $enum);
        $this->assertSame('unchanged', $enum->value);
    }

    public function testCompressDocumentPdfColorspaceRgbBackingValue(): void
    {
        $enum = CompressDocumentPdfColorspace::from('rgb');
        $this->assertSame(CompressDocumentPdfColorspace::Rgb, $enum);
        $this->assertSame('rgb', $enum->value);
    }

    public function testCompressDocumentPdfColorspaceCmykBackingValue(): void
    {
        $enum = CompressDocumentPdfColorspace::from('cmyk');
        $this->assertSame(CompressDocumentPdfColorspace::Cmyk, $enum);
        $this->assertSame('cmyk', $enum->value);
    }

    public function testCompressDocumentPdfColorspaceGrayscaleBackingValue(): void
    {
        $enum = CompressDocumentPdfColorspace::from('grayscale');
        $this->assertSame(CompressDocumentPdfColorspace::Grayscale, $enum);
        $this->assertSame('grayscale', $enum->value);
    }

    public function testCompressDocumentPdfColorspaceCaseCount(): void
    {
        $this->assertCount(4, CompressDocumentPdfColorspace::cases());
    }

    public function testCompressDocumentPdfOptionsDefaultConstruction(): void
    {
        $obj = new CompressDocumentPdfOptions();
        $this->assertInstanceOf(CompressDocumentPdfOptions::class, $obj);
        $this->assertSame(CompressDocumentPdfProfile::Web, $obj->profile);
        $this->assertSame(CompressDocumentPdfColorspace::Unchanged, $obj->colorspace);
        $this->assertSame(false, $obj->flatten_forms);
        $this->assertNull($obj->pages);
    }

    public function testCompressDocumentPdfOptionsFullConstruction(): void
    {
        $obj = new CompressDocumentPdfOptions(
            profile: CompressDocumentPdfProfile::Web,
            colorspace: CompressDocumentPdfColorspace::Unchanged,
            pages: 'test_value',
            flatten_forms: true,
        );
        $this->assertInstanceOf(CompressDocumentPdfOptions::class, $obj);
    }

    public function testCompressDocumentOfficeOptionsDefaultConstruction(): void
    {
        $obj = new CompressDocumentOfficeOptions();
        $this->assertInstanceOf(CompressDocumentOfficeOptions::class, $obj);
        $this->assertSame(80, $obj->image_quality);
        $this->assertSame(true, $obj->strip_macros);
        $this->assertSame(true, $obj->strip_hidden_data);
        $this->assertSame(false, $obj->strip_unused_fonts);
    }

    public function testCompressDocumentOfficeOptionsFullConstruction(): void
    {
        $obj = new CompressDocumentOfficeOptions(
            image_quality: 1,
            strip_macros: true,
            strip_hidden_data: true,
            strip_unused_fonts: true,
        );
        $this->assertInstanceOf(CompressDocumentOfficeOptions::class, $obj);
    }

    public function testCompressDocumentOdfOptionsDefaultConstruction(): void
    {
        $obj = new CompressDocumentOdfOptions();
        $this->assertInstanceOf(CompressDocumentOdfOptions::class, $obj);
        $this->assertSame(80, $obj->image_quality);
        $this->assertSame(true, $obj->strip_metadata);
        $this->assertSame(false, $obj->strip_unused_styles);
    }

    public function testCompressDocumentOdfOptionsFullConstruction(): void
    {
        $obj = new CompressDocumentOdfOptions(
            image_quality: 1,
            strip_metadata: true,
            strip_unused_styles: true,
        );
        $this->assertInstanceOf(CompressDocumentOdfOptions::class, $obj);
    }

    public function testCompressDocumentEpubOptionsDefaultConstruction(): void
    {
        $obj = new CompressDocumentEpubOptions();
        $this->assertInstanceOf(CompressDocumentEpubOptions::class, $obj);
        $this->assertSame(80, $obj->image_quality);
        $this->assertSame(true, $obj->font_subsetting);
        $this->assertSame(false, $obj->strip_unused_css);
    }

    public function testCompressDocumentEpubOptionsFullConstruction(): void
    {
        $obj = new CompressDocumentEpubOptions(
            image_quality: 1,
            font_subsetting: true,
            strip_unused_css: true,
        );
        $this->assertInstanceOf(CompressDocumentEpubOptions::class, $obj);
    }

}
