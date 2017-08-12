<?php
/*
Template Name: 友情链接
*/
?>

<?php get_header(); ?>
<?php global $BianDan_tu;?>
	<div class="center">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php if($BianDan_tu['s-b']==2){ ?>
			<?php get_sidebar(); ?>
			<?php } ?>
			<div id="main">
				<?php if($BianDan_tu['s-b']==3){ ?>
				<div class="main">
				<?php }else if($BianDan_tu['s-b']==2){ ?>
				<div class="main" style="float: right;">
				<?php }else if($BianDan_tu['s-b']==1){ ?>
				<div class="main" style="width: 100%;">
				<?php } ?>
					<div class="row">
						<div class="article">
							<div class="tx">
								<div class="tx-c">
									<?php the_content("Read More..."); ?>
									<div class="Mylinks">
									<ul><?php BianDan_links();?></ul>
									<div class="clear"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<?php if($BianDan_tu['s-b']==3){ ?>
				<div class="main">
				<?php }else if($BianDan_tu['s-b']==2){ ?>
				<div class="main" style="float: right;">
				<?php }else if($BianDan_tu['s-b']==1){ ?>
				<div class="main" style="width: 100%;">
				<?php } ?>
					<div class="c-r">
						<?php comments_template(); ?>
					</div>
				</div>
				<?php else : ?>
				<?php endif; ?>
			</div>
		</div>
		<?php if($BianDan_tu['s-b']==3){ ?>
			<?php get_sidebar(); ?>
		<?php } ?>
		<div class="clear"></div>
	</div>

<?php get_footer(); ?>
