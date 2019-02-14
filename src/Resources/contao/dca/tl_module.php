<?php

$GLOBALS['TL_DCA']['tl_module']['palettes']['uitotop'] = '{title_legend},name,type;{uitotop_legend},uitotop_text;';

$GLOBALS['TL_DCA']['tl_module']['fields']['uitotop_text'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['uitotop_text'],
    'inputType' => 'text',
    'eval' => [
        'mandatory' => true,
        'tl_class' => 'w50',
        'allowHtml' => true,
        'default' => 'Nach oben'
    ],
    'sql' => "text NULL"
);
