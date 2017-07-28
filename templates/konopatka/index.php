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
<link rel="stylesheet" href="<?php echo $tmpTools->templateurl(); ?>/css/superfish.css">
<link rel="stylesheet" href="<?php echo $tmpTools->templateurl(); ?>/css/meanmenu.min.css">
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
                <a href="<?php echo $this->baseurl ?>" class="logo"><img src="<?php echo $tmpTools->templateurl(); ?>/img/logo.png" alt=""></a>
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
<!--                 <div>
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
</div> -->
                <jdoc:include type="modules" name="submenu" />
            </div>
        </div>
    </header>
    <div id="mean-container"></div>
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
            <?php $menu = & JSite::getMenu();
            if ($menu->getActive() != $menu->getDefault()) : ?>
            <div class="textarea head">
                <div class="breadcrumbs">
                  <jdoc:include type="module" name="breadcrumbs" />
                </div>
            <?php endif ; ?>
            <?php if ($menu->getActive() == $menu->getDefault()) : ?>
                <div class="textarea">
                    <jdoc:include type="component" />
                </div>
            <?php else : ?>
                <jdoc:include type="component" />
            <?php endif ; ?>
        </main>
    </div>
    <footer>
        <div class="wrapper">
            <h4>меню</h4>
            
            <div class="bottom-menu">
                <jdoc:include type="modules" name="footer" style="xhtml" />
                <div class="contacts">
                    <jdoc:include type="modules" name="contacts" />
                </div>
                <div class="social">
                    <jdoc:include type="modules" name="social" />
                    <b>copyright@ 2017</b>
                </div>
            </div>
        </div>
    </footer>

<!-- END: FOOTER -->
<jdoc:include type="modules" name="debug" />
<!-- jquery -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- JS -->
<script src="<?php echo $tmpTools->templateurl(); ?>/slider/jquery.bxslider.js"></script>
<script src="<?php echo $tmpTools->templateurl(); ?>/js/1.js"></script>     
<script src="<?php echo $tmpTools->templateurl(); ?>/js/superfish.js"></script>     
<script src="<?php echo $tmpTools->templateurl(); ?>/js/jquery.meanmenu.js"></script>     

<script>
    jQuery(document).ready(function() {
        jQuery('ul.sf-menu').superfish();
    });
</script>
<script>
jQuery(document).ready(function () {
    jQuery('header nav').meanmenu();
});
</script>
</body>

</html>
