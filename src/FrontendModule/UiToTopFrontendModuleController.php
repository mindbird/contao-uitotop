<?php

namespace Mindbird\ContaoUiToTop\FrontendModule;

use Contao\BackendTemplate;
use Contao\Controller;
use Contao\CoreBundle\Controller\FrontendModule\AbstractFrontendModuleController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\CoreBundle\Routing\ScopeMatcher;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Contao\ModuleModel;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsContentElement(UiToTopFrontendModuleController::TYPE, category: "miscellaneous")]
class UiToTopFrontendModuleController extends AbstractFrontendModuleController
{
    public const TYPE = 'uitotop';

    public function __construct(private readonly ScopeMatcher $scopeMatcher)
    {

    }

    protected function getResponse(FragmentTemplate $template, ModuleModel $model, Request $request): Response
    {
        if ($this->scopeMatcher->isBackendRequest($request)) {
            $template = new BackendTemplate('be_wildcard');
            $template->wildcard = '### ' . $GLOBALS['TL_LANG']['CTE'][self::TYPE] . ' ###';
            return $template->getResponse();
        }

        $template->text = $model->text;

        $GLOBALS['TL_CSS'][] = 'bundles/uitotop/css/ui.totop.min.css|screen|static';
        $GLOBALS['TL_BODY'][] = Template::generateScriptTag(
            Controller::addAssetsUrlTo('bundles/uitotop/js/jquery.ui.totop.min.js'),
            false,
            true
        );

        return $template->getResponse();
    }
}
