<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
  <title>学生信息</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<style type="text/css">
  div#div1{
    margin-left: 780px;
    margin-top: 90px;
    width: 430px;
    height: 250px;
    padding-top:90px; 
    border-radius:10px;
    -moz-border-radius:10px;
    background-image: url(__ROOT____IMG__3.jpg);
    background-size: 428px;
    background-repeat: no-repeat;
    text-align: center;
    position: absolute;
    font-family: 'New York', serif;
  }
  div#div2{
    margin-top: 15px;
    margin-left: 50px;
  }
  div#div3{
    margin-top: 25px;
    margin-left: 30px;
    position: absolute;
    font-family: Georgia, 'New York', serif;
    font-weight: bold;
    font-size: 15px;
  }
  .vae{
    border-radius:5px;
    -moz-border-radius:5px;
    width: 150px;
  }
 .vae:focus {
  border-color: #b8d7f2;
  outline: 0;}
  body{
    background-image: url(__ROOT____IMG__2.png);
    background-repeat: repeat-x;
  }

</style>
 </head>
<body >
<div>
  
  <img src="__ROOT____IMG__4.png" width="200px">
</div>
<div id="div2">
  <img src="__ROOT____IMG__5.png" width="600px">
</div>
<div id="div3">
  <p>  <span class="STYLE6">1.参赛对象：全体在校学生。<br /><br />
2.本次竞赛答题时间为<font color="#FF0000">50分钟</font>。<br /><br />
3.本系统总共600道竞赛题目，将随机抽选50道，全部为单项选择题。每题2分，总分100分。<br /><br />
4.本次竞赛时间为2013年11月10日上午8:00至11月20日下午18:00<br /><br />
5.参赛时间安排如下：<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2013年11月10-12日：黄岭校区<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2013年11月13日：材化学院、人文学院、理学院、研究生处<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2013年11月14日：经管学院、计算机学院、政治学院<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2013年11月15日：生工学院、体育学院、建工学院<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2013年11月16日：自电学院、艺术学院、化药学院<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2013年11月17日：机械学院、外语学院、法学院<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2013年11月18日-11月20日：为自由竞赛时间（在各参赛单位相对于的参赛时间内未完成<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;的同学在这三天内完成参赛）</span>
      </p>
</div>
<div id="div1" >
<?php echo ($stu["school_ID"]); ?><br/>
<?php echo ($stu["grade"]); ?> <?php echo ($stu["name"]); ?><br/>
<?php echo ($stu["campus"]); ?> <?php echo ($stu["college"]); ?>  <?php echo ($stu["specialty"]); ?><br/>
<?php if(($_SESSION['stu']['isdone']) == "0"): ?><a href="./run.html">开始答题</a>
<?php else: ?>得分：<?php echo ($_SESSION['stu']['fraction']); endif; ?><br/>
<a href="error">我错了那些题?</a>
<a href="out">退出登录</a>
</div>


</body>
</html>