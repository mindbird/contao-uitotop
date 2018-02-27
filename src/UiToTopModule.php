<?php

namespace Mindbird\Contao\UiToTop;

use Contao\FrontendTemplate;

class UiToTopModule extends \Contao\Module
{

    protected $strTemplate = 'mod_uitotop';

    /**
     * @return string|void
     */
    public function generate()
    {
        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/uitotop/js/jquery.ui.totop.js';
        $GLOBALS['TL_CSS'][] = 'bundles/uitotop/css/ui.totop.css|screen';
        $objTemplate = new FrontendTemplate($this->strTemplate);
        $objTemplate->text = $this->uitotop_text;
        $GLOBALS['TL_BODY'][] = $objTemplate->parse();
    }

    /**
     *
     */
    public function compile()
    {
        
    }
}
