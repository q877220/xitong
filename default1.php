<?php 
        function is_weixin(){
           if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
               return true;
              }  
              return false;
          } 
   ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title><?php echo $sitename ?></title>
<link rel="stylesheet" type="text/css" href="/default/css/sytle.css?v=201905111940" />
<script type="text/javascript" src="/default/js/jquery-1.8.2.min.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript">
		var phoneWidth =  parseInt(window.screen.width);
		var phoneScale = phoneWidth/750;
		var ua = navigator.userAgent;
		if (/Android (\d+\.\d+)/.test(ua)){
			var version = parseFloat(RegExp.$1);
			if(version>2.3){
				document.write('<meta name="viewport" content="width=750, minimum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi">');
			}else{
				document.write('<meta name="viewport" content="width=750, target-densitydpi=device-dpi">');
			}
		} else {
			document.write('<meta name="viewport" content="width=750,user-scalable=no, target-densitydpi=device-dpi">');
		}
</script>

</head>
<body id="wrap">
<div class="lou">
    <div class="cover"></div>
</div>

<section id="allpage" class="p-index">
	<div class="banner"><img src="/default/images/banner2.jpg"></div>
   <!-- <div class="gonggao"> <span>平台公告：乐煜网络演示站</span></div>
    <div class="userbox">
    	<div class="infobox"><span class="touxiang"><img src="<?php echo $_SESSION['headimg'];?>"></span><span><?php echo $_SESSION['username'];?></span></div>
    	<div class="infobox">游戏点数：<?php echo get_query_val("fn_user", "money", array("roomid" => $_SESSION['roomid'], 'userid' => $_SESSION['userid']));?></div>
    	<div class="infobox">在线人数：1612</div>
    </div-->
	<div class="gamebox">
    	<div class="navhl_b">
            <a href="javascript:;" class="xcnav_1 navhl_h">彩票游戏</a>
            <a href="javascript:;" class="xcnav_2">真人视讯</a>
        </div>
        <div class="gamelist">
        	<div class="caipiao">
                <div class="game jssc"><a href="/qr.php?room=<?php echo $_SESSION['roomid'];?>&g=jssc"><img src="/default/images/jssc.png" alt=""></a></div>
            	<div class="game jsssc"><a href="/qr.php?room=<?php echo $_SESSION['roomid'];?>&g=jsssc"><img src="/default/images/jsssc.png" alt=""></a></div>
                <div class="game jsmt"><a href="/qr.php?room=<?php echo $_SESSION['roomid'];?>&g=jsmt"><img src="/default/images/jsmt.png" alt=""></a></div>
            	<div class="game xyft"><a href="/qr.php?room=<?php echo $_SESSION['roomid'];?>&g=xyft"><img src="/default/images/xyft.png" alt=""></a></div>
            	<div class="game gdyx"><a href="/qr.php?room=<?php echo $_SESSION['roomid'];?>&g=lhc"><img src="/default/images/gdyx.png" alt=""></a></div>
            	<div class="game txffc"><a href="/qr.php?room=<?php echo $_SESSION['roomid'];?>&g=txffc'"><img src="/default/images/txffc.png" alt=""></a></div>
            	<div class="game azxy10"><a href="/qr.php?room=<?php echo $_SESSION['roomid'];?>&g=azxy10'"><img src="/default/images/azxy10.png" alt=""></a></div>
            	<div class="game azxy5"><a href="/qr.php?room=<?php echo $_SESSION['roomid'];?>&g=azxy5"><img src="/default/images/azxy5.png" alt=""></a></div>
            	<div class="game xy28"><a href="/qr.php?room=<?php echo $_SESSION['roomid'];?>&g=xy28"><img src="/default/images/xy28.png" alt=""></a></div>
            </div>
        	<div class="zhenren">
                <?php if(is_weixin()==true){?>
                <a href="/qr.php?room=<?php echo $_SESSION['roomid'];?>&g=bjl"><img src="/default/images/zhenren1.jpg"></a>
                <?php }else{?>
                <a href="/zhenren/login.php?=<?php $_SESSION['username'];?>" style="display:block;margin-bottom:10px;"><img src="/default/images/zhenren.jpg"></a>
                <?}?>
            </div>
        </div>	
    </div>
	<div class="ft">
    	<div class="nav">
    	<!--ul>
        	<li class="a1"><a href="/qr2.php?room=<?php echo $_SESSION['roomid'];?>" class="hover"><span class="ft_icon"></span><div class="ft_nav">游戏大厅</div></a></li>
        	<li class="a2"><a href="/Templates/user/"><span class="ft_icon"></span><div class="ft_nav">用户中心</div></a></li>
            <?php $key = (int)get_query_val('fn_setting', 'payfs', array('roomid' => $_SESSION['roomid']));?>
			<?php if($key == 2){?>
            <li class="a4" data-id="cz"><a href="/pay/index.php"><span class="ft_icon"></span><div class="ft_nav">在线充值</div></a></li>
            <?php }elseif($key == 1){?>
            <li class="a4" data-id="cz"><a href="/spay/index.php?roomid=<? echo $_SESSION['roomid'];?>&g=<? echo $_COOKIE['game'];?>&img=<? echo $_SESSION['headimg'];?>&m=<? echo  $_SESSION['username'];?>&id=<? echo  $_SESSION['userid'];?>"><span class="ft_icon"></span><div class="ft_nav">在线充值</div></a></li>
            <?php }elseif($key == 3){?>
            <li class="a4" data-id="cz"><a href="/dspay/index.php"><span class="ft_icon"></span><div class="ft_nav">在线充值</div></a></li>
            <?php }?>

            <?php if(is_weixin()==true){?>
            <li class="a3"><a href="/appxz/index.html"><span class="ft_icon"></span><div class="ft_nav">APP下载</div></a></li>
            <?php }else{?>
            <li class="a5"><a href="/tui.php"><span class="ft_icon"></span><div class="ft_nav">退出登录</div></a></li>
            <?}?>
        </ul>
        </div-->
        	
    	<ul>
        	<li class="a1"><a href="/qr2.php?room=<?php echo $_SESSION['roomid'];?>" class="hover"><span class="ft_icon"></span><div class="ft_nav">游戏大厅</div></a></li>
        	<li class="a2"><a href="/Templates/user/"><span class="ft_icon"></span><div class="ft_nav">用户中心</div></a></li>
            <?php $key = (int)get_query_val('fn_setting', 'payfs', array('roomid' => $_SESSION['roomid']));?>
			<?php if($key == 2){?>
            <li class="a4" data-id="cz"><a href="/pay/index.php"><span class="ft_icon"></span><div class="ft_nav">在线充值</div></a></li>
            <?php }elseif($key == 1){?>
            <li class="a4" data-id="cz"><a href="/spay/index.php?roomid=<? echo $_SESSION['roomid'];?>&g=<? echo $_COOKIE['game'];?>&img=<? echo $_SESSION['headimg'];?>&m=<? echo  $_SESSION['username'];?>&id=<? echo  $_SESSION['userid'];?>"><span class="ft_icon"></span><div class="ft_nav">在线充值</div></a></li>
            <?php }elseif($key == 3){?>
            <li class="a4" data-id="cz"><a href="/dspay/index.php"><span class="ft_icon"></span><div class="ft_nav">在线充值</div></a></li>
            <?php }?>

            <?php if(is_weixin()==true){?>
            <li class="a3"><a href="/Templates/New/tgzq.php"><span class="ft_icon"></span><div class="ft_nav">推广赚钱</div></a></li>
            <?php }else{?>
            <li class="a5"><a href="/tui.php"><span class="ft_icon"></span><div class="ft_nav">退出登录</div></a></li>
            <?}?>
        </ul>
        </div>
    
    </div>
