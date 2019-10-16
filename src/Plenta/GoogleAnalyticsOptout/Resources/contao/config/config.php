<?php

declare(strict_types=1);

/**
 * GoogleAnalyticsOptout extension for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2019, Christian Barkowsky & Christoph Werner
 * @author        Christian Barkowsky <https://plenta.io>
 * @author        Christoph Werner <https://plenta.io>
 */

use Plenta\GoogleAnalyticsOptout\Classes\Contao\Elements\ContentGoogleAnalyticsOptoutButton;

/*
 * Hooks
 */
$GLOBALS['TL_HOOKS']['parseTemplate'][] = ['Plenta\GoogleAnalyticsOptout\Classes\Contao\AddFooterScript', 'addAnalyticsOptoutScriptHeader'];
$GLOBALS['TL_HOOKS']['parseTemplate'][] = ['Plenta\GoogleAnalyticsOptout\Classes\Contao\AddFooterScript', 'addAnalyticsOptoutScript'];

$GLOBALS['TL_CTE']['plentaAnalytics']['plenta_analytics_optout'] = ContentGoogleAnalyticsOptoutButton::class;
