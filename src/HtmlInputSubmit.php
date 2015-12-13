<?php
/*
 * Copyright 2008 Sven Sanzenbacher
 *
 * This file is part of the naucon package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Naucon\HtmlBuilder;

use Naucon\HtmlBuilder\HtmlInputAbstract;

/**
 * Html Input Submit Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlInputSubmit extends HtmlInputAbstract
{
    /**
     * Constructor
     *
     * @param       string                  input value
     * @param       string                  input name
     */
    public function __construct($value, $name=null)
    {
        $this->setType('submit');

        $this->setName($name);
        $this->setValue($value);
    }
}