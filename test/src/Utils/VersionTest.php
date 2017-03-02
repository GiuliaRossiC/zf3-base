<?php

namespace RealejoTest\Utils;

/**
 * Version test case.
 */
use Realejo\Utils\Version;

class VersionTest extends \PHPUnit\Framework\TestCase
{
    public function testGetLatest()
    {
        $this->assertNotEmpty(Version::getLatest());
    }

    public function testCompareVersion()
    {
        $this->assertEquals(0, Version::compareVersion(Version::VERSION));
        $this->assertContains(Version::compareVersion(Version::getLatest()), [-1, 0, 1]);
    }
}
