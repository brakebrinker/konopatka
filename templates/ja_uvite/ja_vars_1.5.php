<?php
/*

# ------------------------------------------------------------------------
# JA Uvite template for Joomla 1.5
# ------------------------------------------------------------------------
# Copyright (C) 2004-2010 JoomlArt.com. All Rights Reserved.
# @license - PHP files are GNU/GPL V2. CSS / JS are Copyrighted Commercial,
# bound by Proprietary License of JoomlArt. For details on licensing, 
# Please Read Terms of Use at http://www.joomlart.com/terms_of_use.html.
# Author: JoomlArt.com
# Websites:  http://www.joomlart.com -  http://www.joomlancers.com
# Redistribution, Modification or Re-licensing of this file in part of full, 
# is bound by the License applied. 
# ------------------------------------------------------------------------

*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

include_once (dirname(__FILE__).DS.'/ja_templatetools_1.5.php');
$mainframe =& JFactory::getApplication('site');

//if (defined('_DEMO_MODE_')) $tmpTools = new JA_Tools($this, array(JA_TOOL_MENU, JA_TOOL_COLOR));	
//else $tmpTools = new JA_Tools($this);
if (defined('_DEMO_MODE_')) $tmpTools = JA_Tools::getInstance($this, array(JA_TOOL_MENU, JA_TOOL_COLOR));	
else $tmpTools = JA_Tools::getInstance($this);

$tmpTools->setScreenSizes (array('wide','narrow'));
$tmpTools->setColorThemes (array('default','blue','violet'));

# Auto Collapse Divs Functions ##########
$ja_left = $this->countModules( 'left' );
$ja_right = $this->countModules( 'right' );
$ja_masscol = $this->countModules('user5');
if ($tmpTools->isContentEdit()) {
	$ja_right = $ja_left = $ja_masscol = 0;
}
if ( $ja_left && $ja_right ) {
  //2 columns on the right
	$divid = '';
} elseif ( ($ja_left || $ja_right) && !$ja_masscol ) {
  //One column without masscol
	$divid = '-c';
} elseif (($ja_left || $ja_right) && $ja_masscol) {
  //One column with masscol
	$divid = '-cm';
} elseif ($ja_masscol) {
  //masscol only
	$divid = '-m';
} else {
  //No column in right
	$divid = '-f';
}

//Main navigation
$ja_menutype = $tmpTools->getParam(JA_TOOL_MENU);
$jamenu = null;
if ($ja_menutype != 'none') {
include_once( dirname(__FILE__).DS.'ja_menus/Base.class.php' );
$japarams = JA_Base::createParameterObject('');
$japarams->set( 'menutype', $tmpTools->getParam('menutype', 'mainmenu') );
$japarams->set( 'menu_images_align', 'left' );
$japarams->set( 'menupath', $tmpTools->templateurl() .'/ja_menus');
$japarams->set('menu_title', 1);
switch ($ja_menutype) {
	case 'css':
		$menu = "CSSmenu";
		include_once( dirname(__FILE__).DS.'ja_menus/'.$menu.'.class.php' );
		break;
	case 'moo':
		$menu = "Moomenu";
		include_once( dirname(__FILE__).DS.'ja_menus/'.$menu.'.class.php' );
		break;
	case 'split':
	default:
		$menu = "Splitmenu";
		include_once( dirname(__FILE__).DS.'ja_menus/'.$menu.'.class.php' );
		break;
}
$menuclass = "JA_$menu";
$jamenu = new $menuclass ($japarams);

$hasSubnav = false;
if ($jamenu->hasSubMenu (1) && $jamenu->showSeparatedSub ) 
	$hasSubnav = true;
}	
//End for main navigation

?>
