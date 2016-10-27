<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>安全设置-系统设置-<?php echo ($site["SITE_INFO"]["name"]); ?></title>
    <?php $addCss=""; ?>
    <?php $addJs=""; ?>
    <base href="<?php echo ($site["WEB_ROOT"]); ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo ($site["WEB_ROOT"]); ?>Public/Min/?f=../Public/Css/base.css|../Public/Css/layout.css|__PUBLIC__/Js/asyncbox/skins/default.css<?php echo ($addCss); ?>" />
<script type="text/javascript" src="<?php echo ($site["WEB_ROOT"]); ?>Public/Min/?f=__PUBLIC__/Js/jquery-1.9.0.min.js|__PUBLIC__/Js/jquery.lazyload.js|__PUBLIC__/Js/functions.js|../Public/Js/base.js|__PUBLIC__/Js/jquery.form.js|__PUBLIC__/Js/asyncbox/asyncbox.js<?php echo ($addJs); ?>"></script>
</head>
<body>
    <div class="wrap"> <div id="Top">
    <div class="logo"><a href="<?php echo ($site["WEB_ROOT"]); ?>"><img src="../Public/Img/logo.png" width="195px" /></a></div>
    <div class="menu">
        <ul> <?php echo ($menu); ?> </ul>
    </div>
</div>
<div id="Tags">
    <div class="userPhoto"><img src="../Public/Img/a.jpg" /> </div>
    <div class="navArea">
        <div class="userInfo"><div><a href="<?php echo U('Webinfo/index');?>" class="sysSet"><span>&nbsp;</span>系统设置</a> <a href="<?php echo U("Public/loginOut");?>" class="loginOut"><span>&nbsp;</span>退出系统</a></div>欢迎您，<?php echo ($my_info["email"]); ?></div>
        <div class="nav"><font id="today"><?php echo date("Y-m-d H:i:s"); ?></font>您的位置：<?php echo ($currentNav); ?></div>
    </div>
</div>
<div class="clear"></div>
        <div class="mainBody"> <div id="Left">
    <div id="control" class=""></div>
    <div class="subMenuList">
        <div class="itemTitle"><?php if(MODULE_NAME == 'Index'): ?>常用操作<?php else: ?>子菜单<?php endif; ?> </div>
        <ul>
            <?php if(is_array($sub_menu)): foreach($sub_menu as $key=>$sv): ?><li><a href="<?php echo ($sv["url"]); ?>"><?php echo ($sv["title"]); ?></a></li><?php endforeach; endif; ?>
        </ul>
    </div>
</div>
            <div id="Right">
                <div class="contentArea">
                    <div class="Item hr">
                        <div class="current">安全设置</div>
                    </div>
                    <form action="" method="post">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
                         
                            <tr>
                                <th>后台登陆有效期：</th>
                                <td><input class="input" name="admin_timeout" type="text" size="40" value="<?php echo ($site["TOKEN"]["admin_timeout"]); ?>" /> 登陆后如未操作时间超过该设定值时就自动退出系统，单位为秒，最小值为100</td>
                            </tr>
                            <tr>
                                <th>前台登陆标示：</th>
                                <td><input class="input" name="member_marked" type="text" size="40" value="<?php echo ($site["TOKEN"]["member_marked"]); ?>" /> </td>
                            </tr>
                            <tr>
                                <th>前台登陆有效期：</th>
                                <td><input class="input" name="member_timeout" type="text" size="40" value="<?php echo ($site["TOKEN"]["member_timeout"]); ?>" /></td>
                            </tr>
                        </table>
                    </form>
                    <div class="commonBtnArea" >
                        <button class="btn submit">提交</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
<div id="Bottom">© 2013 本后台由 <a href="http://weibo.com/u/2101863667" target="_blank">@黄健</a></div>
<script type="text/javascript">
    $(window).resize(autoSize);
    $(function(){
        autoSize();
        $(".loginOut").click(function(){
            var url=$(this).attr("href");
            popup.confirm('你确定要退出吗？','你确定要退出吗',function(action){
                if(action == 'ok'){ window.location=url; }
            });
            return false;
        });

        var time=self.setInterval(function(){$("#today").html(date("Y-m-d H:i:s"));},1000);


    });

</script>
<script type="text/javascript">
    $(".submit").click(function(){
        commonAjaxSubmit();
    });
</script>
</body>
</html>