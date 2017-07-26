<?php header("Content-type: text/css"); ?>
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
<?php
$template_path = dirname( dirname( $_SERVER['REQUEST_URI'] ) );
?>
h1.logo a {
 	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/logo.png', sizingMethod='image');
 	background-image: none;
}

#ja-mainnavwrap {
 	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/trans-bg1.png', sizingMethod='scale');
 	background-image: none;
 	width: 100%;
}
#ja-mainnav {
 	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/mainnav-bg.png', sizingMethod='crop');
 	background-image: none;
}

#ja-current-content {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/trans-bg1.png', sizingMethod='scale');
 	background-image: none;
}

pre, .code {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/trans-bg1.png', sizingMethod='scale');
 	background-image: none;
}

#ja-cssmenu {
	position: relative;
	z-index: 100;
}

#ja-splitmenu  {	
	position: relative;
	z-index: 100;
}
 
#ja-splitmenu a {	
	width: 150px;
	background-image: none;
}

#ja-splitmenu li a {
	width: 150px;
	background-image: none;
}

/*#ja-splitmenu a {
	width: 150px;
	background-image: none;
	
}
#ja-splitmenu li a {
	width: 150px;
	background-image: none;
}*/

*#ja-splitmenu a:hover,
#ja-splitmenu a:active,
#ja-splitmenu a:focus {
	width: 150px;
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/trans-bg1.png', sizingMethod='scale');
 	background-image: none;	
}

#ja-splitmenu li.active a, #ja-splitmenu li.active a:hover, #ja-splitmenu li.active a:active, #ja-splitmenu li.active a:focus
{
	width: 150px;
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/trans-bg1.png', sizingMethod='scale');
 	background-image: none;
}

#ja-header {
 	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/header-bg.png', sizingMethod='image');
 	background-image: none;
}

#ja-search {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/search-bg.png', sizingMethod='image');
 	background-image: none;
}
#ja-search form {	
	position: relative;
}

#jahl-newsitem, .ja-newscontent, .jazin-box {
	width: 100%;
}

.jazin-left, .jazin-right, .jazin-center {
	overflow-x: hidden;
}

#ja-cssmenu li ul {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/trans-bg.png', sizingMethod='scale');
 	background-image: none;
}

#ja-cssmenu li a {
 	background-image: none;
}

#ja-cssmenu li.sfhover a, #ja-cssmenu li.havechildsfhover a, #ja-cssmenu li.havechild-activesfhover a {
 	background-image: none;
}

#ja-cssmenu li.sfhover, #ja-cssmenu li.havechildsfhover {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/trans-bg1.png', sizingMethod='scale');
 	background-image: none;
	cursor: pointer;
}
#ja-cssmenu li.sfhover a a, #ja-cssmenu li.havechildsfhover a a, #ja-cssmenu li.havechild-activesfhover a a {
	width: 100%!important;
	background: #ff0000!important;
}

#ja-cssmenu li a.active, #ja-cssmenu li a.active:hover, #ja-cssmenu li a.active:active, #ja-cssmenu li a.active:focus {
		filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/trans-bg1.png', sizingMethod='scale');
 	background-image: none;
	width: 150px;
}

.jazin-contentwrap {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/trans-bg1.png', sizingMethod='scale');
 	background-image: none;
	width: 100%;
}

#ja-containerwrap div.moduletable, 
#ja-containerwrap-c div.moduletable,
#ja-containerwrap-m div.moduletable,
#ja-containerwrap div.moduletable_default, 
#ja-containerwrap-c div.moduletable_default,
#ja-containerwrap-m div.moduletable_default,
#ja-containerwrap div.moduletable_menu, 
#ja-containerwrap-c div.moduletable_menu,
#ja-containerwrap-m div.moduletable_menu,
#ja-containerwrap div.moduletable_text, 
#ja-containerwrap-c div.moduletable_text,
#ja-containerwrap-m div.moduletable_text,
#ja-containerwrap div.moduletable_hilite,
#ja-containerwrap-c div.moduletable_hilite,
#ja-containerwrap-m div.moduletable_hilite {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/trans-bg1.png', sizingMethod='scale');
 	background-image: none;
 	width: 100%;
}

.uvite .ja-tab-panels-top {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/trans-bg2.png', sizingMethod='scale');
 	background-image: none;
	width: 100%;
}

.uvite .ja-tabs-title-top ul.ja-tabs-title li.active, .uvite .ja-tabs-title-top ul.ja-tabs-title li.firstactive, .uvite .ja-tabs-title-top ul.ja-tabs-title li.lastactive {
filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/trans-bg2.png', sizingMethod='scale');
 	background-image: none;
	
}

.jazin-box {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/trans-bg1.png', sizingMethod='scale');
 	background-image: none;
	width: 50%;
}

#ja-botslwrap {
	position: relative;
}

.jazin-left .jazin-box {
	width: 85%;	
}

.jazin-right .jazin-box {
	width: 85%;	
}

#ja-botsl {	
}

ul.pagination a {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/trans-bg1.png', sizingMethod='scale');
 	background-image: none;
}

/* Typography */
pre, .code {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/trans-bg1.png', sizingMethod='scale');
 	background-image: none;
	width: 94%;
}

p.stickynote {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/sticky.png', sizingMethod='crop');
 	background-image: none;
	width: 90%;
}

p.download {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/download.png', sizingMethod='crop');
 	background-image: none;
	width: 90%;
}

.bignumber {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/ol-bg.png', sizingMethod='image');
 	background-image: none;
}

p.error {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/icon-error.png', sizingMethod='crop');
 	background-image: none;
	width: 90%;
}

p.message {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/icon-info.png', sizingMethod='crop');
 	background-image: none;
	width: 90%;
}

p.tips {
	filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/icon-tips.png', sizingMethod='crop');
 	background-image: none;
	width: 90%;
}

span.open {
  filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $template_path;?>/images/icon-tips.png', sizingMethod='crop') !important;
 	background-image: none !important;
}
