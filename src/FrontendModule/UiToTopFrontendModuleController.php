<?php

namespace Mindbird\ContaoUiToTop\FrontendModule;

use Contao\Controller;
use Contao\CoreBundle\Controller\FrontendModule\AbstractFrontendModuleController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Contao\FrontendTemplate;
use Contao\ModuleModel;
use Contao\Template;
use Mindbird\ContaoNodeOverlay\Controller\NodesOverlayContentElementController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsContentElement(UiToTopFrontendModuleController::TYPE, category: "miscellaneous")]
class UiToTopFrontendModuleController extends AbstractFrontendModuleController
{
    public const TYPE = 'uitotop';

    /**
     * @return string|void
     */
    public function generate()
    {
        $GLOBALS['TL_CSS'][] = 'bundles/uitotop/css/ui.totop.min.css|screen|static';
        $GLOBALS['TL_BODY'][] = Template::generateScriptTag(
            Controller::addAssetsUrlTo('bundles/uitotop/js/jquery.ui.totop.min.js'),
            false,
            true
        );
    }

    public function compile()
    {

    }

    protected function getResponse(FragmentTemplate $template, ModuleModel $model, Request $request): Response
    {
        $template->text = $model->text;

        return $template->getResponse();
    }
}
