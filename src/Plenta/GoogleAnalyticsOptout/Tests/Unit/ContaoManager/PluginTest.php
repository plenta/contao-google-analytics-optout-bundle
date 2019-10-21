<?php

declare(strict_types=1);

/**
 * GoogleAnalyticsOptout extension for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2019, Christian Barkowsky & Christoph Werner
 * @author        Christian Barkowsky <https://plenta.io>
 * @author        Christoph Werner <https://plenta.io>
 */

namespace Plenta\GoogleAnalyticsOptout\Tests\Unit\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use PHPUnit\Framework\TestCase;
use Plenta\GoogleAnalyticsOptout\ContaoManager\Plugin;
use Plenta\GoogleAnalyticsOptout\PlentaGoogleAnalyticsOptoutBundle;

class PluginTest extends TestCase
{
    public function testReturnsTheBundles(): void
    {
        $parser = $this->createMock(ParserInterface::class);
        /** @var BundleConfig $config */
        $config = (new Plugin())->getBundles($parser)[0];
        $this->assertInstanceOf(BundleConfig::class, $config);
        $this->assertSame(PlentaGoogleAnalyticsOptoutBundle::class, $config->getName());
        $this->assertSame([ContaoCoreBundle::class], $config->getLoadAfter());
    }
}
