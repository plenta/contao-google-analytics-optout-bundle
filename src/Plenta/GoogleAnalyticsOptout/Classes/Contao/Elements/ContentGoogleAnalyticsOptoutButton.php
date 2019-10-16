<?php

declare(strict_types=1);

/**
 * GoogleAnalyticsOptout extension for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2019, Christian Barkowsky & Christoph Werner
 * @author        Christian Barkowsky <https://plenta.io>
 * @author        Christoph Werner <https://plenta.io>
 */

namespace Plenta\GoogleAnalyticsOptout\Classes\Contao\Elements;

use Contao\ContentHyperlink;

class ContentGoogleAnalyticsOptoutButton extends ContentHyperlink
{
    protected function compile(): void
    {
        parent::compile();

        // Reset unused used dca fields
        $this->Template->embed_pre = '';
        $this->Template->embed_post = '';
        $this->Template->target = '';
        $this->Template->useImage = false;
        $this->Template->attribute = '';

        $this->Template->href = '#'; //'javascript:gaOptout()';
    }
}
