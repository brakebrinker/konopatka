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
defined('_JEXEC') or die('Restricted access');
/* This template for headline (frontpage): first news with big image and next news with smaller images
bigimg_w, bigimg_h, smallimg_w, smallimg_h
*/
$showhlreadmore 				= 	intval (trim( $params->get( 'showhlreadmore', 0 ) ));
$hiddenClasses 				= 	trim( $params->get( 'hiddenClasses', '' ) );
$i = 0;
?>
<div id="jazin-hlwrap" class="clearfix">

	<div id="jazin-hlfirst">
	<?php foreach ($rows as $news) :
	if($i<$bigitems) :
		$link   = JRoute::_(ContentHelperRoute::getArticleRoute($news->slug, $news->catslug, $news->sectionid));
		$image = modJANewsHelperFP::replaceImage ($news, $imgalign, 1, $bigmaxchar, $bigshowimage, $bigimg_w, $bigimg_h, $hiddenClasses);
	  //First new
	?>
		<div class="jazin-contentwrap">
			<div class="jazin-content clearfix">
				<?php echo $image; ?>
				<h2 class="jazin-title"><a href="<?php echo $link;?>" title="<?php echo strip_tags($news->title); ?>"><?php echo $news->title;?></a></h2>
				<?php echo $bigmaxchar?$news->introtext1:$news->introtext;?>
      	<?php if ($showhlreadmore) {?>
      	<a href="<?php echo $link;?>" class="readon"><?php echo JText::_('Read more...');?></a>
      	<?php } ?>
			</div>
		</div>
  <?php if($i==$bigitems-1):?>
	</div>
	<div id="jazin-hlnext">
	<?php endif;?>
	<?php else: ?>
	<?php
		$link   = JRoute::_(ContentHelperRoute::getArticleRoute($news->slug, $news->catslug, $news->sectionid));
		$image = modJANewsHelperFP::replaceImage ($news, $imgalign, 1, $smallmaxchar, $smallshowimage, $smallimg_w, $smallimg_h, $hiddenClasses);
	  //Next news
	?>
		<div class="jazin-contentwrap">
			<div class="jazin-content clearfix">
				<?php echo $image; ?>
				<h4 class="jazin-title"><a href="<?php echo $link;?>" title="<?php echo strip_tags($news->title); ?>"><?php echo $news->title;?></a></h4>
				<?php echo $smallmaxchar?$news->introtext1:$news->introtext;?>
			</div>
		</div>
	<?php
	endif;
	++$i;
	endforeach;?>
	</div>

</div>

<span class="article_separator">&nbsp;</span>
