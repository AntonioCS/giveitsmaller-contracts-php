<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations\Tests;

use PHPUnit\Framework\TestCase;
use Gisl\Generated\Operations\CustomLumaVideoOptions;

final class CustomLumaTest extends TestCase
{
    public function testCustomLumaVideoOptionsDefaultConstruction(): void
    {
        $obj = new CustomLumaVideoOptions();
        $this->assertInstanceOf(CustomLumaVideoOptions::class, $obj);
        $this->assertSame(1.0, $obj->duration);
        $this->assertSame(0.0, $obj->start_offset);
        $this->assertSame(1.0, $obj->mask_contrast);
        $this->assertSame(0.0, $obj->mask_blur);
        $this->assertSame(false, $obj->mask_invert);
    }

    public function testCustomLumaVideoOptionsFullConstruction(): void
    {
        $obj = new CustomLumaVideoOptions(
            duration: 0.1,
            start_offset: 0.0,
            mask_contrast: 0.0,
            mask_blur: 0.0,
            mask_invert: true,
        );
        $this->assertInstanceOf(CustomLumaVideoOptions::class, $obj);
    }

}
