<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>修改学生管理-后台管理-<?php echo ($site["SITE_INFO"]["name"]); ?></title>
        <?php $addCss=""; $addJs=""; $currentNav ='学生管理 > 学生列表'; ?>
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
                        <div class="current">修改角色</div>
                    </div>
                    <form action="" method="post">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
                            <tr aid="<?php echo ($vo["Member"]); ?>">
                                <th width="120">分数：</th>
                            </tr>
                         <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center" aid="<?php echo ($vo["Member"]); ?>">
                                    <td><?php echo ($vo["fraction"]); ?></td>
                             </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            <tr>
                                <th>修改：</th>
                                <td><textarea name="remark" style="width: 50px;"><?php echo ($vo["sfraction"]); ?></textarea></td>
                            </tr>
                        </table>
                        <input type="hidden" name="id" value="<?php echo ($vo["sfraction"]); ?>"/>
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
    $(function(){
        $(".submit").click(function(){
            commonAjaxSubmit();
        });
    });
    </body>
</html>