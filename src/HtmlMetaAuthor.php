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

/**
 * Html Meta Author Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlMetaAuthor extends HtmlMetaAbstract
{
    /**
     * Constructor
     *
     * @param       string      $content        meta content
     */
    public function __construct($content)
    {
        $this->setName('author');
        $this->setContent($content);
    }
}