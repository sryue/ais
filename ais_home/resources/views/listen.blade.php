<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="Css/tplayer.css" />
<link rel="stylesheet" type="text/css" href="Plugins/FontAwesome4.1/css/font-awesome.min.css" />
<script src="Js/jquery.js"></script>
<script src="Js/jquery-ui.js"></script>
<script src="Js/tPlayer.js"></script>
</head>
<body>
<div class="myplayer">
<div id="t_wrapper">
  <div id="t_cover"> <img src="Images/logo.png" id='musicImg'> </div>
  <div id="t_top">
    <div id="t_title_info"> <span class="artist"></span> <span class="title"></span> </div>
  </div>

  <div id="t_middle">
    <div id="play" ></div>
    <div id="pause" class="hidden"> </div>
    <div class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" id="t_progress" style="width:410px">
      <div id="trackInfo" >
        <div id="error"> </div>
        <div id="current">0:00</div>
        <div id="duration">0:00</div>
      </div>
      <div style="width: 0%;" class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" ></div>
      <span style="left: 0%;" class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span> </div>
    <span id="prev"></span> <span id="next"></span> </div>

  <div id="t_bottom">
    <div id="range">
      <div id="val"></div>
      <div id="vol"></div>
      <div id="rangeVal"></div>
    </div>
    <div id="t_pls_show" class="noselectpls"></div>
  </div>
</div>
<div id="playlist">
  <ul>
    @foreach($musicList as $k=>$v)
    <li t_cover="http://www.mymusic.com{{$v->music_img}}" t_artist="{{$v->music_name}}" t_name="{{$v->actor_name}}" class='listLS'> <a href="#"> {{$k+1}}. {{$v->music_name}} - {{$v->actor_name}}</a>
      <audio preload="none" >
        <source src="http://www.mymusic.com{{$v->music_path}}" type="audio/mp3">
      </audio>
    </li>
    @endforeach


  </ul>
</div>
</div>
</body>
</html>
<script type="text/javascript">
  $(".listLS").click(function()
  {
       var imgpath = $(this).attr('t_cover');

       $("#musicImg").src(imgpath);
  })
</script>