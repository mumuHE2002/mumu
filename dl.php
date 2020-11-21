<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录</title>
    <!-- <link rel="stylesheet" href="./css/style2.css"> -->
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery-1.11.0.min.js"></script>
</head>
<body>
  
    <?php require './_top.php' ?>
    <form action="./api/dl01.php" method="POST">
        <div class="sm"></div>
        <div class="dl_per">
            <p >登录</p>
            <p> <input type="text" name="username" required="required" placeholder="用户名"></p>
            <p> <input type="password" name="userpwd" required="required" placeholder="密码"></p>
            <p><button  id="submit" type="submit">登录</button></p>
            <p><a href="./zc.php?nav=99">前往注册</a></p>
        </div>
    </form>
    <?php require './_foot.php' ?>
</body>

</html>
<script src="./js/index.js"></script>