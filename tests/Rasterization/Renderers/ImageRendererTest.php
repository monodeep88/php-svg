<?php

namespace SVG;

use SVG\Rasterization\Renderers\ImageRenderer;
use SVG\Nodes\SVGNode;

class SVGNodeClass extends SVGNode
{
    const TAG_NAME = 'test_subclass';

    /**
     * @SuppressWarnings("unused")
     */
    public function rasterize(\SVG\Rasterization\SVGRasterizer $rasterizer)
    {
    }
}

/**
 * @SuppressWarnings(PHPMD)
 *
 * @requires extension gd
 */
class ImageRendererTest extends \PHPUnit\Framework\TestCase
{
    public function testRender()
    {
        $rast = new \SVG\Rasterization\SVGRasterizer(10, 20, null, 100, 200);
        $options = array(
            'href'   => __DIR__.'/../../sample.svg',
            'x'      => 10.5,
            'y'      => 10.5,
            'width'  => 100.5,
            'height' => 100.5
        );
        $svgImageRender = new ImageRenderer();
        $context = new SVGNodeClass();

        $this->assertNull($svgImageRender->render($rast, $options, $context));
    }
}
