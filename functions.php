<?php
//自定义评论结构
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment;
   global $commentcount;
   if(!$commentcount) {
       $page = ( !empty($in_comment_loop) ) ? get_query_var('cpage')-1 : get_page_of_comment( $comment->comment_ID, $args )-1;
       $cpp=get_option('comments_per_page');
       $commentcount = $cpp * $page;
    }
?>
<?php 
if (current_time('timestamp') - get_comment_time('U') < 518400 )//六天
{$cmt_time = human_time_diff( get_comment_time('U') , current_time('timestamp') ) . '前';}
else{$cmt_time = get_comment_date( 'Y/n/j' );};
 ;?>
<li class="comments" id="li-comment-<?php comment_ID() ?>">
        <div id="comment-<?php comment_ID(); ?>" class="comment-body">
            <div class="touxiang">
       			<?php echo get_avatar( $comment, $size = '52'); ?>
            </div>
				<div style="margin-left: 94px;">
					<?php if($comment->comment_parent){// 如果存在父级评论
						 $comment_parent_href = get_comment_ID( $comment->comment_parent );
						 $comment_parent = get_comment($comment->comment_parent);
					?>
					<p>@</p><a href="#comment-<?php echo $comment_parent_href;?>" style="color: #616161;font-size: 13px; line-height: 1.6; text-shadow: 1px 1px 2px rgba(127,127,127,0.1);"><?php echo $comment_parent->comment_author;?> </a>
					<?php }?>
                	<?php comment_text() ?>
					<div class="date"> 
					<span class="name"><?php printf(__('%s'), get_comment_author_link()) ?>
						</span>
						<?php if(user_can($comment->user_id, 1)){echo "<span class='owner'>扁担w</span>";}; ?>
						<p><?php echo $cmt_time ;?></p>
						<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => "@Ta"))) ?>
					</div>
				</div>
                <div class="floor"><?php if(!$parent_id = $comment->comment_parent) {printf('#%1$s', ++$commentcount);} ?></div>


    </div> 
<?php
}

//获取文章中的第一张图片
function catch_that_image() {
    $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
    if(empty($full_image_url)){ //定义默认图片
        $full_image_url = "/wp-content/themes/Tu/images/default.png";  //默认图片地址需自己设置
        return $full_image_url;
    }else{
        return $full_image_url[0];
    }
}

// 开启文章缩略图
add_theme_support( "post-thumbnails" ); 

//回复邮件
include_once('notify.php');

