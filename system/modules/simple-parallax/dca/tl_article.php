<?php

$GLOBALS['TL_DCA']['tl_article']['fields']['customTpl']['save_callback'][] = array("simple_parallax", "setTemplate");
$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace('{template_legend', '{parallax_legend:hide},setparallax,backgroundimage,ui_x,ui_y,ui_bg,ui_scale,ui_viewport,ui_velocity,ui_opacity,minheight;{template_legend', $GLOBALS['TL_DCA']['tl_article']['palettes']['default']);


$GLOBALS['TL_DCA']['tl_article']['fields']['setparallax'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['setparallax'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'sql'                     => "varchar(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['backgroundimage'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['backgroundimage'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['ui_x'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['ui_x'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'					  => array('tl_class'=>'clr w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['ui_y'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['ui_y'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'					  => array('tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['ui_bg'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['ui_bg'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'					  => array('tl_class'=>'clr w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['ui_scale'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['ui_scale'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'					  => array('tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['ui_viewport'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['ui_viewport'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'					  => array('tl_class'=>'clr w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['ui_velocity'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['ui_velocity'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'					  => array('tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['ui_opacity'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['ui_opacity'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'					  => array('tl_class'=>'clr w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['minheight'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['minheight'],
    'exclude'                 => true,
    'inputType'               => 'text',
	'eval'					  => array('tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);


class simple_parallax extends \Backend
{
    public function setTemplate($var, DataContainer $dc)
    {
        if($dc->activeRecord->customTpl == "")
        {
            return "mod_article_parallax";
        }
        return $var;
    }
}