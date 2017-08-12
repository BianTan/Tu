<?php get_header(); ?>
<?php global $BianDan_tu;?>
	<div class="center">
		<div id="row">
			<?php if($BianDan_tu['s-b']==2){ ?>
			<?php get_sidebar(); ?>
			<?php } ?>
			<div id="main">
				<?php if($BianDan_tu['s-b']==2){ ?>
					<div class="row h-main" style="padding: 0;float: right;">
				<?php }else if($BianDan_tu['s-b']==1){ ?>
					<div class="row h-main" style="padding: 0;width: 100%;">
				<?php }else if($BianDan_tu['s-b']==3){ ?>
					<div class="row h-main" style="padding: 0;float: left;">
				<?php } ?>
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php 
					$category = get_the_category();
					if($category[0]->cat_name!='一句话'){ 
					?>
					<div id="article">
						<?php if($BianDan_tu['ts']==1){ ?>
							<?php $color = get_post_meta($post->ID, 'color', true); if ($color) { ?>
								<div class="th" style="background: <?php echo $color; ?>;">
							<?php }else{ ?>
								<div class="th" style="background-image: url(<?php echo catch_that_image(); ?>);">
							<?php } ?>
								<div class="title"><a href="<?php the_permalink() ?>" style="color: #fafafa;text-shadow: 1px 1px 8px #444;"><?php the_title_attribute(); ?></a></div>
							</div>
							<div class="tx" style="padding: 8px 1rem 0 1rem;">
								<div class="content">
									<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 176,"…");?>
								</div>
								<div class="clear"></div>
							</div>
						<?php }else{ ?>
							<?php $color = get_post_meta($post->ID, 'color', true); if ($color) { ?>
								<div class="th" style="background: <?php echo $color; ?>;">
							<?php }else{ ?>
								<div class="th" style="background:<?php $a=array("#F44336","#9C27B0","#FF9800","#8BC34A","#03A9F4","#4CAF50","#FF5722","#009688","#00BCD4"); echo $a[rand(0,8)]; ?>;">
							<?php } ?>
								<div class="title"><a href="<?php the_permalink() ?>" style="color: #fafafa;text-shadow: 1px 1px 8px #444;"><?php the_title_attribute(); ?></a></div>
							</div>
							<div class="tx" style="padding: 8px 1rem 0 1rem;">
								<div class="content" style="margin-left: 0;">
									<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 176,"…");?>
								</div>
								<div class="clear"></div>
							</div>
						<?php } ?>
						<div class="xx" style="padding: 0 1rem 1rem 1rem;">
							<span><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time('Y-m-d') ?></span>
							<span><i class="fa fa-comment-o" aria-hidden="true"></i> <?php comments_number('0 Comment', '1 Comment', '% Comments' );?></span>
							<div class="yd">
								<a href="<?php the_permalink() ?>">阅读全文 <i class="fa fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<?php }else{ ?>
						<div id="article">
							<div class="th" style="height: 4rem;background: <?php $color = get_post_meta($post->ID, 'color', true); echo $color; ?>;">
								<div class="title" style="padding-left: 0px;margin-bottom: 0px;margin: 1.3rem auto;"><a style="color: #fafafa;text-shadow: 1px 1px 8px #444;"><?php the_title_attribute(); ?></a></div>
							</div>
						</div>
					<?php } ?>
					<?php endwhile; ?>
					<?php else : ?>
					<?php endif; ?>
					<div class="page_navi"><?php par_pagenavi(9); ?></div>
				</div>
			</div>
		</div>
		<?php if($BianDan_tu['s-b']==3){ ?>
			<?php get_sidebar(); ?>
			<?php } ?>
		<div class="clear"></div>
	</div>

<?php get_footer(); ?>