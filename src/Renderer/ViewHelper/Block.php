<?php declare(strict_types=1);

namespace Midnight\Block\Zend\Renderer\ViewHelper;

use Midnight\Block\BlockInterface;
use Midnight\Block\Renderer\RendererInterface;
use Zend\View\Helper\AbstractHelper;

class Block extends AbstractHelper
{
    /** @var RendererInterface */
    private $renderer;

    public function __construct(RendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    public function __invoke(BlockInterface $block): string
    {
        return $this->renderer->render($block);
    }
}
