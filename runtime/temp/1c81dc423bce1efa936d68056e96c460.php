<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"D:\wamp\www\tp5\public/../application/index\view\leaveword\index.html";i:1510104900;s:72:"D:\wamp\www\tp5\public/../application/index\view\indexPublic\header.html";i:1510124548;s:72:"D:\wamp\www\tp5\public/../application/index\view\indexPublic\footer.html";i:1510047321;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>留言区</title>
    <link rel="stylesheet" href="/static/css/base.css">
    <link rel="stylesheet" href="/static/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/static/font/iconfont.css">
    <link rel="stylesheet" href="/static/css/style.css">
    <script src="/static/js/jquery.min.js"></script>
</head>
<body>
<header>
    <div class="head">
        <?php switch($catgory): case "index": ?>
            <a href="<?php echo url('index/index'); ?>" class="active" >首页</a>
            <a href="<?php echo url('note/index'); ?>">笔记</a>
            <a href="<?php echo url('jottings/index'); ?>">杂记</a>
            <a href="<?php echo url('leaveword/index'); ?>">留言</a>
            <a href="<?php echo url('write/index'); ?>">写入</a>
        <?php break; case "note": ?>
            <a href="<?php echo url('index/index'); ?>">首页</a>
            <a href="<?php echo url('note/index'); ?>" class="active" >笔记</a>
            <a href="<?php echo url('jottings/index'); ?>">杂记</a>
            <a href="<?php echo url('leaveword/index'); ?>">留言</a>
            <a href="<?php echo url('write/index'); ?>">写入</a>
        <?php break; case "jottings": ?>
            <a href="<?php echo url('index/index'); ?>">首页</a>
            <a href="<?php echo url('note/index'); ?>">笔记</a>
            <a href="<?php echo url('jottings/index'); ?>" class="active" >杂记</a>
            <a href="<?php echo url('leaveword/index'); ?>">留言</a>
            <a href="<?php echo url('write/index'); ?>">写入</a>
        <?php break; case "leaveword": ?>
            <a href="<?php echo url('index/index'); ?>">首页</a>
            <a href="<?php echo url('note/index'); ?>">笔记</a>
            <a href="<?php echo url('jottings/index'); ?>">杂记</a>
            <a href="<?php echo url('leaveword/index'); ?>" class="active" >留言</a>
            <a href="<?php echo url('write/index'); ?>">写入</a>
        <?php break; case "write": ?>
            <a href="<?php echo url('index/index'); ?>">首页</a>
            <a href="<?php echo url('note/index'); ?>">笔记</a>
            <a href="<?php echo url('jottings/index'); ?>">杂记</a>
            <a href="<?php echo url('leaveword/index'); ?>">留言</a>
            <a href="<?php echo url('write/index'); ?>" class="active" >写入</a>
        <?php break; endswitch; ?>
    </div>
</header>
<main>

</main>
<footer>
    <div>
        非商业-个人开发
    </div>
    备案号：晋ICP备17004757号-1
</footer>
<script>
    var ch=window.innerHeight;
    var jh=$("header").height()+$("footer").height();
    var yh=$("main").height();
    if((jh+yh)>ch){
        $("footer").css("position","static");
    }
    window.onresize = function(){
        var ch=window.innerHeight;
        var jh=$("nav").height()+$("header").height()+$("footer").height();
        $("main").css("min-height",(ch-jh)+"px");
    }
</script>
</body>
</html>