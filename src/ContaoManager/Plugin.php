<?php

namespace Mindbird\ContaoUiToTop\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Mindbird\ContaoUiToTop\UiToTopBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(UiToTopBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}