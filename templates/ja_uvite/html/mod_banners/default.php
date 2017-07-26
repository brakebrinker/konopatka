<?php // no direct access
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
defined('_JEXEC') or die('Restricted access'); ?>
<div class="advs bannergroup<?php echo $params->get( 'moduleclass_sfx' ) ?>">

<?php if ($headerText) : ?>
  <div class="bannerheader"><?php echo $headerText ?></div>
<?php endif;

foreach($list as $item) :

	?><div class="banneritem<?php echo $params->get( 'moduleclass_sfx' ) ?>"><?php
	echo modBannersHelper::renderBanner($params, $item);
	?>
	</div>
<?php endforeach; ?>

<?php if ($footerText) : ?>
	<div class="bannerfooter<?php echo $params->get( 'moduleclass_sfx' ) ?>">
		 <?php echo $footerText ?>
	</div>
<?php endif; ?>
</div>
