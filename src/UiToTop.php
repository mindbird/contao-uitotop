<?php

namespace UiToTop;

class UiToTop extends \Module
{

    protected $strTemplate = 'mod_uitotop';

    public function generate()
    {
        $GLOBALS['TL_JAVASCRIPT'][] = '/system/modules/contao/assets/js/jquery.ui.totop.js|static';
        $GLOBALS['TL_CSS'][] = '/system/modules/contao/assets/css/ui.totop.css|screen|static';
        $objTemplate = new \FrontendTemplate($this->strTemplate);
        $objTemplate->text = $this->uitotop_text;
        $GLOBALS['TL_BODY'][] = $objTemplate->parse();
    }

    public function compile()
    {
        
    }
}
