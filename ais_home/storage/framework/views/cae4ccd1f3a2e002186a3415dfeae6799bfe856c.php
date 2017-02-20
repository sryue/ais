<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/hovertreess.css" />
    <script type="text/javascript" src="http://down.hovertree.com/jquery/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://hovertree.com/texiao/jqimg/4/js/jquery.SuperSlide.js"></script>

    <style>
    </style>
</head>
<body>
<div class="head1">
    <span id="tou"><img src="./images/headtu.jpg" alt=""/></span>我的&nbsp;&nbsp;&nbsp;推荐&nbsp;&nbsp;&nbsp;发现
    <span><a href="">登录</a> &nbsp;<a href="">注册</a></span>
</div>
<div class="head2">
    首页&nbsp;&nbsp;&nbsp;&nbsp;精选集&nbsp;&nbsp;&nbsp;&nbsp;排行榜&nbsp;&nbsp;&nbsp;&nbsp;电台&nbsp;&nbsp;mv

</div>
<div class="focusBox">
    <ul class="pic" >
        <li><a href="http://hovertree.com/menu/texiao/" target="_blank"><img src="./images/5.jpg"></a></li>
        <li><a href="http://hovertree.com/h/bjaf/szbeijing.htm" target="_blank"><img src="./images/2.jpg"></a></li>
        <li><a href="http://hovertree.com/h/bjaf/hovertreebox.htm" target="_blank"><img src="./images/3.jpg"></a></li>
        <li><a href="http://hovertree.com/h/bjaf/8c5uhche.htm" target="_blank"><img src="./images/4.jpg"></a></li>
    </ul>
    <!-- <div class="txt-bg"></div> -->
    <ul class="num">
        <li class=" "><a>1</a><span></span></li>
        <li class=" "><a>2</a><span></span></li>
        <li class=" on"><a>3</a><span></span></li>
        <li class=" "><a>4</a><span></span></li>
    </ul>
</div>
<div class="category">
    <ul>
        <li><img src="./images/like.png" width="70rem" height="70rem"/></li>
        <li>猜你喜欢</li>
    </ul>
    <ul>
        <li><img src="./images/hot.png" width="70rem" height="70rem"/></li>
        <li>最新最热</li>
    </ul>
    <ul>
        <li><img src="./images/jingxuan.png" width="70rem" height="70rem"/></li>
        <li>情人节</li>
    </ul>
    <ul>
        <li><img src="./images/listen.png" width="70rem" height="70rem"/></li>
        <li>听歌拾取</li>
    </ul>
</div>
<div class="tuijian">
    <p><span id="more">更多</span>为你推荐</p>
    <ul>
        <li><img src="./images/6.jpg" alt=""/></li>
        <li>每日推荐30收</li>
    </ul>
    <ul>
        <li><img src="" alt="" width="10rem" height="10rem"/></li>
        <li>每日推荐30收</li>
    </ul>
    <ul>
        <li><img src="" alt="" width="10rem" height="10rem"/></li>
        <li>每日推荐30收</li>
    </ul>
    <ul>
        <<li><img src="" alt="" width="10rem" height="10rem"/></li>
        <li>每日推荐30收</li>
    </ul>
    <ul>
        <li><img src="" alt="" width="10rem" height="10rem"/></li>
        <li>每日推荐30收</li>
    </ul>
    <ul>
        <li><img src="" alt="" width="10rem" height="10rem"/></li>
        <li>每日推荐30收</li>
    </ul>
</div>
<div class="newsong">
    <p><span id="newmore">更多</span>新碟首发</p>
    <ul>
        <li><img src="./images/2.jpg" alt=""/></li>
        <li>每日推荐30收</li>
    </ul>
    <ul>
        <li><img src="" alt="" width="10rem" height="10rem"/></li>
        <li>每日推荐30收</li>
    </ul>
    <ul>
        <li><img src="" alt="" width="10rem" height="10rem"/></li>
        <li>每日推荐30收</li>
    </ul>
    <ul>
        <<li><img src="" alt="" width="10rem" height="10rem"/></li>
        <li>每日推荐30收</li>
    </ul>
    <ul>
        <li><img src="" alt="" width="10rem" height="10rem"/></li>
        <li>每日推荐30收</li>
    </ul>
    <ul>
        <li><img src="" alt="" width="10rem" height="10rem"/></li>
        <li>每日推荐30收</li>
    </ul>
</div>
<div class="zhuanti">
    <p><span>更多</span>专题</p>
    <div class="zhuanti1">
    <img src="./images/2.jpg" alt=""/>
</div>
    <div class="zhuanti1">
        <img src="./images/2.jpg" alt=""/>
    </div>
    <div class="zhuanti1">
        <img src="./images/2.jpg" alt=""/>
    </div>
</div>
<script type="text/javascript">
    jQuery(".focusBox").slide({ titCell:".num li", mainCell:".pic",effect:"fold", autoPlay:true,trigger:"click",startFun:function(i){jQuery(".focusBox .txt li").eq(i).animate({"bottom":0}).siblings().animate({"bottom":-36});}});
</script>
</body>
</html>