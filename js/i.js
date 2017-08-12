$(document).ready(function(){
	ComtAjax();
});

$(document).ready(function(){
	// 图片暗箱
	jQuery.viewImage({
		'target' : '.tx-c img', //需要使用ViewImage的图片
		'exclude': '.logo img',    //要排除的图片
		'delay'  : 300                //延迟时间
	});
});

//页面加载完毕后触发
window.onload = function(){
	prettyPrint();
	var obtn = document.getElementById('totop');
	//获取页面可视区的高度
	var clientHeight = document.documentElement.clientHeight;
	var timer = null;
	var isTop = true;
	//滚动时触发
	window.onscroll = function(){
		var osTop = document.documentElement.scrollTop || document.body.scrollTop;
		if(osTop > 0){
			obtn.style.opacity = '1';
		}else{
			obtn.style.opacity = '0';
		}
		if(!isTop){
			clearInterval(timer);
		}
		isTop = false;
	}
	
	obtn.onclick = function(){
		//设置定时器
		timer = setInterval(function(){
			var osTop = document.documentElement.scrollTop || document.body.scrollTop;
			var ispeed = Math.floor(-osTop / 6);
			document.documentElement.scrollTop = document.body.scrollTop = osTop +ispeed;
			isTop = true;
			console.log(osTop -ispeed);
			if(osTop == 0){
				clearInterval(timer);
			}
		},30);
	}
}