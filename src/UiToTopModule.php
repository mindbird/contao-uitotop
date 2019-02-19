<?php

namespace Mindbird\Contao\UiToTop;

use Contao\Controller;
use Contao\FrontendTemplate;
use Contao\Template;

class UiToTopModule extends \Contao\Module
{

    protected $strTemplate = 'mod_uitotop';

    /**
     * @return string|void
     */
    public function generate()
    {
        $objTemplate = new FrontendTemplate($this->strTemplate);
        $objTemplate->text = $this->uitotop_text;
        $GLOBALS['TL_BODY'][] = $objTemplate->parse();

        $GLOBALS['TL_CSS'][] = 'bundles/uitotop/css/ui.totop.min.css|screen|static';
        $GLOBALS['TL_BODY'][] = Template::generateScriptTag(
            Controller::addAssetsUrlTo('bundles/uitotop/js/jquery.ui.totop.min.js'),
            true,
            true
        );
    }

    public function compile()
    {

    }
}
