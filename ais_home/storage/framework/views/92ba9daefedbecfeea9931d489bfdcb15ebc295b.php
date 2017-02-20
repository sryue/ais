<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>精选集详情</title>
    <style>
        #one{ background-image: url("images/5.jpg"); height: 500px;width: 980px; }
        h1{ text-align: center; }
        #o1{ height: 350px;width:350px;float: left; }
        #o2{ height: 350px;width: 630px;float: left; }
        #o3{ clear:both; width:980px;height: 100px;}
        #o3 ul li{ list-style: none;float: left;margin: 50px 100px; }
        #dao{ width: 980px;height: 100px; }
        #d1{ width: 440px;height: 60px;float: left;margin-left: 20px; }
        #d2{ width: 220px;height: 60px;float: right;margin-right: 20px; }
        #d3{ width: 220px;height: 60px;float: right; }
        #foot{ clear: both;width:980px;height: 300px; }
        #foot dt{ width: 200px;height: 300px; float: left;}
        #f1{ width:500px;height: 300px; float: left;}
        #f2{ width:200px;height: 300px; float: left;}
        #z{ width: 980px;height: 100px;background-color: #f00;position: fixed;
        bottom: 0; }
    </style>
</head>
<body>
<div id="one">
    <h1>精选集</h1>
    <?php
     foreach($one as $k){
        ?>
        <div id="o1">
        <img src="<?php echo $k->spe_img; ?>" style="width: 300px;height: 300px;margin: 25px;">
    </div>
    <div id="o2">
        <h1><?php echo $k->spe_name; ?></h1>
        <h2 style="margin-left: 50px;"><?php echo $k->spe_desc; ?> ></h2>
    </div>
     <?php }
    ?>
    
    <div id="o3">
        <ul>
            <li>介绍</li>
            <li>2057</li>
            <li>12</li>
            <li>分享</li>
        </ul>
    </div>
  <div id="dao">
        <div id="d1">全部播放<?php foreach($count as $k){ echo $k->con; } ?>首</div>
        <div id="d2">全部下载</div>
        <div id="d3">管理</div>
    </div>
</div>
<?php
foreach($data as $k){
    ?>
    <div id="foot">
    <div>
        <dl>
            <dt>
            <a href="chajian?music_id=<?php echo $k->music_id?>">
                <img src="<?php echo $k->music_img; ?>" style="width: 150px;height: 150px;margin: 20px;">
            </a>
            </dt>
            <dd id="f1">
                <h2><?php echo $k->music_name; ?></h2>
                <span><?php echo $k->actor_name; ?></span>
            </dd>
            <dd id="f2">
                ***
            </dd>
        </dl>
    </div>
</div>
 <?php }
?>



</body>
</html>