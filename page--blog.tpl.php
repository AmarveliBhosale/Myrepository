<div id="floating-header">
	<div class="content_wrap">
		<?php print render($page['header']);?>
	</div>
	<div id="menu">
		<div class="content_wrap">
			 <?php print render($page['blog_category']);?>

		</div>
	</div>
</div>

<div id="container">
	<div id="header">

	</div>
	<div id="banner" class="<?php print $banner_class;?>">
		&nbsp;
	</div>
	<div class="sidebar blog-sec">
		<div class="content_wrap">
			<div id="sidebar">
				<?php print  render($page['sidebar_right']);?>        
			</div>
		</div>
	</div>
	<div id="content" class="blog-sec">
		<div class="tabs">
		  <div class="content_wrap">
			<?php print render($page['blog_division']); ?>
			<div class="clear"></div>
		  </div>
		</div>
    <?php if ($tabs && isset($node)): ?><div class="admintabs clearfix"><?php print render($tabs); ?></div><?php endif; ?>
			<?php  
        			 $content = render($page['content']);
        			 $content_array = module_invoke_all('modify_page_content', $content);
        			   if (!empty($content_array)){
        				$content = $content_array[0]; 
        			 } ?>
            <?php print $content; ?>   

	</div>
	<div class="clear"></div>
	<div id="footer">
		<div class="content_wrap">
			<?php print render($page['content_footer']); ?>
		</div>
	</div>
	<div id="copy">
		<div class="content_wrap">
			<?php print render($page['blog_footer']); ?>		
		</div>
	</div>
</div>
<div id="omniture" style="display:none">

</div>