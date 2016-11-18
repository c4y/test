<?php

foreach($GLOBALS['TL_DCA']['tl_content']['palettes'] as $palette=>$v)
{
    if ($palette != "__selector__" && $palette != "default")
    {
        $GLOBALS['TL_DCA']['tl_content']['palettes'][$palette] = str_replace('{template_legend', '{parallax_legend:hide},setparallax,ui_x,ui_y,ui_bg,ui_scale,ui_viewport,ui_velocity,ui_opacity;{template_legend', $GLOBALS['TL_DCA']['tl_content']['palettes'][$palette]);
    }
}


$GLOBALS['TL_DCA']['tl_content']['fields']['setparallax'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['setparallax'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'sql'                     => "varchar(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ui_x'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['ui_x'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'					  => array('tl_class'=>'clr w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ui_y'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['ui_y'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'					  => array('tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ui_bg'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['ui_bg'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'					  => array('tl_class'=>'clr w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ui_scale'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['ui_scale'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'					  => array('tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ui_viewport'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['ui_viewport'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'					  => array('tl_class'=>'clr w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ui_velocity'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['ui_velocity'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'					  => array('tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ui_opacity'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['ui_opacity'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'					  => array('tl_class'=>'clr w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['minheight'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['minheight'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'					  => array('tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);