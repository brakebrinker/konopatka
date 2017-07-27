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

<meta name="viewport" content="width=device-width; initial-scale=1.0" />    
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=cyrillic" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $tmpTools->templateurl(); ?>/slider/jquery.bxslider.css">
<link rel="stylesheet" href="<?php echo $tmpTools->templateurl(); ?>/css/style.css">
<link rel="stylesheet" href="<?php echo $tmpTools->templateurl(); ?>/css/font-awesome.css">

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



<!-- <script language="javascript" type="text/javascript" src="<?php echo $tmpTools->templateurl(); ?>/js/ja.script.js"></script> -->
<!-- js for dragdrop -->

<!-- <script language="javascript" type="text/javascript" src="<?php echo $tmpTools->templateurl(); ?>/js/fancybox/jquery-1.3.2.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $tmpTools->templateurl(); ?>/js/fancybox/jquery.easing.1.3.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $tmpTools->templateurl(); ?>/js/fancybox/jquery.fancybox-1.2.1.pack.js"></script>
<link rel="stylesheet" href="<?php echo $tmpTools->templateurl(); ?>/js/fancybox/jquery.fancybox.css" type="text/css" /> -->
</head>

<body>
    <header>
        <div class="wrapper">
            <div class="topline">
                <a href="index.html" class="logo"><img src="<?php echo $tmpTools->templateurl(); ?>/img/logo.png" alt=""></a>
                <nav>
                    <jdoc:include type="modules" name="hornav" />
                </nav>
                <div class="contacts">
                    <jdoc:include type="modules" name="contacts" />
                </div>
                <i class="fa fa-bars menu-button"></i>
            </div>
            <div class="bottomline">
                <span class="title">Конопатка деревянных домов</span>
                <div>
                    <a href="#" class="ramka">
                        <i class="fa fa-home"></i>
                        <span>цены на отделочные работы</span>
                    </a>
                    <a href="#" class="ramka">
                        <i class="fa fa-mobile"></i>
                        <span>как с нами связаться</span>
                    </a>
                    <a href="#" class="ramka">
                        <i class="fa fa-photo"></i>
                        <span>наши работы</span>
                    </a>
                </div>
            </div>          
        </div>
    </header>
    <div class="wrapper flex">
        <aside>
            <nav>
                <jdoc:include type="modules" name="asidemenu" />
            </nav>
            <div>
                <jdoc:include type="modules" name="asidevideo" />
            </div>
        </aside>
        <main>
            <jdoc:include type="component" />
        </main>
    </div>

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
<!-- jquery -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- JS -->
<script src="<?php echo $tmpTools->templateurl(); ?>/slider/jquery.bxslider.js"></script>
<script src="<?php echo $tmpTools->templateurl(); ?>/js/1.js"></script>     

</body>

</html>
