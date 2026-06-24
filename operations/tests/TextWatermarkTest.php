<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations\Tests;

use PHPUnit\Framework\TestCase;
use Gisl\Generated\Operations\TextWatermarkImageAnchor;
use Gisl\Generated\Operations\TextWatermarkImageBmpAnchor;
use Gisl\Generated\Operations\TextWatermarkImageBmpFontFamily;
use Gisl\Generated\Operations\TextWatermarkImageBmpOptions;
use Gisl\Generated\Operations\TextWatermarkImageBmpWatermarkMode;
use Gisl\Generated\Operations\TextWatermarkImageFontFamily;
use Gisl\Generated\Operations\TextWatermarkImageOptions;
use Gisl\Generated\Operations\TextWatermarkImageTiffAnchor;
use Gisl\Generated\Operations\TextWatermarkImageTiffFontFamily;
use Gisl\Generated\Operations\TextWatermarkImageTiffOptions;
use Gisl\Generated\Operations\TextWatermarkImageTiffWatermarkMode;
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

    public function testTextWatermarkImageTiffFontFamilyLiberationSansBackingValue(): void
    {
        $enum = TextWatermarkImageTiffFontFamily::from('liberation_sans');
        $this->assertSame(TextWatermarkImageTiffFontFamily::LiberationSans, $enum);
        $this->assertSame('liberation_sans', $enum->value);
    }

    public function testTextWatermarkImageTiffFontFamilyCaseCount(): void
    {
        $this->assertCount(1, TextWatermarkImageTiffFontFamily::cases());
    }

    public function testTextWatermarkImageTiffWatermarkModeSingleBackingValue(): void
    {
        $enum = TextWatermarkImageTiffWatermarkMode::from('single');
        $this->assertSame(TextWatermarkImageTiffWatermarkMode::Single, $enum);
        $this->assertSame('single', $enum->value);
    }

    public function testTextWatermarkImageTiffWatermarkModeTiledBackingValue(): void
    {
        $enum = TextWatermarkImageTiffWatermarkMode::from('tiled');
        $this->assertSame(TextWatermarkImageTiffWatermarkMode::Tiled, $enum);
        $this->assertSame('tiled', $enum->value);
    }

    public function testTextWatermarkImageTiffWatermarkModeCaseCount(): void
    {
        $this->assertCount(2, TextWatermarkImageTiffWatermarkMode::cases());
    }

    public function testTextWatermarkImageTiffAnchorTopLeftBackingValue(): void
    {
        $enum = TextWatermarkImageTiffAnchor::from('top_left');
        $this->assertSame(TextWatermarkImageTiffAnchor::TopLeft, $enum);
        $this->assertSame('top_left', $enum->value);
    }

    public function testTextWatermarkImageTiffAnchorTopCenterBackingValue(): void
    {
        $enum = TextWatermarkImageTiffAnchor::from('top_center');
        $this->assertSame(TextWatermarkImageTiffAnchor::TopCenter, $enum);
        $this->assertSame('top_center', $enum->value);
    }

    public function testTextWatermarkImageTiffAnchorTopRightBackingValue(): void
    {
        $enum = TextWatermarkImageTiffAnchor::from('top_right');
        $this->assertSame(TextWatermarkImageTiffAnchor::TopRight, $enum);
        $this->assertSame('top_right', $enum->value);
    }

    public function testTextWatermarkImageTiffAnchorCenterLeftBackingValue(): void
    {
        $enum = TextWatermarkImageTiffAnchor::from('center_left');
        $this->assertSame(TextWatermarkImageTiffAnchor::CenterLeft, $enum);
        $this->assertSame('center_left', $enum->value);
    }

    public function testTextWatermarkImageTiffAnchorCenterBackingValue(): void
    {
        $enum = TextWatermarkImageTiffAnchor::from('center');
        $this->assertSame(TextWatermarkImageTiffAnchor::Center, $enum);
        $this->assertSame('center', $enum->value);
    }

    public function testTextWatermarkImageTiffAnchorCenterRightBackingValue(): void
    {
        $enum = TextWatermarkImageTiffAnchor::from('center_right');
        $this->assertSame(TextWatermarkImageTiffAnchor::CenterRight, $enum);
        $this->assertSame('center_right', $enum->value);
    }

    public function testTextWatermarkImageTiffAnchorBottomLeftBackingValue(): void
    {
        $enum = TextWatermarkImageTiffAnchor::from('bottom_left');
        $this->assertSame(TextWatermarkImageTiffAnchor::BottomLeft, $enum);
        $this->assertSame('bottom_left', $enum->value);
    }

    public function testTextWatermarkImageTiffAnchorBottomCenterBackingValue(): void
    {
        $enum = TextWatermarkImageTiffAnchor::from('bottom_center');
        $this->assertSame(TextWatermarkImageTiffAnchor::BottomCenter, $enum);
        $this->assertSame('bottom_center', $enum->value);
    }

    public function testTextWatermarkImageTiffAnchorBottomRightBackingValue(): void
    {
        $enum = TextWatermarkImageTiffAnchor::from('bottom_right');
        $this->assertSame(TextWatermarkImageTiffAnchor::BottomRight, $enum);
        $this->assertSame('bottom_right', $enum->value);
    }

    public function testTextWatermarkImageTiffAnchorCaseCount(): void
    {
        $this->assertCount(9, TextWatermarkImageTiffAnchor::cases());
    }

    public function testTextWatermarkImageTiffOptionsDefaultConstruction(): void
    {
        $obj = new TextWatermarkImageTiffOptions(
            text: 'test_value',
        );
        $this->assertInstanceOf(TextWatermarkImageTiffOptions::class, $obj);
        $this->assertSame(48.0, $obj->font_size);
        $this->assertSame('#FFFFFF80', $obj->color);
        $this->assertSame(TextWatermarkImageTiffFontFamily::LiberationSans, $obj->font_family);
        $this->assertSame(-45.0, $obj->rotation);
        $this->assertSame(TextWatermarkImageTiffWatermarkMode::Single, $obj->watermark_mode);
        $this->assertSame(TextWatermarkImageTiffAnchor::BottomRight, $obj->anchor);
        $this->assertSame('0px', $obj->margin_x);
        $this->assertSame('0px', $obj->margin_y);
        $this->assertSame(1.0, $obj->opacity);
        $this->assertNull($obj->tile_spacing);
    }

    public function testTextWatermarkImageTiffOptionsFullConstruction(): void
    {
        $obj = new TextWatermarkImageTiffOptions(
            text: 'test_value',
            font_size: 8.0,
            color: 'test_value',
            font_family: TextWatermarkImageTiffFontFamily::LiberationSans,
            rotation: -360.0,
            watermark_mode: TextWatermarkImageTiffWatermarkMode::Single,
            tile_spacing: 0,
            anchor: TextWatermarkImageTiffAnchor::TopLeft,
            margin_x: 'test_value',
            margin_y: 'test_value',
            opacity: 0.0,
        );
        $this->assertInstanceOf(TextWatermarkImageTiffOptions::class, $obj);
    }

    public function testTextWatermarkImageBmpFontFamilyLiberationSansBackingValue(): void
    {
        $enum = TextWatermarkImageBmpFontFamily::from('liberation_sans');
        $this->assertSame(TextWatermarkImageBmpFontFamily::LiberationSans, $enum);
        $this->assertSame('liberation_sans', $enum->value);
    }

    public function testTextWatermarkImageBmpFontFamilyCaseCount(): void
    {
        $this->assertCount(1, TextWatermarkImageBmpFontFamily::cases());
    }

    public function testTextWatermarkImageBmpWatermarkModeSingleBackingValue(): void
    {
        $enum = TextWatermarkImageBmpWatermarkMode::from('single');
        $this->assertSame(TextWatermarkImageBmpWatermarkMode::Single, $enum);
        $this->assertSame('single', $enum->value);
    }

    public function testTextWatermarkImageBmpWatermarkModeTiledBackingValue(): void
    {
        $enum = TextWatermarkImageBmpWatermarkMode::from('tiled');
        $this->assertSame(TextWatermarkImageBmpWatermarkMode::Tiled, $enum);
        $this->assertSame('tiled', $enum->value);
    }

    public function testTextWatermarkImageBmpWatermarkModeCaseCount(): void
    {
        $this->assertCount(2, TextWatermarkImageBmpWatermarkMode::cases());
    }

    public function testTextWatermarkImageBmpAnchorTopLeftBackingValue(): void
    {
        $enum = TextWatermarkImageBmpAnchor::from('top_left');
        $this->assertSame(TextWatermarkImageBmpAnchor::TopLeft, $enum);
        $this->assertSame('top_left', $enum->value);
    }

    public function testTextWatermarkImageBmpAnchorTopCenterBackingValue(): void
    {
        $enum = TextWatermarkImageBmpAnchor::from('top_center');
        $this->assertSame(TextWatermarkImageBmpAnchor::TopCenter, $enum);
        $this->assertSame('top_center', $enum->value);
    }

    public function testTextWatermarkImageBmpAnchorTopRightBackingValue(): void
    {
        $enum = TextWatermarkImageBmpAnchor::from('top_right');
        $this->assertSame(TextWatermarkImageBmpAnchor::TopRight, $enum);
        $this->assertSame('top_right', $enum->value);
    }

    public function testTextWatermarkImageBmpAnchorCenterLeftBackingValue(): void
    {
        $enum = TextWatermarkImageBmpAnchor::from('center_left');
        $this->assertSame(TextWatermarkImageBmpAnchor::CenterLeft, $enum);
        $this->assertSame('center_left', $enum->value);
    }

    public function testTextWatermarkImageBmpAnchorCenterBackingValue(): void
    {
        $enum = TextWatermarkImageBmpAnchor::from('center');
        $this->assertSame(TextWatermarkImageBmpAnchor::Center, $enum);
        $this->assertSame('center', $enum->value);
    }

    public function testTextWatermarkImageBmpAnchorCenterRightBackingValue(): void
    {
        $enum = TextWatermarkImageBmpAnchor::from('center_right');
        $this->assertSame(TextWatermarkImageBmpAnchor::CenterRight, $enum);
        $this->assertSame('center_right', $enum->value);
    }

    public function testTextWatermarkImageBmpAnchorBottomLeftBackingValue(): void
    {
        $enum = TextWatermarkImageBmpAnchor::from('bottom_left');
        $this->assertSame(TextWatermarkImageBmpAnchor::BottomLeft, $enum);
        $this->assertSame('bottom_left', $enum->value);
    }

    public function testTextWatermarkImageBmpAnchorBottomCenterBackingValue(): void
    {
        $enum = TextWatermarkImageBmpAnchor::from('bottom_center');
        $this->assertSame(TextWatermarkImageBmpAnchor::BottomCenter, $enum);
        $this->assertSame('bottom_center', $enum->value);
    }

    public function testTextWatermarkImageBmpAnchorBottomRightBackingValue(): void
    {
        $enum = TextWatermarkImageBmpAnchor::from('bottom_right');
        $this->assertSame(TextWatermarkImageBmpAnchor::BottomRight, $enum);
        $this->assertSame('bottom_right', $enum->value);
    }

    public function testTextWatermarkImageBmpAnchorCaseCount(): void
    {
        $this->assertCount(9, TextWatermarkImageBmpAnchor::cases());
    }

    public function testTextWatermarkImageBmpOptionsDefaultConstruction(): void
    {
        $obj = new TextWatermarkImageBmpOptions(
            text: 'test_value',
        );
        $this->assertInstanceOf(TextWatermarkImageBmpOptions::class, $obj);
        $this->assertSame(48.0, $obj->font_size);
        $this->assertSame('#FFFFFF80', $obj->color);
        $this->assertSame(TextWatermarkImageBmpFontFamily::LiberationSans, $obj->font_family);
        $this->assertSame(-45.0, $obj->rotation);
        $this->assertSame(TextWatermarkImageBmpWatermarkMode::Single, $obj->watermark_mode);
        $this->assertSame(TextWatermarkImageBmpAnchor::BottomRight, $obj->anchor);
        $this->assertSame('0px', $obj->margin_x);
        $this->assertSame('0px', $obj->margin_y);
        $this->assertSame(1.0, $obj->opacity);
        $this->assertNull($obj->tile_spacing);
    }

    public function testTextWatermarkImageBmpOptionsFullConstruction(): void
    {
        $obj = new TextWatermarkImageBmpOptions(
            text: 'test_value',
            font_size: 8.0,
            color: 'test_value',
            font_family: TextWatermarkImageBmpFontFamily::LiberationSans,
            rotation: -360.0,
            watermark_mode: TextWatermarkImageBmpWatermarkMode::Single,
            tile_spacing: 0,
            anchor: TextWatermarkImageBmpAnchor::TopLeft,
            margin_x: 'test_value',
            margin_y: 'test_value',
            opacity: 0.0,
        );
        $this->assertInstanceOf(TextWatermarkImageBmpOptions::class, $obj);
    }

}
