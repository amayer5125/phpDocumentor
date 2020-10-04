<?php

declare(strict_types=1);

namespace phpDocumentor\Guides\RestructuredText\HTML\Renderers;

use phpDocumentor\Guides\RestructuredText\Nodes\AnchorNode;
use phpDocumentor\Guides\RestructuredText\Renderers\NodeRenderer;
use phpDocumentor\Guides\RestructuredText\TemplateRenderer;

class AnchorNodeRenderer implements NodeRenderer
{
    /** @var AnchorNode */
    private $anchorNode;

    /** @var TemplateRenderer */
    private $templateRenderer;

    public function __construct(AnchorNode $anchorNode, TemplateRenderer $templateRenderer)
    {
        $this->anchorNode       = $anchorNode;
        $this->templateRenderer = $templateRenderer;
    }

    public function render() : string
    {
        return $this->templateRenderer->render('anchor.html.twig', [
            'anchorNode' => $this->anchorNode,
        ]);
    }
}
