<?php

// Auto-generated -- do not edit

declare(strict_types=1);

namespace Gisl\Generated\Operations\Tests;

use PHPUnit\Framework\TestCase;
use Gisl\Generated\Operations\ArchiveFolderStructure;
use Gisl\Generated\Operations\ArchiveFormat;
use Gisl\Generated\Operations\ArchiveOptions;

final class ArchiveTest extends TestCase
{
    public function testArchiveFormatZipBackingValue(): void
    {
        $enum = ArchiveFormat::from('zip');
        $this->assertSame(ArchiveFormat::Zip, $enum);
        $this->assertSame('zip', $enum->value);
    }

    public function testArchiveFormatTarGzBackingValue(): void
    {
        $enum = ArchiveFormat::from('tar.gz');
        $this->assertSame(ArchiveFormat::TarGz, $enum);
        $this->assertSame('tar.gz', $enum->value);
    }

    public function testArchiveFormatCaseCount(): void
    {
        $this->assertCount(2, ArchiveFormat::cases());
    }

    public function testArchiveFolderStructureFlatBackingValue(): void
    {
        $enum = ArchiveFolderStructure::from('flat');
        $this->assertSame(ArchiveFolderStructure::Flat, $enum);
        $this->assertSame('flat', $enum->value);
    }

    public function testArchiveFolderStructureByJobBackingValue(): void
    {
        $enum = ArchiveFolderStructure::from('by_job');
        $this->assertSame(ArchiveFolderStructure::ByJob, $enum);
        $this->assertSame('by_job', $enum->value);
    }

    public function testArchiveFolderStructureCaseCount(): void
    {
        $this->assertCount(2, ArchiveFolderStructure::cases());
    }

    public function testArchiveOptionsDefaultConstruction(): void
    {
        $obj = new ArchiveOptions();
        $this->assertInstanceOf(ArchiveOptions::class, $obj);
        $this->assertSame(ArchiveFormat::Zip, $obj->format);
        $this->assertSame(ArchiveFolderStructure::Flat, $obj->folder_structure);
    }

    public function testArchiveOptionsFullConstruction(): void
    {
        $obj = new ArchiveOptions(
            format: ArchiveFormat::Zip,
            folder_structure: ArchiveFolderStructure::Flat,
        );
        $this->assertInstanceOf(ArchiveOptions::class, $obj);
    }

}
