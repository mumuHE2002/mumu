  <!-- 顶部 -->
  <div class="top">
    <div class="main">
      <p>欢迎访问贵阳一中</p>
      <ul>
        <li><a href="./index.php">网站首页</a></li>
        <?php
        session_start();

        if ($_GET["tui"]) {
          $_SESSION  = array();
        }

        if (!$_SESSION["uname"]) {
        ?>
          <li><a href="./dl.php?nav=99">用户登录</a></li>
          <li><a href="./zc.php?nav=99">用户注册</a></li>
        <?php } else { ?>
          <li><a href="#"><?php echo $_SESSION["uname"] ?></a></li>
          <li><a href="./index.php?tui=1">退出登录</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>

  <!-- logo -->
  <div class="logo">
    <div class="main">
      <div class="ph">
        <img src="./images/logo.jpg" alt="">
        <h1>贵 阳 一 中</h1>
      </div>
      <div class="search">
      </div>
    </div>
  </div>

  <!-- 导航条 -->
  <div class="nav">
    <div class="main">
      <ul>
        <?php if (!$_GET["nav"]) { ?>
          <a href="./index.php" class="atr">首页</a>
        <?php } else { ?>
          <a href="./index.php">首页</a>
        <?php } ?>

        <?php if ($_GET["nav"] == 2) { ?>
          <a href="./zoujing.php?nav=2" class="atr">走进一中</a>
        <?php } else { ?>
          <a href="./zoujing.php?nav=2">走进一中</a>
        <?php } ?>

        <?php if ($_GET["nav"] == 3) { ?>
          <a href="./ynews.php?nav=3" class="atr">一中新闻</a>
        <?php } else { ?>
          <a href="./ynews.php?nav=3">一中新闻</a>
        <?php } ?>

        <?php if ($_GET["nav"] == 5) { ?>
          <a href="./yzdj.php?nav=5" class="atr">一中党建</a>
        <?php } else { ?>
          <a href="./yzdj.php?nav=5">一中党建</a>
        <?php } ?>

        <?php if ($_GET["nav"] == 6) { ?>
          <a href="./yzxz.php?nav=6" class="atr">一中行政</a>
        <?php } else { ?>
          <a href="./yzxz.php?nav=6">一中行政</a>
        <?php } ?>

        <?php if ($_GET["nav"] == 7) { ?>
          <a href="./gcgg.php?nav=7" class="atr">课程改革</a>
        <?php } else { ?>
          <a href="./gcgg.php?nav=7">课程改革</a>
        <?php } ?>

        <?php if ($_GET["nav"] == 8) { ?>
          <a href="./jsyd.php？nav=8" class="atr">教师园地</a>
        <?php } else { ?>
          <a href="./jsyd.php?nav=8">教师园地</a>
        <?php } ?>
        <?php if ($_GET["nav"] == 9) { ?>
          <a href="./dytd.php?nav=9" class="atr">德育天下</a>
        <?php } else { ?>
          <a href="./dytd.php?nav=9">德育天下</a>
        <?php } ?>
        <?php if ($_GET["nav"] == 10) { ?>
          <a href="./jyky.php?nav=10" class="atr">教育科研</a>
        <?php } else { ?>
          <a href="./jyky.php?nav=10">教育科研</a>
        <?php } ?>
        <?php if ($_GET["nav"] == 11) { ?>

          <a href="./gjjy.php?nav=11" class="atr">国际教育</a>
        <?php } else { ?>

          <a href="./gjjy.php?nav=11">国际教育</a>
        <?php } ?>
        <?php if ($_GET["nav"] == 4) { ?>
          <a href="./message.php?nav=4" class="atr">留言板</a>
        <?php } else { ?>
          <a href="./message.php?nav=4">留言板</a>
        <?php } ?>









      </ul>
    </div>
  </div>

  <!-- 时间 -->
  <div class="time">
    <div class="main">
      <p class="show_time">asdasdasd</p>
    </div>
  </div>