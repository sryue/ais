<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <script type="text/javascript" src="http://down.hovertree.com/jquery/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://hovertree.com/texiao/jqimg/4/js/jquery.SuperSlide.js"></script>
    <style>
    </style>
</head>
<body>
    <!-- 遮罩层 -->
    <div id="fade1" class="black_overlay"></div>
    <div id="MyDiv1" class="white_content">             
        <div class="white_d">
            <div class="notice_t"> 
            </div>
            <div class="notice_c">
                <table border="0" align="center" style="margin-top:;" cellspacing="0" cellpadding="0">
                  <tr valign="top">
                    <td width="60"><br><img src="images/suc.png" /></td>
                    <td>
                        <br><span style="color:red; font-size:50px;">歌曲已成功添加到列表</span><br /><br>
                    </td>
                  </tr>
                  <tr height="50" valign="bottom">
                    <td>&nbsp;</td>
                    <td><a href="/listen" class="b_sure" >查看播放列表</a><a href="#" class="b_buy">继续点歌</a></td>
                  </tr>
                </table>  
            </div>
        </div>
    </div> 
    <br>

<div class="head1">
    <span id="tou"><img src="./images/1.jpg" alt="" width='60px'; height='40px'/></span><span id='tou2'><a href="{{URL('/mine_index')}}" style="color:inherit;">我的</a>&nbsp;&nbsp;&nbsp;推荐&nbsp;&nbsp;&nbsp;发现
    </span>
</div>
<div class="head2">
    首页&nbsp;&nbsp;&nbsp;&nbsp;<a href="quality">精选集</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{URL('/rank_index')}}">排行榜</a>&nbsp;&nbsp;&nbsp;&nbsp;电台&nbsp;&nbsp;mv
</div>
<div class="focusBox">
    <ul class="pic" >
        <li><a href="http://hovertree.com/menu/texiao/" target="_blank"><img src="./images/2.jpg"></a></li>
        <li><a href="http://hovertree.com/h/bjaf/szbeijing.htm" target="_blank"><img src="./images/3.jpg"></a></li>
        <li><a href="http://hovertree.com/h/bjaf/hovertreebox.htm" target="_blank"><img src="./images/4.jpg"></a></li>
        <li><a href="http://hovertree.com/h/bjaf/8c5uhche.htm" target="_blank"><img src="./images/5.jpg"></a></li>
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
        <li>排行榜</li>
    </ul>
    <ul>
        <li><img src="./images/listen.png" width="70rem" height="70rem"/></li>
        <li>听歌识取</li>
    </ul>
</div>
<div class="tuijian">
    <p><span id="more">更多</span>为你推荐</p>
    @foreach($topList as $k=>$v)
    <div class='song' attr='{{ $v->music_id }}'>
        <img src="http://www.mymusic.com{{ $v->music_img }}" alt="" width='300px' height='250px' />
        <span>{{ $v->music_name }}</span>
    </div>
    @endforeach
</div>
<div class="newsong">
    <p><span id="newmore">更多</span>新碟首发</p>
    @foreach($hotList as $k=>$v)
    <div class='song' attr='{{ $v->music_id }}'>
        <img src="http://www.mymusic.com{{ $v->music_img }}" alt="" width='300px' height='250px' />
        <span>{{ $v->music_name }}</span>
    </div>
    @endforeach
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

<div id='member'>
    <div style='height:60px;background:#666666'></div>
    <div id='memberHeader'>
            <div id="memimg">
            </div>
            <span id='memname'>张大叔叔</span>
        <hr>
        <ul id='memyl'>
            <li>
                累计播放 0
            </li>
            <li>
                关注  0
            </li>
            <li>
                粉丝  0 
            </li>
        </ul>
    </div>
    <div id='memlist'>
        <ul>
            <li>签到</li>
            <li>会员中心</li>
            <li>我收藏的</li>
            <li>设置</li>
            <li>退出</li>
        </ul>
    </div>
</div>

<script type="text/javascript">
    jQuery(".focusBox").slide({ titCell:".num li", mainCell:".pic",effect:"fold", autoPlay:true,trigger:"click",startFun:function(i){jQuery(".focusBox .txt li").eq(i).animate({"bottom":0}).siblings().animate({"bottom":-36});}});
</script>

<script type="text/javascript">
    $("#tou").click(function()
    {
        if($("#member").is(":hidden"))
        {
            $("#member").show();
        }else
        {
            $("#member").hide();
        }
    })
    $(".song").click(function()
    {
        var music_id = $(this).attr('attr');
        $.ajax({
           type: "POST",
           url: "joinlisten",
           data: "music_id="+music_id+"&_token={{ csrf_token() }}",
           // dataType:'json',
           success: function(msg){
                $("#MyDiv1").show();
                $("#fade1").show();
           }
        });
    })
    $(".b_buy").click(function()
    {
        $("#MyDiv1").hide();
        $("#fade1").hide();
    })
</script>

</body>
</html>