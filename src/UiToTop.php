<?php

namespace Mindbird\Contao\UiToTop;

use Contao\FrontendTemplate;
use Contao\Module as ContaoModule;

class Module extends ContaoModule
{

    protected $strTemplate = 'mod_uitotop';

    /**
     * @return string|void
     */
    public function generate()
    {
        $GLOBALS['TL_JAVASCRIPT'][] = '/system/modules/uitotop/assets/js/jquery.ui.totop.js|static';
        $GLOBALS['TL_CSS'][] = '/system/modules/uitotop/assets/css/ui.totop.css|screen|static';
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
