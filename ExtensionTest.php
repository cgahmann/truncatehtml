<?php

namespace Bolt\Extension\CGahmann\TruncateHtml\Tests;

use Bolt\Tests\BoltUnitTest;
use Bolt\Extension\CGahmann\TruncateHtml\Extension;

/**
 * Ensure that the TruncateHtml extension loads correctly.
 *
 */
class ExtensionTest extends BoltUnitTest
{
    public function testExtensionRegister()
    {
        $app = $this->getApp();
        $extension = new Extension($app);
        $app['extensions']->register( $extension );
        $name = $extension->getName();
        $this->assertSame($name, 'TruncateHtml');
        $this->assertSame($extension, $app["extensions.$name"]);
    }
}