</section>
  
<div id="orientLayer" class="mod-orient-layer" style="display: block;">
    <div class="mod-orient-layer__content">
        <i class="icon mod-orient-layer__icon-orient"></i>

        <div class="mod-orient-layer__desc">为了更好的体验，请使用竖屏浏览</div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$(".xcnav_1").click(function(e) {
		$(".zhenren").hide()
		$(".caipiao").show()
		$(".xcnav_2").removeClass("navhl_h")
		$(this).addClass("navhl_h")
	});
	$(".xcnav_2").click(function(e) {
		$(".zhenren").show()
		$(".caipiao").hide()
		$(".xcnav_1").removeClass("navhl_h")
		$(this).addClass("navhl_h")
	});
})

	

</script>
  
<script>
    var orientLayer = document.getElementById("orientLayer");
    //判断横屏竖屏
    function checkDirect() {
        if (document.documentElement.clientHeight >= document.documentElement.clientWidth) {
            return "portrait";
        } else {
            return "landscape";
        }
    }
    //显示屏幕方向提示浮层
    function orientNotice() {
        var orient = checkDirect();
        if (orient == "portrait") {
            orientLayer.style.display = "none";
        } else {
            orientLayer.style.display = "block";
        }
    }
    function init() {
        orientNotice();
        window.addEventListener("onorientationchange" in window ? "orientationchange" : "resize", function () {
            setTimeout(orientNotice, 200);
        })
    }
    init();
  
  document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
WeixinJSBridge.call('hideToolbar');
});
</script>


</body>
</html>