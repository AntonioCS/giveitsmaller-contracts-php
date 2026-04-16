<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations\Tests;

use PHPUnit\Framework\TestCase;
use Gisl\Generated\Operations\WatermarkImageOptions;
use Gisl\Generated\Operations\WatermarkImagePosition;
use Gisl\Generated\Operations\WatermarkImageWatermarkMode;
use Gisl\Generated\Operations\WatermarkImageWatermarkType;

final class WatermarkTest extends TestCase
{
    public function testWatermarkImageWatermarkTypeImageBackingValue(): void
    {
        $enum = WatermarkImageWatermarkType::from('image');
        $this->assertSame(WatermarkImageWatermarkType::Image, $enum);
        $this->assertSame('image', $enum->value);
    }

    public function testWatermarkImageWatermarkTypeTextBackingValue(): void
    {
        $enum = WatermarkImageWatermarkType::from('text');
        $this->assertSame(WatermarkImageWatermarkType::Text, $enum);
        $this->assertSame('text', $enum->value);
    }

    public function testWatermarkImageWatermarkTypeCaseCount(): void
    {
        $this->assertCount(2, WatermarkImageWatermarkType::cases());
    }

    public function testWatermarkImagePositionCenterBackingValue(): void
    {
        $enum = WatermarkImagePosition::from('center');
        $this->assertSame(WatermarkImagePosition::Center, $enum);
        $this->assertSame('center', $enum->value);
    }

    public function testWatermarkImagePositionTopLeftBackingValue(): void
    {
        $enum = WatermarkImagePosition::from('top-left');
        $this->assertSame(WatermarkImagePosition::TopLeft, $enum);
        $this->assertSame('top-left', $enum->value);
    }

    public function testWatermarkImagePositionTopRightBackingValue(): void
    {
        $enum = WatermarkImagePosition::from('top-right');
        $this->assertSame(WatermarkImagePosition::TopRight, $enum);
        $this->assertSame('top-right', $enum->value);
    }

    public function testWatermarkImagePositionBottomLeftBackingValue(): void
    {
        $enum = WatermarkImagePosition::from('bottom-left');
        $this->assertSame(WatermarkImagePosition::BottomLeft, $enum);
        $this->assertSame('bottom-left', $enum->value);
    }

    public function testWatermarkImagePositionBottomRightBackingValue(): void
    {
        $enum = WatermarkImagePosition::from('bottom-right');
        $this->assertSame(WatermarkImagePosition::BottomRight, $enum);
        $this->assertSame('bottom-right', $enum->value);
    }

    public function testWatermarkImagePositionCaseCount(): void
    {
        $this->assertCount(5, WatermarkImagePosition::cases());
    }

    public function testWatermarkImageWatermarkModeSingleBackingValue(): void
    {
        $enum = WatermarkImageWatermarkMode::from('single');
        $this->assertSame(WatermarkImageWatermarkMode::Single, $enum);
        $this->assertSame('single', $enum->value);
    }

    public function testWatermarkImageWatermarkModeTiledBackingValue(): void
    {
        $enum = WatermarkImageWatermarkMode::from('tiled');
        $this->assertSame(WatermarkImageWatermarkMode::Tiled, $enum);
        $this->assertSame('tiled', $enum->value);
    }

    public function testWatermarkImageWatermarkModeCaseCount(): void
    {
        $this->assertCount(2, WatermarkImageWatermarkMode::cases());
    }

    public function testWatermarkImageOptionsDefaultConstruction(): void
    {
        $obj = new WatermarkImageOptions();
        $this->assertInstanceOf(WatermarkImageOptions::class, $obj);
        $this->assertSame(WatermarkImageWatermarkType::Image, $obj->watermark_type);
        $this->assertSame(WatermarkImagePosition::Center, $obj->position);
        $this->assertSame(0.5, $obj->opacity);
        $this->assertNull($obj->watermark_bucket);
        $this->assertNull($obj->watermark_key);
        $this->assertNull($obj->text);
        $this->assertNull($obj->font_size);
        $this->assertNull($obj->color);
        $this->assertNull($obj->watermark_mode);
        $this->assertNull($obj->rotation);
        $this->assertNull($obj->tile_spacing);
    }

    public function testWatermarkImageOptionsFullConstruction(): void
    {
        $obj = new WatermarkImageOptions(
            watermark_type: WatermarkImageWatermarkType::Image,
            position: WatermarkImagePosition::Center,
            opacity: 0.0,
            watermark_bucket: 'test_value',
            watermark_key: 'test_value',
            text: 'test_value',
            font_size: 8.0,
            color: 'test_value',
            watermark_mode: WatermarkImageWatermarkMode::Single,
            rotation: -360.0,
            tile_spacing: 0,
        );
        $this->assertInstanceOf(WatermarkImageOptions::class, $obj);
    }

}
