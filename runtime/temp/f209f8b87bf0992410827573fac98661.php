<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\wamp\www\tp5\public/../application/index\view\jottings\index.html";i:1510136492;s:72:"D:\wamp\www\tp5\public/../application/index\view\indexPublic\header.html";i:1510124548;s:72:"D:\wamp\www\tp5\public/../application/index\view\indexPublic\footer.html";i:1510047321;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>杂记区</title>
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
<h2>杂记列表（<?php echo $list->total(); ?>）</h2>
<div class="note-info">
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jottings): $mod = ($i % 2 );++$i;?>
    <div class="note-list">
        <div class="note-id">
            ID：<?php echo $jottings['id']; ?><br/>
            标题：<?php echo $jottings['title']; ?><br/>
            类型：<?php echo $jottings['type']; ?><br/>
            时间：<?php echo $jottings['time']; ?><br/>
            来源：<?php echo $jottings['author']; ?>
        </div>
        <div class="note-content">
            <?php echo $jottings['con']; ?>
        </div>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <?php echo $list->render(); ?>
</div>
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