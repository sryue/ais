<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
   <link href="css/quality.css" rel="stylesheet">
    <style>

    </style>
</head>
<body>
<div class="head1">
    <span id="tou"><img src="./images/headtu.jpg" alt=""/></span>我的&nbsp;&nbsp;&nbsp;推荐&nbsp;&nbsp;&nbsp;发现
</div>
<div class="head2">
    首页&nbsp;&nbsp;&nbsp;&nbsp;精选集&nbsp;&nbsp;&nbsp;&nbsp;排行榜&nbsp;&nbsp;&nbsp;&nbsp;电台&nbsp;&nbsp;mv
</div>
<div class="head3">
    <ul>
        <li>推荐</li>
        <li>最新</li>
        <li>最热</li>
        <li>专区</li>
    </ul>
</div>
<div class="jingxuan">
    <?php
        foreach($data as $k){
            ?>
            <dl>
        <dt><a href="jx?id=<?php echo $k->spe_id; ?>"><img src="<?php echo $k->spe_img; ?>" alt="" width="200rem" height="200rem"/></a></dt>
        <dd>
            <h1><a href="jx?id=<?php echo $k->spe_id; ?>"><?php echo $k->spe_name; ?></a></h1>
            <p><a href="jx?id=<?php echo $k->spe_id; ?>"><span><?php echo $k->spe_desc; ?></span></a></p>
        </dd>
    </dl>
        <?php }
    ?>
    
    
</div>
</body>
</html>