//分页
function par_pagenavi($range = 9){
	global $paged, $wp_query;
	if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
	if($max_page > 1){if(!$paged){$paged = 1;}
	if($paged != 1){echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='跳转到首页'> <i class='fa fa-angle-double-left' aria-hidden='true'></i> </a>";}
	previous_posts_link('<i class="fa fa-angle-left" aria-hidden="true"></i>');
    if($max_page > $range){
		if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "<a href='" . get_pagenum_link($i) ."'";
		if($i==$paged)echo " class='current'";echo ">$i</a>";}}
    elseif($paged >= ($max_page - ceil(($range/2)))){
		for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
		if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
		for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}
    else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
    if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	next_posts_link('<i class="fa fa-angle-right" aria-hidden="true"></i>');
    if($paged != $max_page){echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title='跳转到最后一页'><i class='fa fa-angle-double-right' aria-hidden='true' style='margin-right: 3px;margin-left: 1px;'></i></a>";}}
}


//后台设置
if ( !class_exists( 'ReduxFramework' ) && file_exists( get_template_directory() . '/redux/framework.php' ) && file_exists( get_template_directory() . '/redux/config.php' ) ){
	require_once get_template_directory().'/redux/framework.php';
	require_once get_template_directory().'/redux/config.php';
}

/**
 * WordPress 后台禁用Google Open Sans字体，加速网站
 * https://www.wpdaxue.com/disable-google-fonts.html
 */
add_filter( 'gettext_with_context', 'wpdx_disable_open_sans', 888, 4 );
function wpdx_disable_open_sans( $translations, $text, $context, $domain ) {
  if ( 'Open Sans font: on or off' == $context && 'on' == $text ) {
    $translations = 'off';
  }
  return $translations;
}


//友情链接
function BianDan_links(){ 
	global $BianDan_tu;
	$a=array("#8BC34A","#03A9F4","#FF9800","#00BCD4","#8BC34A","#F44336");
    if($BianDan_tu['diy-links']){
        $BianDan_linkss = explode("\n", $BianDan_tu['diy-links']);
        foreach ($BianDan_linkss as $BianDan_links) {
			$random_keys=array_rand($a,6);
            $BianDan_links = explode("|", $BianDan_links );
			echo '<li>';
			echo '<div class="li" style="background: '.$a[$random_keys[rand(0,5)]].';">';
			if(trim($BianDan_links[2])!=''){
				echo '<div class="l-l"><img src="'.trim($BianDan_links[2]).'"></div>';
			}
			echo '<div class="l-c" style="margin-left: 16px;"><div class="l-t"><a href="'.trim($BianDan_links[1]).'" target="_blank" title="'.trim($BianDan_links[3]).'">'.trim($BianDan_links[0]).'</a></div><div class="l-m">'.trim($BianDan_links[3]).'</div></div></div><div class="clear"></div></li>';
        }
    }
}


//禁止转义引号字符
remove_filter('the_content', 'wptexturize'); // 禁止英文引号转义为中文引号
remove_filter('the_content', 'balanceTags'); //禁止对标签自动校正


// 替换pre标签为自定义形式
add_filter('the_content', 'pre_to_prettify');

function pre_to_prettify($addClass){
    $replace = array(
        '<pre>' => '<pre class="prettyprint">',
        );
    $addClass = str_replace(array_keys($replace), $replace, $addClass);
    return $addClass;
}

//自定义表情路径
function custom_smilies_src($src, $img){return get_bloginfo('template_directory').'/images/smilies/' . $img;}
add_filter('smilies_src', 'custom_smilies_src', 10, 2);

//准许用户使用Email作为用户名登录 WordPress
function login_with_email_address($username) {
    $user = get_user_by_email($username);
    if(!empty($user->user_login))
        $username = $user->user_login;
    return $username;
}
add_action('wp_authenticate','login_with_email_address');

//禁用Emoji表情
function smilies_reset() {
global $wpsmiliestrans, $wp_smiliessearch;

if ( !get_option( 'use_smilies' ) )
return;

$wpsmiliestrans = array(
':mrgreen:' => 'icon_mrgreen.gif',
    ':neutral:' => 'icon_neutral.gif',
    ':twisted:' => 'icon_twisted.gif',
      ':arrow:' => 'icon_arrow.gif',
      ':shock:' => 'icon_eek.gif',
      ':smile:' => 'icon_smile.gif',
        ':???:' => 'icon_confused.gif',
       ':cool:' => 'icon_cool.gif',
       ':evil:' => 'icon_evil.gif',
       ':grin:' => 'icon_biggrin.gif',
       ':idea:' => 'icon_idea.gif',
       ':oops:' => 'icon_redface.gif',
       ':razz:' => 'icon_razz.gif',
       ':roll:' => 'icon_rolleyes.gif',
       ':wink:' => 'icon_wink.gif',
        ':cry:' => 'icon_cry.gif',
        ':eek:' => 'icon_surprised.gif',
        ':lol:' => 'icon_lol.gif',
        ':mad:' => 'icon_mad.gif',
        ':sad:' => 'icon_sad.gif',
          '8-)' => 'icon_cool.gif',
          '8-O' => 'icon_eek.gif',
          ':-(' => 'icon_sad.gif',
          ':-)' => 'icon_smile.gif',
          ':-?' => 'icon_confused.gif',
          ':-D' => 'icon_biggrin.gif',
          ':-P' => 'icon_razz.gif',
          ':-o' => 'icon_surprised.gif',
          ':-x' => 'icon_mad.gif',
          ':-|' => 'icon_neutral.gif',
          ';-)' => 'icon_wink.gif',
           '8O' => 'icon_eek.gif',
           ':(' => 'icon_sad.gif',
           ':)' => 'icon_smile.gif',
           ':?' => 'icon_confused.gif',
           ':D' => 'icon_biggrin.gif',
           ':P' => 'icon_razz.gif',
           ':o' => 'icon_surprised.gif',
           ':x' => 'icon_mad.gif',
           ':|' => 'icon_neutral.gif',
           ';)' => 'icon_wink.gif',
          ':!:' => 'icon_exclaim.gif',
          ':?:' => 'icon_question.gif',
);
}
smilies_reset();

//add 禁用后台某些项目加载 以加速后台打开速度 /////////////////
function disable_dashboard_widgets() {
remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');//近期评论
remove_meta_box('dashboard_recent_drafts', 'dashboard', 'normal');//近期草稿
remove_meta_box('dashboard_primary', 'dashboard', 'core');//wordpress博客
remove_meta_box('dashboard_secondary', 'dashboard', 'core');//wordpress其它新闻
remove_meta_box('dashboard_right_now', 'dashboard', 'core');//wordpress概况
remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');//wordresss链入链接
remove_meta_box('dashboard_plugins', 'dashboard', 'core');//wordpress链入插件
remove_meta_box('dashboard_quick_press', 'dashboard', 'core');//wordpress快速发布
}
add_action('admin_menu', 'disable_dashboard_widgets');
//add 禁用谷歌 Open Sans 等字体——方法1//////////////////////////////////////////
class Disable_Google_Fonts {
public function __construct() {
add_filter( 'gettext_with_context', array( $this, 'disable_open_sans'), 888, 4 );
}
public function disable_open_sans( $translations, $text, $context, $domain ) {
if ( 'Open Sans font: on or off' == $context && 'on' == $text ) {
$translations = 'off';
}
return $translations;
}
}
$disable_google_fonts = new Disable_Google_Fonts;
//add2 禁用谷歌 Open Sans 等字体——方法2///////////////////////////////////////////
//function remove_open_sans() {
//    wp_deregister_style( 'open-sans' );
//    wp_register_style( 'open-sans', false );
//    wp_enqueue_style('open-sans',”);
//}
//add_action( 'init', 'remove_open_sans' );



?>