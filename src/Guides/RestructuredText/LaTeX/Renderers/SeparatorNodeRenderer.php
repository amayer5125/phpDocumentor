<?php

declare(strict_types=1);

namespace phpDocumentor\Guides\RestructuredText\LaTeX\Renderers;

use phpDocumentor\Guides\RestructuredText\Renderers\NodeRenderer;
use phpDocumentor\Guides\RestructuredText\TemplateRenderer;

class SeparatorNodeRenderer implements NodeRenderer
{
    /** @var TemplateRenderer */
    private $templateRenderer;

    public function __construct(TemplateRenderer $templateRenderer)
    {
        $this->templateRenderer = $templateRenderer;
    }

    public function render() : string
    {
        return $this->templateRenderer->render('separator.tex.twig');
    }
}
