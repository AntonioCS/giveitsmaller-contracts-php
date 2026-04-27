<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations\Tests;

use PHPUnit\Framework\TestCase;
use Gisl\Generated\Operations\TextWatermarkImageAnchor;
use Gisl\Generated\Operations\TextWatermarkImageFontFamily;
use Gisl\Generated\Operations\TextWatermarkImageOptions;
use Gisl\Generated\Operations\TextWatermarkImageWatermarkMode;

final class TextWatermarkTest extends TestCase
{
    public function testTextWatermarkImageFontFamilyLiberationSansBackingValue(): void
    {
        $enum = TextWatermarkImageFontFamily::from('liberation_sans');
        $this->assertSame(TextWatermarkImageFontFamily::LiberationSans, $enum);
        $this->assertSame('liberation_sans', $enum->value);
    }

    public function testTextWatermarkImageFontFamilyCaseCount(): void
    {
        $this->assertCount(1, TextWatermarkImageFontFamily::cases());
    }

    public function testTextWatermarkImageWatermarkModeSingleBackingValue(): void
    {
        $enum = TextWatermarkImageWatermarkMode::from('single');
        $this->assertSame(TextWatermarkImageWatermarkMode::Single, $enum);
        $this->assertSame('single', $enum->value);
    }

    public function testTextWatermarkImageWatermarkModeTiledBackingValue(): void
    {
        $enum = TextWatermarkImageWatermarkMode::from('tiled');
        $this->assertSame(TextWatermarkImageWatermarkMode::Tiled, $enum);
        $this->assertSame('tiled', $enum->value);
    }

    public function testTextWatermarkImageWatermarkModeCaseCount(): void
    {
        $this->assertCount(2, TextWatermarkImageWatermarkMode::cases());
    }

    public function testTextWatermarkImageAnchorTopLeftBackingValue(): void
    {
        $enum = TextWatermarkImageAnchor::from('top_left');
        $this->assertSame(TextWatermarkImageAnchor::TopLeft, $enum);
        $this->assertSame('top_left', $enum->value);
    }

    public function testTextWatermarkImageAnchorTopCenterBackingValue(): void
    {
        $enum = TextWatermarkImageAnchor::from('top_center');
        $this->assertSame(TextWatermarkImageAnchor::TopCenter, $enum);
        $this->assertSame('top_center', $enum->value);
    }

    public function testTextWatermarkImageAnchorTopRightBackingValue(): void
    {
        $enum = TextWatermarkImageAnchor::from('top_right');
        $this->assertSame(TextWatermarkImageAnchor::TopRight, $enum);
        $this->assertSame('top_right', $enum->value);
    }

    public function testTextWatermarkImageAnchorCenterLeftBackingValue(): void
    {
        $enum = TextWatermarkImageAnchor::from('center_left');
        $this->assertSame(TextWatermarkImageAnchor::CenterLeft, $enum);
        $this->assertSame('center_left', $enum->value);
    }

    public function testTextWatermarkImageAnchorCenterBackingValue(): void
    {
        $enum = TextWatermarkImageAnchor::from('center');
        $this->assertSame(TextWatermarkImageAnchor::Center, $enum);
        $this->assertSame('center', $enum->value);
    }

    public function testTextWatermarkImageAnchorCenterRightBackingValue(): void
    {
        $enum = TextWatermarkImageAnchor::from('center_right');
        $this->assertSame(TextWatermarkImageAnchor::CenterRight, $enum);
        $this->assertSame('center_right', $enum->value);
    }

    public function testTextWatermarkImageAnchorBottomLeftBackingValue(): void
    {
        $enum = TextWatermarkImageAnchor::from('bottom_left');
        $this->assertSame(TextWatermarkImageAnchor::BottomLeft, $enum);
        $this->assertSame('bottom_left', $enum->value);
    }

    public function testTextWatermarkImageAnchorBottomCenterBackingValue(): void
    {
        $enum = TextWatermarkImageAnchor::from('bottom_center');
        $this->assertSame(TextWatermarkImageAnchor::BottomCenter, $enum);
        $this->assertSame('bottom_center', $enum->value);
    }

    public function testTextWatermarkImageAnchorBottomRightBackingValue(): void
    {
        $enum = TextWatermarkImageAnchor::from('bottom_right');
        $this->assertSame(TextWatermarkImageAnchor::BottomRight, $enum);
        $this->assertSame('bottom_right', $enum->value);
    }

    public function testTextWatermarkImageAnchorCaseCount(): void
    {
        $this->assertCount(9, TextWatermarkImageAnchor::cases());
    }

    public function testTextWatermarkImageOptionsDefaultConstruction(): void
    {
        $obj = new TextWatermarkImageOptions(
            text: 'test_value',
        );
        $this->assertInstanceOf(TextWatermarkImageOptions::class, $obj);
        $this->assertSame(48.0, $obj->font_size);
        $this->assertSame('#FFFFFF80', $obj->color);
        $this->assertSame(TextWatermarkImageFontFamily::LiberationSans, $obj->font_family);
        $this->assertSame(-45.0, $obj->rotation);
        $this->assertSame(TextWatermarkImageWatermarkMode::Single, $obj->watermark_mode);
        $this->assertSame(TextWatermarkImageAnchor::BottomRight, $obj->anchor);
        $this->assertSame('0px', $obj->margin_x);
        $this->assertSame('0px', $obj->margin_y);
        $this->assertSame(1.0, $obj->opacity);
        $this->assertNull($obj->tile_spacing);
    }

    public function testTextWatermarkImageOptionsFullConstruction(): void
    {
        $obj = new TextWatermarkImageOptions(
            text: 'test_value',
            font_size: 8.0,
            color: 'test_value',
            font_family: TextWatermarkImageFontFamily::LiberationSans,
            rotation: -360.0,
            watermark_mode: TextWatermarkImageWatermarkMode::Single,
            tile_spacing: 0,
            anchor: TextWatermarkImageAnchor::TopLeft,
            margin_x: 'test_value',
            margin_y: 'test_value',
            opacity: 0.0,
        );
        $this->assertInstanceOf(TextWatermarkImageOptions::class, $obj);
    }

}
