<?php

/*
 * CSS to Attributes addon for Bear Framework
 * https://github.com/ivopetkov/css-to-attributes-bearframework-addon
 * Copyright (c) Ivo Petkov
 * Free to use under the MIT license.
 */

/**
 * @runTestsInSeparateProcesses
 */
class CssToAttributesTest extends BearFramework\AddonTests\PHPUnitTestCase
{

    /**
     * 
     */
    public function testOutput()
    {
        $app = $this->getApp();

        $html = '<html><head><link rel="client-packages-embed" name="cssToAttributes"></head></html>';
        $result = $app->clientPackages->process($html);

        $this->assertTrue(strpos($result, '<script>var cssToAttributes=') !== false);
    }
}
