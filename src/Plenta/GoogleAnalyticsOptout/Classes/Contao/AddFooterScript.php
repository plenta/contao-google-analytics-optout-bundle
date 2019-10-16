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
use Contao\Template;

class AddFooterScript
{
    public function addAnalyticsOptoutScript(Template $objTemplate = null): void
    {
        $strTemplate = 'googleAnalyticsOptout';

        if (TL_MODE !== 'FE' || 'fe_' !== substr($objTemplate->getName(), 0, 3)) {
            return;
        }

        $objTemplate = new FrontendTemplate($strTemplate);

        $strTemplate = $objTemplate->parse();

        $GLOBALS['TL_BODY'][] = $strTemplate;
    }
}
