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

<?php if ($this->user->authorize('com_content', 'edit', 'content', 'all') || $this->user->authorize('com_content', 'edit', 'content', 'own')) : ?>
	<div class="contentpaneopen_edit<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>" style="float: left;">
		<?php echo JHTML::_('icon.edit', $this->item, $this->item->params, $this->access); ?>
	</div>
<?php endif; ?>
	<?php if (($this->item->params->get('show_create_date')) || (($this->item->params->get('show_author')) && ($this->item->author != ""))) : ?>
	<div class="date">
		<?php if ($this->item->params->get('show_create_date')) : ?>
				<?php echo JHTML::_('date', $this->item->created, JText::_('DATE_FORMAT_LC2')); ?>
		<?php endif; ?>
		<?php if (($this->item->params->get('show_author')) && ($this->item->author != "")) : ?>
			<span class="author">
				<?php $this->escape(JText::printf(($this->escape($this->item->created_by_alias) ? $this->escape($this->item->created_by_alias) : $this->escape($this->item->author)))); ?>
			</span>
		<?php endif; ?>
	<?php endif; ?>
	<?php $menu = & JSite::getMenu();
	if ($menu->getActive() != $menu->getDefault()) : ?>
	</div>
	<?php endif; ?>
	</div>
<?php if ($this->item->params->get('show_title')) : ?>
<h2>
	<?php if ($this->item->params->get('link_titles') && $this->item->readmore_link != '') : ?>
	<a href="<?php echo $this->item->readmore_link; ?>" class="contentpagetitle<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
		<?php echo $this->escape($this->item->title); ?>
	</a>
	<?php else : ?>
		<?php echo $this->escape($this->item->title); ?>
	<?php endif; ?>
</h2>
<?php endif; ?>

<?php  if (!$this->item->params->get('show_intro')) :
	echo $this->item->event->afterDisplayTitle;
endif; ?>

<?php echo $this->item->event->beforeDisplayContent; ?>

<?php if (isset ($this->item->toc)) : ?>
	<?php echo $this->item->toc; ?>
<?php endif; ?>
<?php echo $this->item->text; ?>

<!-- <?php if ( intval($this->item->modified) != 0 && $this->item->params->get('show_modify_date')) : ?>
	<span class="modifydate">
		<?php echo JText::_( 'Last Updated' ); ?> ( <?php echo JHTML::_('date', $this->item->modified, JText::_('DATE_FORMAT_LC2')); ?> )
	</span>
<?php endif; ?> -->

<?php if ($this->item->params->get('show_readmore') && $this->item->readmore) : ?>
	<a href="<?php echo $this->escape($this->item->readmore_link); ?>" title="<?php echo $this->escape($this->item->title); ?>" class="readon<?php echo $this->escape($this->item->params->get('pageclass_sfx')); ?>">
			<?php if ($this->item->readmore_register) : ?>
				<?php echo JText::_('Register to read more...'); ?>
			<?php else : ?>
				<?php echo JText::_('Read more...'); ?>
			<?php endif; ?>
	</a>
<?php endif; ?>

<span class="article_separator">&nbsp;</span>
<?php echo $this->item->event->afterDisplayContent; ?>
