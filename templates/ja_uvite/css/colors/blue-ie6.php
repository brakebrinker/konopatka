<?
/*------------------------------------------------------------------------
# JA Uvite for joomla 1.5 - Version 1.0 - Licence Owner JA108425
# ------------------------------------------------------------------------
# Copyright (C) 2004-2008 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: J.O.O.M Solutions Co., Ltd
# Websites:  http://www.joomlart.com -  http://www.joomlancers.com
# This file may not be redistributed in whole or significant part.
-------------------------------------------------------------------------*/
$template_path = dirname( dirname( dirname( $_SERVER['REQUEST_URI'] ) ) );
?>

#ja-cssmenu ul li.sfhover,
#ja-cssmenu ul li.havesubchildsfhover,
#ja-cssmenu ul li.havesubchild-activesfhover,
#ja-cssmenu ul ul li.sfhover,
#ja-cssmenu ul ul li.havesubchildsfhover,
#ja-cssmenu ul ul li.havesubchild-activesfhover {
	background: #33456B !important;
}

#ja-cssmenu li ul {
 	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/blue/trans-bg.png', sizingMethod='scale');
}

