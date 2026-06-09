<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations\Tests;

use PHPUnit\Framework\TestCase;
use Gisl\Generated\Operations\RenderVariantsImageOptions;
use Gisl\Generated\Operations\RenderVariantsImageTargetsItem;
use Gisl\Generated\Operations\RenderVariantsImageTargetsItemFit;
use Gisl\Generated\Operations\RenderVariantsImageTargetsItemOutputFormat;

final class RenderVariantsTest extends TestCase
{
    public function testRenderVariantsImageOptionsDefaultConstruction(): void
    {
        $obj = new RenderVariantsImageOptions(
            targets: [new RenderVariantsImageTargetsItem(id: 'x', width: 1, height: 1, fit: RenderVariantsImageTargetsItemFit::Max, quality: 1, output_format: RenderVariantsImageTargetsItemOutputFormat::Jpeg, background: 'x', allow_upscale: true)],
        );
        $this->assertInstanceOf(RenderVariantsImageOptions::class, $obj);
    }

    public function testRenderVariantsImageOptionsFullConstruction(): void
    {
        $obj = new RenderVariantsImageOptions(
            targets: [new RenderVariantsImageTargetsItem(id: 'x', width: 1, height: 1, fit: RenderVariantsImageTargetsItemFit::Max, quality: 1, output_format: RenderVariantsImageTargetsItemOutputFormat::Jpeg, background: 'x', allow_upscale: true)],
        );
        $this->assertInstanceOf(RenderVariantsImageOptions::class, $obj);
    }

}
