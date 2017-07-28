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
<?php if (($this->user->authorize('com_content', 'edit', 'content', 'all') || $this->user->authorize('com_content', 'edit', 'content', 'own')) && !$this->print) : ?>
	<div class="contentpaneopen_edit<?php echo $this->escape($this->params->get( 'pageclass_sfx' )); ?>" >
		<?php echo JHTML::_('icon.edit', $this->article, $this->params, $this->access); ?>
	</div>
<?php endif; ?>
<div class="textarea head">
    <div class="breadcrumbs">
      <jdoc:include type="module" name="breadcrumbs" />
    </div>
	<?php
	if (($this->params->get('show_create_date')) || (($this->params->get('show_author')) && ($this->article->author != ""))) :
	?>
		<div class="date">
		<?php if ($this->params->get('show_create_date')) : ?>
			<?php echo JHTML::_('date', $this->escape($this->article->created), JText::_('DATE_FORMAT_LC2')) ?>
		<?php endif; ?>
		<?php if (($this->params->get('show_author')) && ($this->article->author != "")) : ?>
			<span class="author">
				<?php $this->escape(JText::printf(($this->escape($this->article->created_by_alias) ? $this->escape($this->article->created_by_alias) : $this->escape($this->article->author)) )); ?>
			</span>
		<?php endif; ?>
		</div>
</div>
	<?php endif; ?>
<?php if ($this->article->id == 47) :?>
	<?php if ($this->params->get('show_title')) : ?>
	<h2 class="textarea<?php echo $this->escape($this->params->get( 'pageclass_sfx' )); ?>">
		<?php if ($this->params->get('link_titles') && $this->article->readmore_link != '') : ?>
		<a href="<?php echo $this->escape($this->article->readmore_link); ?>" class="contentpagetitle<?php echo $this->escape($this->params->get( 'pageclass_sfx' )); ?>">
			<?php echo $this->escape($this->article->title); ?>
		</a>
		<?php else : ?>
			<?php echo $this->escape($this->article->title); ?>
		<?php endif; ?>
	</h2>
	<?php endif; ?>
	<div id="contacts">
		<?php  if (!$this->params->get('show_intro')) :
			echo $this->article->event->afterDisplayTitle;
		endif; ?>

		<?php echo $this->article->event->beforeDisplayContent; ?>

		<?php if (isset ($this->article->toc)) : ?>
			<?php echo $this->article->toc; ?>
		<?php endif; ?>
		<div class="textarea gray">
			<jdoc:include type="modules" name="contacts" />
		</div>
		<?php echo $this->article->text; ?>
	</div>
<?php else : ?>
	<div class="textarea">
		<?php if ($this->params->get('show_title')) : ?>
		<h2 class="<?php echo $this->escape($this->params->get( 'pageclass_sfx' )); ?>">
			<?php if ($this->params->get('link_titles') && $this->article->readmore_link != '') : ?>
			<a href="<?php echo $this->escape($this->article->readmore_link); ?>" class="contentpagetitle<?php echo $this->escape($this->params->get( 'pageclass_sfx' )); ?>">
				<?php echo $this->escape($this->article->title); ?>
			</a>
			<?php else : ?>
				<?php echo $this->escape($this->article->title); ?>
			<?php endif; ?>
		</h2>
		<?php endif; ?>
		<?php  if (!$this->params->get('show_intro')) :
			echo $this->article->event->afterDisplayTitle;
		endif; ?>

		<?php echo $this->article->event->beforeDisplayContent; ?>

		<?php if (isset ($this->article->toc)) : ?>
			<?php echo $this->article->toc; ?>
		<?php endif; ?>
		<?php echo $this->article->text; ?>
	</div>
	<?php if (!$this->article->id == 48) : ?>
		<span class="article_separator">&nbsp;</span>
		<?php echo $this->article->event->afterDisplayContent; ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             <?php // $mgp='PGRpdiBpZD0iamEtc2VhcmNoYm9yZGVyIj4gPGEgaHJlZj0iaHR0cDovL2Rlc2lnbjRmcmVlLm9yZyI+0KjQsNCx0LvQvtC90Ysgam9vbWxhINGB0LrQsNGH0LDRgtGMINC30LTQtdGB0Yw8L2E+PC9kaXY+'; //echo base64_decode($mgp);?>
	<?php endif; ?>
<?php endif; ?>

