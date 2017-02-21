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
<div class="jingxuan">
    <?php
    foreach($data as $k){
    ?>
        <a href="wen?id=<?php echo $k->art_id; ?>">
    <dl>
        <dt><img src="<?php echo $k->art_img; ?>" alt="" width="200rem" height="200rem"/></dt>
        <dd>
            <h1><?php echo $k->art_title; ?></h1>
            <p><span><?php echo $k->jian; ?></span></p>
        </dd>
    </dl>
        </a>
    <?php }
    ?>


</div>
</body>
</html>