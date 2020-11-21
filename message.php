<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>留言板</title>
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/jquery-1.11.0.min.js"></script>
</head>
<body>
<?php session_start(); require("./_top.php"); ?>


 <!-- 留言模块 -->
 <div class="message1">
   <img id="xwgk" src="./images/xwgk-banner.jpg" alt="">
    <!-- 留言表单 -->
    <form action="./api/messageUp.php" method="post">
      <input type="hidden" name="user" value=<?php echo $_SESSION['uname'] ?>>
      <input type="hidden" name="date" value="" id="date">
      <input type="text" placeholder="请输入留言内容" name="message">
      <input type="submit" value="留言">
    </form>

    <!-- 展示留言 -->
    <ul>
      <li>
        <span>用户名</span>
        <span>留言内容</span>
        <span>留言时间</span>
      </li>

      <?php
      require("./api/config.php");

      // 查询留言数据表的所有数据  倒叙查询
      $str = "SELECT * FROM message01 order by messageid desc";
      $sech = mysqli_query($connID, $str);

      //如果 sql 语句执行失败则打印
      if (!$sech) {
        printf("Error: %s\n", mysqli_error($connID));
        exit();
      }
      ?>

      <!-- 遍历获取的数据为数组 -->
      <?php while ($row =  mysqli_fetch_array($sech, MYSQLI_ASSOC)) { ?>
        <li>
          <span><?php echo $row["user"] ?></span>
          <span><?php echo $row["content"] ?></span>
          <span><?php echo $row["date"] ?></span>
        </li>
      <?php } ?>

    </ul>
  </div>



<?php require("./_foot.php") ?>
  
</body>
</html>
<script src="./js/index.js"></script>
<script>
      //打开网页就把当前时间给 form 表单中的 date
      var time3 = new Date().Format("yyyy年MM月dd日  hh:mm");
      $("#date").val(time3)
    </script>