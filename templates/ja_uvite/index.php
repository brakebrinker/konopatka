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
/*

if (!preg_match( '|^www\..*|', $_SERVER [ 'HTTP_HOST' ])) {
	header ( 'HTTP/1.0 301 Moved Permanently' );
	$url = trim ($_SERVER [ 'REQUEST_URI' ], '/');
	if(trim($_SERVER [ 'REQUEST_URI' ], '/') != '') $url .= '/';
	header('Location: http://www.konopatka.su/' . $url);
	die();
}


if (strpos($_SERVER[ 'REQUEST_URI' ], "index.php") != false) {
	$resuri = str_replace("index.php", '', $_SERVER[ 'REQUEST_URI' ]);
	header ( 'HTTP/1.0 301 Moved Permanently' );
	header('Location: http://www.konopatka.su' . $resuri);
	die();
	
}

*/
defined( '_JEXEC' ) or die( 'Restricted access' );

include_once (dirname(__FILE__).DS.'ja_vars_1.5.php');

if(isset($_GET['Itemid'])){
	
	$db=& JFactory::getDBO();

	$q='SELECT id, name FROM `jos_menu` WHERE `id` = '.$_GET['Itemid'].'
	';

	$db->setQuery($q);

	$data_row = $db->loadRow();
	if(!$data_row){
		header('Location: /index.php?option=com_content&view=article&id=70&Itemid=57');
		exit;
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">

<head>
<jdoc:include type="head" />
<?php JHTML::_('behavior.mootools'); ?>

<link rel="stylesheet" href="<?php echo $tmpTools->baseurl(); ?>templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $tmpTools->baseurl(); ?>templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $tmpTools->templateurl(); ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $tmpTools->templateurl(); ?>/css/typo.css" type="text/css" />




<script language="javascript" type="text/javascript">
	var siteurl = '<?php echo $tmpTools->baseurl();?>';
	var tmplurl = '<?php echo $tmpTools->templateurl();?>';
</script>

<!--script  language = "JavaScript">
var bigsize = "350"; 
var smallsize = "100";
function changeSizeImage(im) {
  if(im.height == bigsize) im.height = smallsize;
  else im.height = bigsize;
}
</script-->



<script language="javascript" type="text/javascript" src="<?php echo $tmpTools->templateurl(); ?>/js/ja.script.js"></script>
<!-- js for dragdrop -->

<script language="javascript" type="text/javascript" src="<?php echo $tmpTools->templateurl(); ?>/js/fancybox/jquery-1.3.2.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $tmpTools->templateurl(); ?>/js/fancybox/jquery.easing.1.3.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $tmpTools->templateurl(); ?>/js/fancybox/jquery.fancybox-1.2.1.pack.js"></script>
<link rel="stylesheet" href="<?php echo $tmpTools->templateurl(); ?>/js/fancybox/jquery.fancybox.css" type="text/css" />
<script type="text/javascript">
(function ($) {
  $(document).ready(function() {
	
		$('.article-content img').each(function(){
			
			$(this).wrap('<a href="'+$(this).attr('src')+'" class="group" rel="group"></a>');
			
		});
		
		$('#jazin-fp img').each(function(){
			
			$(this).wrap('<a href="'+$(this).attr('src')+'" class="group" rel="group"></a>');
			
		});
		
		$("a.group").fancybox({

			'transitionIn'  :   'elastic',

			'transitionOut' :   'elastic',

			'speedIn'       :   600, 

			'speedOut'      :   200, 

			'overlayShow'   :   true
		});

	});

})(jQuery);
</script>

<?
$id = JRequest::getInt('id');
if ($id == 82){  // если страница цены?>

<script type="text/javascript">

function calculateTotal(inputItem) {
  with (inputItem.form) {
    if (inputItem.type == "radio") {   // Process radio buttons.
      calculatedTotal.value = eval(calculatedTotal.value) - eval(previouslySelectedRadioButton.value);
      previouslySelectedRadioButton.value = eval(inputItem.value);
      calculatedTotal.value = eval(calculatedTotal.value) + eval(inputItem.value);
    } else {   // Process check boxes.
      if (inputItem.checked == false) {   // Item was uncheck. Subtract item value from total.
          calculatedTotal.value = eval(calculatedTotal.value) - eval(inputItem.value);
      } else {   // Item was checked. Add the item value to the total.
          calculatedTotal.value = eval(calculatedTotal.value) + eval(inputItem.value);
      }
    }
    if (calculatedTotal.value < 0) {
      InitForm();
    }
    return(formatCurrency(calculatedTotal.value));
  }
}

function formatCurrency(num) {
  num = num.toString().replace(/\$|\,/g,'');
  if(isNaN(num))
     num = "0";
  sign = (num == (num = Math.abs(num)));
  num = Math.floor(num*100+0.50000000001);
  cents = num%100;
  num = Math.floor(num/100).toString();
  if(cents<10)
      cents = "0" + cents;
  for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
      num = num.substring(0,num.length-(4*i+3)) + ',' + num.substring(num.length-(4*i+3));
  return (((sign)?'':'-') + num + '.' + cents);
}


function InitForm() {
  document.selectionForm.total.value='0';
  document.selectionForm.calculatedTotal.value=0;
  document.selectionForm.previouslySelectedRadioButton.value=0;
  for (i=0; i < document.selectionForm.elements.length; i++) {
    if (document.selectionForm.elements[i].type == 'checkbox' | document.selectionForm.elements[i].type == 'radio') {
      document.selectionForm.elements[i].checked = false;
    }
  }
}

</script>
<?}?>

<!-- Menu head -->
<?php if ($jamenu) $jamenu->genMenuHead(); ?>
<link href="<?php echo $tmpTools->templateurl(); ?>/css/colors/<?php echo strtolower ($tmpTools->getParam(JA_TOOL_COLOR)); ?>.css" rel="stylesheet" type="text/css" />

<!--[if lte IE 6]>
<style type="text/css">
.clearfix {height: 1%;}
img {border: none;}
</style>
<![endif]-->

<!--[if gte IE 7.0]>
<style type="text/css">
.clearfix {display: inline-block;}
</style>
<![endif]-->

<?php if ($tmpTools->isIE6()) { ?>
<!--[if lte IE 6]>
<link href="<?php echo $tmpTools->templateurl(); ?>/css/ie6.php" rel="stylesheet" type="text/css" />
<link href="<?php echo $tmpTools->templateurl(); ?>/css/colors/<?php echo strtolower ($tmpTools->getParam(JA_TOOL_COLOR)); ?>-ie6.php" rel="stylesheet" type="text/css" />
<script type="text/javascript">
window.addEvent ('load', makeTransBG);
function makeTransBG() {
makeTransBg($$('img'));
}
</script>
<![endif]-->
<?php } ?>

<?php if ($tmpTools->isSafari()) { ?>
<link href="<?php echo $tmpTools->templateurl(); ?>/css/safari.css" rel="stylesheet" type="text/css" />
<?php } ?>

<!--[if gt IE 7]>
<link href="<?php echo $tmpTools->templateurl(); ?>/css/ie8.css" rel="stylesheet" type="text/css" />
<![endif]-->

</head>

<body id="bd" class="<?php echo $tmpTools->getParam(JA_TOOL_LAYOUT);?> <?php echo $tmpTools->getParam(JA_TOOL_SCREEN);?> fs<?php echo $tmpTools->getParam(JA_TOOL_FONT);?>" >
<a name="Top" id="Top"></a>
<ul class="accessibility">
	<li><a href="<?php echo $tmpTools->getCurrentURL();?>#ja-content" title="<?php echo JText::_("Skip to content");?>"><?php echo JText::_("Skip to content");?></a></li>
	<li><a href="<?php echo $tmpTools->getCurrentURL();?>#ja-mainnav" title="<?php echo JText::_("Skip to main navigation");?>"><?php echo JText::_("Skip to main navigation");?></a></li>
	<li><a href="<?php echo $tmpTools->getCurrentURL();?>#ja-col1" title="<?php echo JText::_("Skip to 1st column");?>"><?php echo JText::_("Skip to 1st column");?></a></li>
	<li><a href="<?php echo $tmpTools->getCurrentURL();?>#ja-col2" title="<?php echo JText::_("Skip to 2nd column");?>"><?php echo JText::_("Skip to 2nd column");?></a></li>
</ul>

<!-- BEGIN: USERTOOLS -->
<div id="ja-usertoolswrap">
<div id="ja-usertools" class="clearfix">
	<?php $tmpTools->genToolMenu($tmpTools->getParam('usertool_font'), 'gif'); ?>
  <?php $tmpTools->genToolMenu($tmpTools->getParam('usertool_color'), 'gif'); ?>
</div>
</div>
<!-- END: USERTOOLS -->

<!-- BEGIN: HEADER -->
<div id="ja-headerwrap">
<div id="ja-header" class="clearfix">
	<div id="ja-header-inner">
	<?php 
	$siteName = $tmpTools->sitename(); 
	if ($tmpTools->getParam('logoType')=='image') { ?>
	<?if($_SERVER['REQUEST_URI'] == '/'):?>
		<h1 class="logo main_page">
			<div class="logo-text-main "><span><?php echo $siteName; ?></span></div>
		</h1>
	<?else:?>
		<h1 class="logo">
			<a href="/" title="<?php echo $siteName; ?>"><span><?php echo $siteName; ?></span></a>
		</h1>
	<?endif;?>
	<?php } else { 
	$logoText = (trim($tmpTools->getParam('logoText'))=='') ? $config->sitename : $tmpTools->getParam('logoText');
	$sloganText = (trim($tmpTools->getParam('sloganText'))=='') ? JText::_('SITE SLOGAN') : $tmpTools->getParam('sloganText');	?>
	<div class="logo-text">
		<p class="site-slogan"><?php echo $sloganText;?></p>
		<h1>
			<a href="/" title="<?php echo $siteName; ?>"><span><?php echo $logoText; ?></span></a>	
		</h1>
	</div>
	<?php } ?>

	<?php if ($this->countModules('user4')) { ?>
	<div id="ja-search">
		<jdoc:include type="modules" name="user4" style="raw" />
	</div>	
	<?php } ?>
	
	<div class="header-phone">
		<a title="Позвонить" href="tel:+789157135731">8 915 713 57 31</a>
	</div>
	
	</div>
</div>
</div>
<!-- END: HEADER -->

<!-- BEGIN: MAIN NAVIGATION -->
<?php if ($tmpTools->getParam('ja_menu') != 'none') : ?>
<div id="ja-mainnavwrap">
<div id="ja-mainnav" class="clearfix">
	<?php if ($jamenu) $jamenu->genMenu (0); ?>
</div>
</div>
<?php endif; ?>
<!-- END: MAIN NAVIGATION -->

<div id="ja-containerwrap<?php echo $divid; ?>" class="clearfix">
<div id="ja-container" class="clearfix">

	<!-- BEGIN: CONTENT -->
	<div id="ja-contentwrap" class="clearfix">

		<div id="ja-content">

			<jdoc:include type="message" />
   		
  		<?php if(!$tmpTools->isFrontPage()) : ?>
  		<div id="ja-current-content" class="clearfix">
  			<!-- BEGIN: PATHWAY -->
				<?php if(!$tmpTools->isFrontPage()) : ?>
				<div id="ja-pathway">
				  <jdoc:include type="module" name="breadcrumbs" />
				</div>
				<?php endif; ?>
				<!-- END: PATHWAY -->
  			<jdoc:include type="component" />
  		</div>
  		<?php endif; ?>
    		
  		<!-- BEGIN: JAZIN -->
      <div id="jazin-fp">
      	<jdoc:include type="modules" name="ja-news" style="raw" />
      </div>
      <!-- END: JAZIN -->    		

			<?php if($this->countModules('banner')) : ?>
			<!-- BEGIN: BANNER -->
			<div id="ja-banner">
				<jdoc:include type="modules" name="banner" />
			</div>
			<!-- END: BANNER -->
			<?php endif; ?>

		</div>

	</div>
	<!-- END: CONTENT -->
	
	<?php if ($ja_left || $ja_right || $ja_masscol)  { ?>	
	<div id="ja-colwrap">
	
		<?php if ($ja_masscol) { ?>
		<!-- BEGIN: MASSCOL -->
		<div id="ja-colmass" class="clearfix">
		<div class="ja-innerpad">
			<jdoc:include type="modules" name="user5" style="jamodule" />
    </div>
    </div>
    <?php } ?>
  
  	<?php if ($ja_left) { ?>
	  <!-- BEGIN: LEFT COLUMN -->
		<div id="ja-col1">
		<div class="ja-innerpad">

			<?php if ($hasSubnav) : ?>
			<div id="ja-subnav" class="moduletable_menu">
				<h3>On this page</h3>
				<?php if ($jamenu) $jamenu->genMenu (1,1);	?>
			</div>
			<?php endif; ?>
		
			<jdoc:include type="modules" name="left" style="jamodule" />

		</div>
		</div>
		<!-- END: LEFT COLUMN -->
		<?php } ?>
  
  <?php if ($ja_right) { ?>
	<!-- BEGIN: RIGHT COLUMN -->
	<div id="ja-col2">
	<div class="ja-innerpad">
		<jdoc:include type="modules" name="right" style="jamodule" />
	</div></div><br />
	<!-- END: RIGHT COLUMN -->
	<?php } ?>
	
	</div>
	<?php } ?>

</div></div>

	<?php
	$spotlight = array ('user1','user2','user7','user8');
	$botsl = $tmpTools->calSpotlight ($spotlight,$tmpTools->isOP()?100:99.9);
	if( $botsl ) {
	?>
	<!-- BEGIN: BOTTOM SPOTLIGHT-->
	<div id="ja-botslwrap">
    <div id="ja-botsl" class="clearfix">
	  
	  <?php if( $this->countModules('user7') ) {?>
	  <div class="ja-box<?php echo $botsl['user7']['class']; ?>" style="width: <?php echo $botsl['user7']['width']; ?>;">
			<jdoc:include type="modules" name="user7" style="xhtml" />
	  </div>
	  <?php } ?>
	
	  <?php if( $this->countModules('user8') ) {?>
	  <div class="ja-box<?php echo $botsl['user8']['class']; ?>" style="width: <?php echo $botsl['user8']['width']; ?>;">
			<jdoc:include type="modules" name="user8" style="xhtml" />
	  </div>
	  <?php } ?>

	</div></div>
    
    <div class="up_footer">
   
    <div class="footer_menu"> 
        <?php if( $this->countModules('user1') ) { ?> <jdoc:include type="modules" name="user1" style="xhtml" />  <?php } ?>
    </div>
      
    <div class="copy_rights">
    <?php if( $this->countModules('user2') ) { ?> <jdoc:include type="modules" name="user2" style="xhtml" />  <?php } ?>
    </div>
    </div>

	<!-- END: BOTTOM SPOTLIGHT 2 -->
	<?php } ?>
<!-- BEGIN: FOOTER -->
<div id="ja-footerwrap" class="clearfix">

<div id="ja-footer">
<?php if( $this->countModules('footer') ) {?>
			<jdoc:include type="modules" name="footer" style="xhtml" />
	  <?php } ?>
</div></div>
<!-- END: FOOTER -->
<jdoc:include type="modules" name="debug" />
<script type="text/javascript">
	addSpanToTitle();
	jaAddFirstItemToTopmenu();
	jaRemoveLastContentSeparator();
	//jaRemoveLastTrBg();
	moveReadmore();
	addIEHover();
<?php if ($tmpTools->getParam('rounded_style')) : ?>	
	if (!window.ie6) {
	Asset.css ('<?php echo $tmpTools->templateurl(); ?>/css/rounded.css', {});
	jaMakeRounded ('.jazin-box');
	jaMakeRounded ('#jazin-hlwrap');
	jaMakeRounded ('#ja-colwrap .moduletable, #ja-colwrap .moduletable_menu, #ja-colwrap .moduletable_text, #ja-colwrap .moduletable_hilite');
	jaMakeRounded ('#ja-current-content');
	}
<?php endif; ?>	
</script>
</body>

</html>
