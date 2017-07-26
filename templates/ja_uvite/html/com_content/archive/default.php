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
<form id="jForm" action="<?php JRoute::_('index.php')?>" method="post">
<?php if ($this->params->get('show_page_title')) : ?>
	<h1 class="componentheading<?php echo $this->escape($this->params->get('pageclass_sfx'))?>"><?php echo $this->escape($this->params->get('page_title')); ?></h1>
<?php endif; ?>
	<p>
		<?php if ($this->params->get('filter')) : ?>
		<?php echo JText::_('Filter').'&nbsp;'; ?>
		<input type="text" name="filter" value="<?php echo htmlspecialchars($this->filter, ENT_COMPAT, 'UTF-8'); ?>" class="inputbox" onchange="document.jForm.submit();" />
		<?php endif; ?>
		<?php echo $this->form->monthField; ?>
		<?php echo $this->form->yearField; ?>
		<?php echo $this->form->limitField; ?>
		<button type="submit" class="button"><?php echo JText::_('Filter'); ?></button>
	</p>

<?php echo $this->loadTemplate('items'); ?>

	<input type="hidden" name="view" value="archive" />
	<input type="hidden" name="option" value="com_content" />
</form>
