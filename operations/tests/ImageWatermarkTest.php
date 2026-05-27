<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations\Tests;

use PHPUnit\Framework\TestCase;
use Gisl\Generated\Operations\ImageWatermarkImageAnchor;
use Gisl\Generated\Operations\ImageWatermarkImageGifAnchor;
use Gisl\Generated\Operations\ImageWatermarkImageGifOptions;
use Gisl\Generated\Operations\ImageWatermarkImageOptions;

final class ImageWatermarkTest extends TestCase
{
    public function testImageWatermarkImageAnchorTopLeftBackingValue(): void
    {
        $enum = ImageWatermarkImageAnchor::from('top_left');
        $this->assertSame(ImageWatermarkImageAnchor::TopLeft, $enum);
        $this->assertSame('top_left', $enum->value);
    }

    public function testImageWatermarkImageAnchorTopCenterBackingValue(): void
    {
        $enum = ImageWatermarkImageAnchor::from('top_center');
        $this->assertSame(ImageWatermarkImageAnchor::TopCenter, $enum);
        $this->assertSame('top_center', $enum->value);
    }

    public function testImageWatermarkImageAnchorTopRightBackingValue(): void
    {
        $enum = ImageWatermarkImageAnchor::from('top_right');
        $this->assertSame(ImageWatermarkImageAnchor::TopRight, $enum);
        $this->assertSame('top_right', $enum->value);
    }

    public function testImageWatermarkImageAnchorCenterLeftBackingValue(): void
    {
        $enum = ImageWatermarkImageAnchor::from('center_left');
        $this->assertSame(ImageWatermarkImageAnchor::CenterLeft, $enum);
        $this->assertSame('center_left', $enum->value);
    }

    public function testImageWatermarkImageAnchorCenterBackingValue(): void
    {
        $enum = ImageWatermarkImageAnchor::from('center');
        $this->assertSame(ImageWatermarkImageAnchor::Center, $enum);
        $this->assertSame('center', $enum->value);
    }

    public function testImageWatermarkImageAnchorCenterRightBackingValue(): void
    {
        $enum = ImageWatermarkImageAnchor::from('center_right');
        $this->assertSame(ImageWatermarkImageAnchor::CenterRight, $enum);
        $this->assertSame('center_right', $enum->value);
    }

    public function testImageWatermarkImageAnchorBottomLeftBackingValue(): void
    {
        $enum = ImageWatermarkImageAnchor::from('bottom_left');
        $this->assertSame(ImageWatermarkImageAnchor::BottomLeft, $enum);
        $this->assertSame('bottom_left', $enum->value);
    }

    public function testImageWatermarkImageAnchorBottomCenterBackingValue(): void
    {
        $enum = ImageWatermarkImageAnchor::from('bottom_center');
        $this->assertSame(ImageWatermarkImageAnchor::BottomCenter, $enum);
        $this->assertSame('bottom_center', $enum->value);
    }

    public function testImageWatermarkImageAnchorBottomRightBackingValue(): void
    {
        $enum = ImageWatermarkImageAnchor::from('bottom_right');
        $this->assertSame(ImageWatermarkImageAnchor::BottomRight, $enum);
        $this->assertSame('bottom_right', $enum->value);
    }

    public function testImageWatermarkImageAnchorCaseCount(): void
    {
        $this->assertCount(9, ImageWatermarkImageAnchor::cases());
    }

    public function testImageWatermarkImageOptionsDefaultConstruction(): void
    {
        $obj = new ImageWatermarkImageOptions();
        $this->assertInstanceOf(ImageWatermarkImageOptions::class, $obj);
        $this->assertSame(ImageWatermarkImageAnchor::BottomRight, $obj->anchor);
        $this->assertSame('0px', $obj->margin_x);
        $this->assertSame('0px', $obj->margin_y);
        $this->assertSame(0.5, $obj->opacity);
        $this->assertNull($obj->overlay_width);
    }

    public function testImageWatermarkImageOptionsFullConstruction(): void
    {
        $obj = new ImageWatermarkImageOptions(
            anchor: ImageWatermarkImageAnchor::TopLeft,
            margin_x: 'test_value',
            margin_y: 'test_value',
            opacity: 0.0,
            overlay_width: 'test_value',
        );
        $this->assertInstanceOf(ImageWatermarkImageOptions::class, $obj);
    }

