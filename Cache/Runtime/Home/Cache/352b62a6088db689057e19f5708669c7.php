<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>安全知识竞赛问卷</title>
<META NAME="DESCRIPTION" CONTENT="蚁群工作室是四川理工学院大学生网络技术协会下属的一个专门对外商业化的网站制作团队，其服务宗旨是：提供交流学习平台，提升队员WEB开发技术。以人为本,以技术为魂,以社会为舞台,以竞争为动力.网络------网聚人的力量">
<META NAME="keywords" CONTENT="大学生网络技术协会, 网协, 蚁群工作室, 四川理工学院,新闻">
<link href="__ROOT____CSS__style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<style type="text/css">
  .error {
    background-color:#f77171;
  }
</style>
</head>

<body>
<div id="box">
    <div class="survey">
        <div id="ctl00_ContentPlaceHolder1_JQ1_question" class="surveycontent">
            <div id="ctl00_ContentPlaceHolder1_JQ1_surveyContent">
                    <div class="div_title_page_question">
                        <div style="text-align:center;">
                            <span style="line-height:1.5;"><b>安全知识竞赛问卷</b></span>
                        </div>
                        亲爱的<span style="color:red"><?php echo ($_SESSION['stu']['name']); ?></span>同学：
                        <br>
                        红色背景为你答错的题目！
                        <br>
                    </div>
                    
            </div>

         </div>

    </div>

</div>
<div class="login_copyright" style="text-align:center;">
  <span><a href="http://wlxh.suse.edu.cn/" target=_blank >大学生网络技术协会</a> <a href="http://www.yekezhong.com/" target=_blank >叶科忠</a> <span>技术支持</span></span>
</div>
</body>
</html>