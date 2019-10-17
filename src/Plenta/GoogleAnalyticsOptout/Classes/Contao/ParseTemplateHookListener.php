<?php

declare(strict_types=1);

/**
 * GoogleAnalyticsOptout extension for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2019, Christian Barkowsky & Christoph Werner
 * @author        Christian Barkowsky <https://plenta.io>
 * @author        Christoph Werner <https://plenta.io>
 */

namespace Plenta\GoogleAnalyticsOptout\Classes\Contao;

use Contao\FrontendTemplate;
use Contao\LayoutModel;
use Contao\PageModel;
use Contao\PageRegular;

class ParseTemplateHookListener
{
    /**
     * @param PageModel   $objPage
     * @param LayoutModel $objLayout
     * @param PageRegular $objPageRegular
     */
    public function addAnalyticsOptoutScript(
        PageModel $objPage,
        LayoutModel $objLayout,
        PageRegular $objPageRegular
    ): void {
        $strTemplate = 'googleAnalyticsOptout';

        $objTemplate = new FrontendTemplate($strTemplate);

        $parsedTemplate = $objTemplate->parse();

        $GLOBALS['TL_BODY'][] = $parsedTemplate;
    }

    /**
     * @param PageModel   $objPage
     * @param LayoutModel $objLayout
     * @param PageRegular $objPageRegular
     */
    public function addAnalyticsOptoutScriptHeader(
        PageModel $objPage,
        LayoutModel $objLayout,
        PageRegular $objPageRegular
    ): void {
        $strTemplate = 'googleAnalyticsOptoutCheckCookie';

        $objTemplate = new FrontendTemplate($strTemplate);
        $parsedTemplate = $objTemplate->parse();

        $GLOBALS['TL_HEAD'][] = $parsedTemplate;
    }
}
