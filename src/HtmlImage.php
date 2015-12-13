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

use Naucon\HtmlBuilder\HtmlElementUniversalAbstract;

/**
 * Html Image Class
 *
 * @package    HtmlBuilder
 * @author     Sven Sanzenbacher
 */
class HtmlImage extends HtmlElementUniversalAbstract
{
    /**
     * @access      protected
     * @var         string                  html element tag
     */
    protected $tag = 'img';


    /**
     * Constructor
     *
     * @param       string                  image source uri
     * @param       string                  image alternative text
     */
    public function __construct($src, $alt=null)
    {
        $this->setSrc($src);
        $this->setAlt($alt);
    }


    /**
     * @return      string                  html element attribute src
     */
    public function getSrc()
    {
        return $this->getAttribute('src');
    }

    /**
     * @param       string                  html element attribute src
     * @return      HtmlImage
     */
    public function setSrc($src)
    {
        $this->setAttribute('src', $src);
        return $this;
    }

    /**
     * @return      string                  html element attribute alt
     */
    public function getAlt()
    {
        return $this->getAttribute('alt');
    }

    /**
     * @param       string                  html element attribute alt
     * @return      HtmlImage
     */
    public function setAlt($alt)
    {
        $this->setAttribute('alt', $alt);
        return $this;
    }

    /**
     * @return      string                  html element attribute width
     */
    public function getWidth()
    {
        return $this->getAttribute('width');
    }

    /**
     * @param       string                  html element attribute width
     * @return      HtmlImage
     */
    public function setWidth($width)
    {
        if ((int)$width > 0) {
            $this->setAttribute('width', (int)$width);
        } else {
            $this->setAttribute('width', null);
        }
        return $this;
    }

    /**
     * @return      string                  html element attribute height
     */
    public function getHeight()
    {
        return $this->getAttribute('height');
    }

    /**
     * @param       string                  html element attribute height
     * @return      HtmlImage
     */
    public function setHeight($height)
    {
        if ((int)$height > 0) {
            $this->setAttribute('height', (int)$height);
        } else {
            $this->setAttribute('height', null);
        }
        return $this;
    }
}