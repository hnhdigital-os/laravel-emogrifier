<?php

namespace HnhDigital\Emogrifier\Tests;

use HnhDigital\Emogrifier\Emogrifier;
use PHPUnit\Framework\TestCase;

class EmogrifierTest extends TestCase
{
    /**
     * Test output.
     *
     * @return void
     */
    public function testOutput()
    {
        $emogrifier = new Emogrifier();

        $html = '<html><h1>Hello world!</h1></html>';
        $css = 'h1 {font-size: 32px;}';

        $output = $emogrifier->parse($html, $css);

        $expected_output = '<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body><h1 style="font-size: 32px;">Hello world!</h1></body>
</html>
';

        $this->assertEquals($output, $expected_output);
    }

    /**
     * Test inline output.
     *
     * @return void
     */
    public function testInlineOutput()
    {
        $emogrifier = new Emogrifier();

        $html = '<html><h1>Hello world!</h1></html>';
        $css = 'h1 {font-size: 32px;}';

        $output = $emogrifier->parseInline($html, $css);

        $expected_output = '<h1 style="font-size: 32px;">Hello world!</h1>';

        $this->assertEquals($output, $expected_output);
    }

    /**
     * When the meta tag is present, and non-utf is present, it breaks.
     * Added the meta tag removal before processing fixes this.
     *
     * @return void
     */
    public function testExample1()
    {

        $emogrifier = new Emogrifier();

        $html = '<html><head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head><body dir="auto">Hi there,&nbsp;<div>Apologies for not getting back to you - we’ve gone another way.</div><div id="AppleMailSignature">Sent from my iPhone</div>';

        $output = $emogrifier->parseInline($html);

        $expected_output = "Hi there, <div>Apologies for not getting back to you - we’ve gone another way.</div>\n<div>Sent from my iPhone</div>";

        $this->assertEquals($output, $expected_output);
    }
}
