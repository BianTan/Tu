<?php global $BianDan_tu;?>
<?php if($BianDan_tu['s-b']==3){ ?>
	<div class="sidebar">
<?php }else if($BianDan_tu['s-b']==2){ ?>
	<div class="sidebar" style="float: left;">	
<?php }else if($BianDan_tu['s-b']==1){ ?>
	<div class="sidebar" style="display: none;">
<?php } ?>

			<div class="about">
				<?php global $BianDan_tu; ?>
				<?php if($BianDan_tu['sid']==1){ ?>
					<div class="a-t" style="background:<?php echo $BianDan_tu['sid-ys']; ?>;"></div>
				<?php }else{ ?>
					<div class="a-t" style="background:url(<?php echo $BianDan_tu['sid-bg']; ?>);background-size: cover;background-position: 50%;"></div>
				<?php } ?>
				<div class="logo"><img src="https://biantan.org/wp-content/themes/AI/images/logo.png"></div>
				<p>你制定的计划是.txt还是.exe</p>
			</div>
		
			<?php if ( is_active_sidebar( "sidebar-01" ) ) : ?>
				 <?php dynamic_sidebar( "sidebar-01" ); ?>
			<?php else: ?>
			<?php endif; ?>
		
			<div class="music">
				<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=330 height=450 src="//music.163.com/outchain/player?type=0&id=615810582&auto=0&height=430"></iframe>
			</div>

			<div class="new">
				<div class="c-t">最新评论</div>
				<div class="c-c">
				<?php
				$show_comments = $BianDan_tu['zxpl']; //更改这里的数字改变调用条数
				$my_email = get_bloginfo ('admin_email');
				$i = 1;
				$comments = get_comments('number=100&status=approve&type=comment');
				foreach ($comments as$rc_comment) {
				if ($rc_comment->comment_author_email != $my_email) {
				?>
				<li class="n-c">
					<div class="n-avatar">
					<?php echo get_avatar($rc_comment->comment_author_email,56);?>
					</div>
					<div class="n-t">
						<p><?php echo$rc_comment->comment_author; ?></p>
						<a href="<?php echo get_permalink($rc_comment->comment_post_ID);?>#comment-<?php echo $rc_comment->comment_ID;?>"><?php echo convert_smilies($rc_comment->comment_content); ?></a>
					</div>
				</li>
				<?php
				if ($i == $show_comments) break;
				$i++;
				}
				}
				?>
				</div>
			</div>
		
			<div class="new">
				<div class="c-t">热门文章</div>
				<div class="c-c">
					<?php 
					$post_num = $BianDan_tu['rmwz']; // 设置调用条数
					$args = array(
					'post_password' => '',
					'post_status' => 'publish', // 只选公开的文章.
					'post__not_in' => array($post->ID),//排除当前文章
					'caller_get_posts' => 1, // 排除置顶文章.
					'orderby' => 'comment_count', // 依评论数排序.
					'posts_per_page' => $post_num
					);
					$query_posts = new WP_Query();
					$query_posts->query($args);
					while( $query_posts->have_posts() ) { $query_posts->the_post(); ?>
					<li class="n-c">
						<!--
						<div class="n-avatar">
							<img src="<?php echo catch_that_image(); ?>">
						</div>
						-->
						<div class="n-t" style="margin-left: 0;">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<?php the_excerpt("Read More..."); ?>
						</div>
					</li>
					<?php } wp_reset_query();?>
				</div>
			</div>

		</div>