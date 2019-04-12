<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace ReneLuecking\ContaoHelloWorlddBundle\Tests;

use ReneLuecking\ContaoHelloWorldBundle\ContaoHelloWorldBundle;
use PHPUnit\Framework\TestCase;

class ContaoHelloWorldBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoHelloWorldBundle();

        $this->assertInstanceOf('ReneLuecking\ContaoHelloWorldBundle\ContaoHelloWorldBundle', $bundle);
    }
}
