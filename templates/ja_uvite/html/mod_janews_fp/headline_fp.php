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
$headlinelang 			= 	trim( $params->get( 'headlinelang' ));
$headlineheight 		= 	intval ($params->get( 'headlineheight' ));
$numberofheadlinenews 	= 	intval (trim( $params->get( 'numberofheadlinenews', 10 ) ));
$delaytime 				= 	intval (trim( $params->get( 'delaytime', 5 ) ));
$autoroll 			= 	intval (trim( $params->get( 'autoroll', 0) ));
$showhlreadmore 				= 	intval (trim( $params->get( 'showhlreadmore', 1 ) ));
$showhltitle 				= 	intval (trim( $params->get( 'showhltitle', 1 ) ));
$showhltools 				= 	intval (trim( $params->get( 'showhltools', 1 ) ));
$hiddenClasses 				= 	trim( $params->get( 'hiddenClasses', '' ) );

$imgalign = '';

$numberofheadlinenews = ($numberofheadlinenews < count($rows)) ? $numberofheadlinenews : count($rows);

if ($numberofheadlinenews >= 1) {
	if (isset($_COOKIE['JAHL-AUTOROLL'])) $autoroll = ($_COOKIE['JAHL-AUTOROLL']) ? 1 : 0;
	setcookie("JAHL-AUTOROLL", $autoroll, 0, "/");
	
	if (!defined ('_MOD_JANEWS_FP_ASSETS_JS')) {
		define ('_MOD_JANEWS_FP_ASSETS_JS', 1);
		JHTML::script('headline.js','modules/'.$module->module.'/assets/');
	}
?>
	
	<script type="text/javascript">
		var jaNewsHL = new JA_NewsHeadline({
				autoroll: <?php echo intval($autoroll || !$showhltools);?>,
				total: <?php echo $numberofheadlinenews;?>,
				delaytime: <?php echo $delaytime;?>
		});
		window.addEvent('domready', function() {
			jaNewsHL.start();
		});
	</script>

<?php
}
$pauseplay = $autoroll?'Pause':'Play';
?>

<div id="ja-newshlcache" style="display: none">
<?php
foreach ($rows as $news) {
	$link   = JRoute::_(ContentHelperRoute::getArticleRoute($news->slug, $news->catslug, $news->sectionid));
	$image = modJANewsHelperFP::replaceImage ($news, $imgalign, 1, $bigmaxchar, 1, $bigimg_w, $bigimg_h, $hiddenClasses);
?>
	<div>
	<div class="ja-newscontent">
	<?php echo $image; ?>	
	<?php if ($showhltitle) { ?>
	<h4 class="jazin-title"><a href="<?php echo $link;?>" class="ja-newstitle" title="<?php echo strip_tags($news->title); ?>"><?php echo $news->title;?></a></h4>
	<?php } ?>
	<?php echo $bigmaxchar?$news->introtext1:$news->introtext;?>
	<?php if ($showhlreadmore) {?>
	<a href="<?php echo $link;?>" class="readon"><?php echo JText::_('Read more...');?></a>
	<?php } ?>
	</div>
	</div>
<?php
}
?>
</div>

<div id="jazin-hlwrap">
<div class="jazin-contentwrap clearfix" style="width: 100%;<?php echo ($headlineheight ? " height: {$headlineheight}px; overflow: hidden;" : ""); ?>">

<div class="ja-newsitem" style="width: 100%;">
<div class="ja-newsitem-inner">
	<?php	if($showhltools || $headlinelang) : ?>
	<span id="jahl-headlineanchor"><?php echo $headlinelang;?></span>
	<?php endif; ?>
		
	<div id="jahl-newsitem"></div>
	<div id="ja-zinhl-newsitem"></div>
	<?php
	if($showhltools) :
	?>
	<div class="ja-newscat clearfix">
		<span class="jahl-next-label"><?php echo JText::_('Next:');?></span><span id="jahl-next-title"></span>
		<div class="jahl-newscontrol">
			<ul>
				<li><img title="<?php echo $pauseplay;?>" style="cursor: pointer;" id="jahl-switcher" onclick="jaNewsHL.toogle(); return false;" src="<?php echo modJANewsHelperFP::getFile(strtolower($pauseplay).'.png','modules/mod_janews_fp/assets/','templates/'.$mainframe->getTemplate().'/images/'); ?>" alt="<?php echo $pauseplay;?>" border="0" /></li>
				<li><img title="" style="cursor: pointer;" onclick="jaNewsHL.prev(); return false;" id="jahl-prev" src="<?php echo modJANewsHelperFP::getFile('prev.png','modules/mod_janews_fp/assets/','templates/'.$mainframe->getTemplate().'/images/'); ?>" alt="Previous" border="0" /></li>
				<li><img title="" style="cursor: pointer;" onclick="jaNewsHL.next(); return false;" id="jahl-next" src="<?php echo modJANewsHelperFP::getFile('next.png','modules/mod_janews_fp/assets/','templates/'.$mainframe->getTemplate().'/images/'); ?>" alt="Next" border="0" /></li>
			</ul>
			<span id="ja-zinhl-counter">1/<?php echo $numberofheadlinenews;?></span>
		</div>
	</div>
	<?php endif; ?>

</div>

</div>

</div></div>
<span class="article_seperator">&nbsp;</span>
