<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册</title>
    <!-- <link rel="stylesheet" href="./css/style2.css"> -->
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery-1.11.0.min.js"></script>
</head>
<body>
    <?php require './_top.php' ?>
    <form action="./api/register.php" method="POST">
        <div class="sm"></div>
        <div class="dl_per">
            <p >注册</p>
            <p> <input type="text" name="username" required="required" placeholder="用户名"></p>
            <p> <input type="text" name="phone" required="required" placeholder="手机号"></p>
            <p> <input type="password" name="userpwd" required="required" placeholder="密码"></p>
            <p><button style="background-color: #f47920 ;" id="submit" type="submit">注册账号</button></p>
            <p><a href="./dl.php?nav=99">前往登录</a></p>
        </div>
    </form>
    <?php require './_foot.php' ?>
</body>

</html>
<script src="./js/index.js"></script>