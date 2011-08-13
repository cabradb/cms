<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title><?php echo $title_for_layout . ' | ' . Configure::read('Site.title'); ?></title>
	<meta name="generator" content="Croogo 1.3.1" />
        <?php 
            echo $layout->meta();
            echo $layout->feed();
            echo $html->css(array('pokus'));
            echo $html->script(array('jquery/jquery.min'));
            echo $layout->js();
            echo $scripts_for_layout;
        ?>
    </head>

    <body>
	<div id="obal">
	  <div id="obalin">
	    <?php echo $html->image('/img/banner.jpg'); ?>
	    <div id="topMenu">
	      <?php echo $layout->menu('main', array('dropdown' => true)); ?>
	    </div>

	    <div id="content">
	      <div id="contentin">
		<?php echo $content_for_layout; ?>
	      </div>
	    </div>

	    <div id="sidebar">
	      <div id="sidebarin">
		<?php echo $layout->blocks('right'); ?>
	      </div>
	    </div><div class="cleaner"><hr></div>
	  </div>
	  <div class="cleaner"><hr></div>
	</div>
    </body>
</html>
