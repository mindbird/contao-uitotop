<?php

$GLOBALS['TL_DCA']['tl_module']['palettes']['uitotop'] = '{title_legend},name,type;{uitotop_legend},uitotop_text;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_module']['fields']['uitotop_text'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['uitotop_text'],
    'inputType' => 'text',
    'eval' => array(
        'mandatory' => true,
        'tl_class' => 'w50',
        'allowHtml' => true,
        'default' => 'Nach oben'
    ),
    'sql' => "varchar(255) NOT NULL default ''"
);
