<?php
/*
 * Copyright 2008 Sven Sanzenbacher
 *
 * This file is part of the naucon package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Naucon\HtmlBuilder\Tests;

use Naucon\HtmlBuilder\HtmlPre;
use Naucon\HtmlBuilder\HtmlBuilder;

class HtmlPreTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return    void
     */
    public function testInit()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlPre();
        $this->assertEquals('<pre />', $htmlBuilder->render($htmlElementObject));

        $content = 'foo';

        $htmlElementObject = new HtmlPre($content);
        $this->assertEquals('<pre>' . $content . '</pre>', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetId()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlPre();
        $htmlElementObject->setId('testId');
        $this->assertEquals('<pre id="testId" />', $htmlBuilder->render($htmlElementObject));
    }

    /**
     * @return    void
     */
    public function testSetClass()
    {
        $htmlBuilder = new HtmlBuilder();

        $htmlElementObject = new HtmlPre();
        $htmlElementObject->setClass('testClass');
        $this->assertEquals('<pre class="testClass" />', $htmlBuilder->render($htmlElementObject));
    }
}
