<?php
/*
Template Name: 外链跳转
*/
$transition = get_post_meta($post->ID,"transition", $single=true);
$false='false';
if ($transition==$false){
$url = $_GET['url'];
Header("Location:$url");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php $time=get_post_meta($post->ID,"time", $single=true); ?>
<meta http-equiv="refresh" content="<?php echo $time ;?>;url='<?php echo $_GET['url'];; ?>';">
<title>页面跳转|<?php bloginfo('name'); ?></title>
<style>
body{background:#000}.loading{-webkit-animation:fadein 2s;-moz-animation:fadein 2s;-o-animation:fadein 2s;animation:fadein 2s}@-moz-keyframes fadein{from{opacity:0}to{opacity:1}}@-webkit-keyframes fadein{from{opacity:0}to{opacity:1}}@-o-keyframes fadein{from{opacity:0}to{opacity:1}}@keyframes fadein{from{opacity:0}to{opacity:1}}.spinner-wrapper{position:absolute;top:0;left:0;z-index:300;height:100%;min-width:100%;min-height:100%;background:rgba(255,255,255,0.93)}.spinner-text{position:absolute;top:41.5%;left:47%;margin:16px 0 0 35px;color:#BBB;letter-spacing:1px;font-weight:700;font-size:9px;font-family:Arial}.spinner{position:absolute;top:40%;left:45%;display:block;margin:0;width:1px;height:1px;border:25px solid rgba(100,100,100,0.2);-webkit-border-radius:50px;-moz-border-radius:50px;border-radius:50px;border-left-color:transparent;border-right-color:transparent;-webkit-animation:spin 1.5s infinite;-moz-animation:spin 1.5s infinite;animation:spin 1.5s infinite}@-webkit-keyframes spin{0%,100%{-webkit-transform:rotate(0deg) scale(1)}50%{-webkit-transform:rotate(720deg) scale(0.6)}}@-moz-keyframes spin{0%,100%{-moz-transform:rotate(0deg) scale(1)}50%{-moz-transform:rotate(720deg) scale(0.6)}}@-o-keyframes spin{0%,100%{-o-transform:rotate(0deg) scale(1)}50%{-o-transform:rotate(720deg) scale(0.6)}}@keyframes spin{0%,100%{transform:rotate(0deg) scale(1)}50%{transform:rotate(720deg) scale(0.6)}}
</style>
</head>
<body>
<div class="loading">
<div class="spinner-wrapper">
<span class="spinner-text">LOADING...</span>
<span class="spinner"></span>
</div>
</div>
</body>
</html>