    public function testImageWatermarkImageGifAnchorTopLeftBackingValue(): void
    {
        $enum = ImageWatermarkImageGifAnchor::from('top_left');
        $this->assertSame(ImageWatermarkImageGifAnchor::TopLeft, $enum);
        $this->assertSame('top_left', $enum->value);
    }

    public function testImageWatermarkImageGifAnchorTopCenterBackingValue(): void
    {
        $enum = ImageWatermarkImageGifAnchor::from('top_center');
        $this->assertSame(ImageWatermarkImageGifAnchor::TopCenter, $enum);
        $this->assertSame('top_center', $enum->value);
    }

    public function testImageWatermarkImageGifAnchorTopRightBackingValue(): void
    {
        $enum = ImageWatermarkImageGifAnchor::from('top_right');
        $this->assertSame(ImageWatermarkImageGifAnchor::TopRight, $enum);
        $this->assertSame('top_right', $enum->value);
    }

    public function testImageWatermarkImageGifAnchorCenterLeftBackingValue(): void
    {
        $enum = ImageWatermarkImageGifAnchor::from('center_left');
        $this->assertSame(ImageWatermarkImageGifAnchor::CenterLeft, $enum);
        $this->assertSame('center_left', $enum->value);
    }

    public function testImageWatermarkImageGifAnchorCenterBackingValue(): void
    {
        $enum = ImageWatermarkImageGifAnchor::from('center');
        $this->assertSame(ImageWatermarkImageGifAnchor::Center, $enum);
        $this->assertSame('center', $enum->value);
    }

    public function testImageWatermarkImageGifAnchorCenterRightBackingValue(): void
    {
        $enum = ImageWatermarkImageGifAnchor::from('center_right');
        $this->assertSame(ImageWatermarkImageGifAnchor::CenterRight, $enum);
        $this->assertSame('center_right', $enum->value);
    }

    public function testImageWatermarkImageGifAnchorBottomLeftBackingValue(): void
    {
        $enum = ImageWatermarkImageGifAnchor::from('bottom_left');
        $this->assertSame(ImageWatermarkImageGifAnchor::BottomLeft, $enum);
        $this->assertSame('bottom_left', $enum->value);
    }

    public function testImageWatermarkImageGifAnchorBottomCenterBackingValue(): void
    {
        $enum = ImageWatermarkImageGifAnchor::from('bottom_center');
        $this->assertSame(ImageWatermarkImageGifAnchor::BottomCenter, $enum);
        $this->assertSame('bottom_center', $enum->value);
    }

    public function testImageWatermarkImageGifAnchorBottomRightBackingValue(): void
    {
        $enum = ImageWatermarkImageGifAnchor::from('bottom_right');
        $this->assertSame(ImageWatermarkImageGifAnchor::BottomRight, $enum);
        $this->assertSame('bottom_right', $enum->value);
    }

    public function testImageWatermarkImageGifAnchorCaseCount(): void
    {
        $this->assertCount(9, ImageWatermarkImageGifAnchor::cases());
    }

    public function testImageWatermarkImageGifOptionsDefaultConstruction(): void
    {
        $obj = new ImageWatermarkImageGifOptions();
        $this->assertInstanceOf(ImageWatermarkImageGifOptions::class, $obj);
        $this->assertSame(ImageWatermarkImageGifAnchor::BottomRight, $obj->anchor);
        $this->assertSame('0px', $obj->margin_x);
        $this->assertSame('0px', $obj->margin_y);
        $this->assertSame(0.5, $obj->opacity);
        $this->assertNull($obj->overlay_width);
    }

    public function testImageWatermarkImageGifOptionsFullConstruction(): void
    {
        $obj = new ImageWatermarkImageGifOptions(
            anchor: ImageWatermarkImageGifAnchor::TopLeft,
            margin_x: 'test_value',
            margin_y: 'test_value',
            opacity: 0.0,
            overlay_width: 'test_value',
        );
        $this->assertInstanceOf(ImageWatermarkImageGifOptions::class, $obj);
    }

}
