<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>排行榜</title>
	 <link href="./css/ranking_list.css" rel="stylesheet">
	 <link rel="stylesheet" href="http://cdn.bootcss.com/aplayer/1.4.6/APlayer.min.css"> 
</head>
<body>
		<!-- Header -->
		<div class="head1">
		    <span id="tou"><img src="./images/1.jpg" alt=""/></span>我的&nbsp;&nbsp;&nbsp;推荐&nbsp;&nbsp;&nbsp;发现
		</div>
		<div class="head2">
		    首页&nbsp;&nbsp;&nbsp;&nbsp;精选集&nbsp;&nbsp;&nbsp;&nbsp;排行榜&nbsp;&nbsp;&nbsp;&nbsp;电台&nbsp;&nbsp;mv
		</div>

		<!-- 爱尚官方榜 -->
		<div class="top">
			<h2 class="tname">爱尚官方榜</h2>

			<a href="{{URL('/rank_lisk')}}?ifid=1">
			<div class="top1">
				<img src="./images/16.jpg" alt="">
				<ul>
					<b>新歌榜</b>
					<?php foreach ($data1 as $k => $v): ?>
					<li><?php echo $v['actor_name'];?>-<?php echo $v['music_name']; ?></li>
					<?php endforeach ?>
				</ul>
				<img src="./images/aaa.jpg" class="imgs">
			</div><hr>
			</a>

			<a href="{{URL('/rank_lisk')}}?ifid=2">
			<div class="top1">
				<img src="./images/16.jpg" alt="">
				<ul>
					<b>热歌榜</b>
					<?php foreach ($data2 as $ke => $va): ?>
					<li><?php echo $va['actor_name'];?>-<?php echo $va['music_name']; ?></li>
					<?php endforeach ?>
				</ul>
				<img src="./images/aaa.jpg" class="imgs">
			</div><hr>
			</a>

			<a href="{{URL('/rank_lisk')}}?ifid=3">
			<div class="top1">
				<img src="./images/16.jpg" alt="">
				<ul>
					<b>原创榜</b>
					<?php foreach ($data3 as $key => $val): ?>
					<li><?php echo $val['actor_name'];?>-<?php echo $val['music_name']; ?></li>
					<?php endforeach ?>
				</ul>
				<img src="./images/aaa.jpg" class="imgs">
			</div><hr>
			</a>
		</div>

		<!-- 全球排行榜 -->
		<div class="middle">
			<h2 class="tname">全球排行榜</h2>

			<a href="{{URL('/rank_lisk')}}?ifid=4">
			<div class="top1">
				<img src="./images/16.jpg" alt="">
				<ul>
					<b>欧美单曲榜</b>
					<?php foreach ($data4 as $keys => $valu): ?>
					<li><?php echo $valu['actor_name'];?>-<?php echo $valu['music_name']; ?></li>
					<?php endforeach ?>
				</ul>
				<img src="./images/aaa.jpg" class="imgs">
			</div><hr>
			</a>

			<a href="{{URL('/rank_lisk')}}?ifid=5">
			<div class="top1">
				<img src="./images/16.jpg" alt="">
				<ul>
					<b>日语激情榜</b>
					<?php foreach ($data5 as $keyss => $value): ?>
					<li><?php echo $value['actor_name'];?>-<?php echo $value['music_name']; ?></li>
					<?php endforeach ?>
					
				</ul>
				<img src="./images/aaa.jpg" class="imgs">
			</div><hr>
			</a>

			<a href="{{URL('/rank_lisk')}}?ifid=6">
			<div class="top1">
				<img src="./images/16.jpg" alt="">
				<ul>	
					<b>韩国MNET音乐排行榜</b>
					<?php foreach ($data6 as $keyss => $value): ?>
					<li><?php echo $value['actor_name'];?>-<?php echo $value['music_name']; ?></li>
					<?php endforeach ?>
				</ul>
				<img src="./images/aaa.jpg" class="imgs">
			</div><hr>
			</a>

			<a href="{{URL('/rank_lisk')}}?ifid=7">
			<div class="top1">
				<img src="./images/16.jpg" alt="">
				<ul>
					<b>Hito 中文排行榜</b>
					<?php foreach ($data7 as $keyss => $value): ?>
					<li><?php echo $value['actor_name'];?>-<?php echo $value['music_name']; ?></li>
					<?php endforeach ?>
				</ul>
				<img src="./images/aaa.jpg" class="imgs">
			</div><hr>
			</a>

		</div>

		<!-- 爱尚特色榜 -->
		<div class="buttom">
			<h2 class="tname">爱尚特色榜</h2>
			<a href="{{URL('/rank_lisk')}}?ifid=8">
			<div class="top1">
				<img src="./images/16.jpg" alt="">
				
				<ul>
					<b>流行 Pop</b>
					<?php foreach ($data8 as $keyss => $value): ?>
					<li><?php echo $value['actor_name'];?>-<?php echo $value['music_name']; ?></li>
					<?php endforeach ?>
				</ul>
				<img src="./images/aaa.jpg" class="imgs">
			</div><hr>
			</a>

			<a href="{{URL('/rank_lisk')}}?ifid=9">
			<div class="top1">
				<img src="./images/16.jpg" alt="">
				<ul>
					<b>摇滚 Rock</b>
					<?php foreach ($data9 as $keyss => $value): ?>
					<li><?php echo $value['actor_name'];?>-<?php echo $value['music_name']; ?></li>
					<?php endforeach ?>
				</ul>
				<img src="./images/aaa.jpg" class="imgs">
			</div><hr>
			</a>
			
			<a href="{{URL('/rank_lisk')}}?ifid=10">
			<div class="top1">
				<img src="./images/16.jpg" alt="">
				<ul>
					<b>民谣 Folk</b>
					<?php foreach ($data10 as $keyss => $value): ?>
					<li><?php echo $value['actor_name'];?>-<?php echo $value['music_name']; ?></li>
					<?php endforeach ?>
				</ul>
				<img src="./images/aaa.jpg" class="imgs">
			</div><hr>

			<a href="{{URL('/rank_lisk')}}?ifid=11">
			<div class="top1">
				<img src="./images/16.jpg" alt="">
				<ul>
					<b>电子 Electronic</b>
					<?php foreach ($data11 as $keyss => $value): ?>
					<li><?php echo $value['actor_name'];?>-<?php echo $value['music_name']; ?></li>
					<?php endforeach ?>
				</ul>
				<img src="./images/aaa.jpg" class="imgs">
			</div><hr>
			</a>

			<a href="{{URL('/rank_lisk')}}?ifid=12">
			<div class="top1">
				<img src="./images/16.jpg" alt="">
				<ul>
					<b>节奏布鲁斯 R&b</b>
					<?php foreach ($data12 as $keyss => $value): ?>
					<li><?php echo $value['actor_name'];?>-<?php echo $value['music_name']; ?></li>
					<?php endforeach ?>
				</ul>
				<img src="./images/aaa.jpg" class="imgs">
			</div><hr>
			</a>

			<a href="{{URL('/rank_lisk')}}?ifid=13">
			<div class="top1">
				<img src="./images/16.jpg" alt="">
				<ul>
					<b>爵士 Jazz</b>
					<?php foreach ($data13 as $keyss => $value): ?>
					<li><?php echo $value['actor_name'];?>-<?php echo $value['music_name']; ?></li>
					<?php endforeach ?>
				</ul>
				<img src="./images/aaa.jpg" class="imgs">
			</div><hr>
			</a>

			<a href="{{URL('/rank_lisk')}}?ifid=14">
			<div class="top1">
				<img src="./images/16.jpg" alt="">
				<ul>
					<b>轻音乐 Easy Listen</b>
					<?php foreach ($data14 as $keyss => $value): ?>
					<li><?php echo $value['actor_name'];?>-<?php echo $value['music_name']; ?></li>
					<?php endforeach ?>
				</ul>
				<img src="./images/aaa.jpg" class="imgs">
			</div><hr>
			</a>
		</div>	
</body>
</html>