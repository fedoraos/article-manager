<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>添加文章</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    .heading {
        height: 110px;
        background-color: lavender;
    }

    .heading p {
        padding: 35px 0 0 20px; /*上右下左*/
        font-size: 20px
    }

    .container {
        width: 100%;
        height: 200px;

    }

    .container .lf {
        float: left;
        width: 160px;
        height: 500px;
        background-color: thistle;
    }

    .container .lf p{
        padding: 20px 0 0 5px;
    }

    .container .rf {
        float: left;
        width: 600px;
    }
    .ask-title{
        text-align: center;
    }
    .footing {
        width: 100%;
        height: 50px;
        background-color: aqua;
    }

</style>
<body>
<div class="heading">
    <p>后台管理系统</p>
</div>
<div class="container">
    <div class="lf">
        <p><a href="article.add.php">发布文章</a></p>
        <p><a href="about.add.php">修改关于我</a></p>
        <p><a href="article.manage.php">文章管理</a></p>
        <p><a href="../article.list.php">返回网站首页</a></p>
    </div>
    <div class="rf">
        <span class="ask-title ">发布文章</span>
        <form action="article.add.handle.php" method="post">
            <div>
                <label for="title">标题</label>
                <input type="text" name="title" id="title">
            </div>
            <div>
                <label for="author">作者</label>
                <input type="text" name="author" id="author">
            </div>
            <div>
                <label for="description">简介</label>
                <textarea name="description" id="description" cols="60" rows="5"></textarea>
            </div>
            <div>
                <label for="content">内容</label>
                <textarea name="content" id="content" cols="60" rows="15"></textarea>
            </div>
            <input type="submit" value="提交">
        </form>
    </div>
</div>
<div class="clearfix" style="clear: both"></div>
<div class="footing">版权所有</div>

</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: arno
 * Date: 15-1-18
 * Time: 下午10:00
 */