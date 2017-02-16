<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<link rel="stylesheet" href="./css/regist.css">
<body>
    <div id="head">
        <a href="#" id="return">←</a>
        <span>注册</span>
    </div>
    <form action="/regist_pro" method="post">
    <input type="text" id="tel" name="telphone" placeholder="&nbsp;&nbsp;请输入手机号" value="<?php echo e(isset($tel) ? $tel : ''); ?>">
    <?php if($error == 1): ?>
            <span id='ts' style="font-size: 43px;color: red;padding-left: 10px; ">该手机号已被注册</span>
        <?php elseif($error == 2): ?>
            <span id='ts' style="font-size: 43px;color: red;padding-left: 10px; ">手机号注册频繁</span>
        <?php else: ?>
            <span id='ts' style="font-size: 43px;color: red;padding-left: 10px;display: none"></span>
        <?php endif; ?>
    <input type="submit" id="sbt" value="下一步">
    </form>
    <span id="footer">注册代表你同意  <a href="#"><<爱尚音乐使用协议和隐私条款>> </a> </span>
</body>
</html>
<script src="./js/jquery.1.12.min.js"></script>
<script type="text/javascript">
    $("#sbt").click(function()
    {
        var tel = $("#tel").val();
        if(tel == '')
        {
            $("#ts").html('');
            $("#ts").html('请输入手机号');
            $("#ts").show();
            return false;
        }
        if(checkMobile(tel))
        {

        }else {
            $("#ts").html('');
            $("#ts").html('请输入正确手机号');
            $("#ts").show();
            return false;
        }
    })

    function checkMobile( s ){
        var regu =/^[1][3][0-9]{9}$/;
        var re = new RegExp(regu);
        if (re.test(s)) {
            return true;
        }else{
            return false;
        }
    }
</script>
